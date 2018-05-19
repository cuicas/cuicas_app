<?php

namespace SistemaEncuesta\EncuestasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use SistemaEncuesta\EncuestasBundle\Entity\Encuesta;
use SistemaEncuesta\EncuestasBundle\Entity\Preguntas;
use SistemaEncuesta\EncuestasBundle\Entity\EncuestaTipoRespuesta;
use SistemaEncuesta\EncuestasBundle\Entity\TipoRespuesta;
use SistemaEncuesta\EncuestasBundle\Entity\Municipio;
use SistemaEncuesta\EncuestasBundle\Entity\Parroquia;
use SistemaEncuesta\EncuestasBundle\Entity\DatosEncuesta;
use SistemaEncuesta\EncuestasBundle\Entity\Contactados;
use SistemaEncuesta\EncuestasBundle\Entity\ContactadosSufragio;
use SistemaEncuesta\EncuestasBundle\Entity\Incidencias;
use SistemaEncuesta\EncuestasBundle\Entity\Candidatos;
use SistemaEncuesta\EncuestasBundle\Entity\CvCandidatos;
use SistemaEncuesta\EncuestasBundle\Entity\CargoComando;
use SistemaEncuesta\EncuestasBundle\Entity\ContactadoComando;
//use SistemaEncuesta\EncuestasBundle\Entity\UsuarioMunicipio;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use SistemaEncuesta\EncuestasBundle\Form\Frontend\EncuestaType;
use SistemaEncuesta\EncuestasBundle\Form\Frontend\PreguntasType;
use SistemaEncuesta\EncuestasBundle\Form\Frontend\EquiposType;
use SistemaEncuesta\EncuestasBundle\Form\Frontend\CandidatoType;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

use Symfony\Component\HttpFoundation\StreamedResponse;

class EncuestasController extends Controller
{

    public function indexAction()
    {
        
        return $this->render('EncuestasBundle:Default:index.html.twig');
    }

    public function crearAction()
    {
        $peticion = $this->getRequest();
        $encuesta = new Encuesta();
        $formulario = $this->createForm(new EncuestaType(),$encuesta);
        $formulario->handleRequest($peticion);

        $em = $this->getDoctrine()->getManager();
        $encuestasFase2 = $em->getRepository('EncuestasBundle:Encuesta')->findBy(array('tipoEncuesta' => "fase2"),array('nombreEncuesta'=>'ASC'));


        //si el formulario esta lleno correctamente se porcede a guardar los datos
        if ($formulario->isValid()) {
            $nombreEncuesta = $formulario->getData()->getNombreEncuesta();
            $encuesta->setNombreEncuesta(ucwords($nombreEncuesta));
            // Validar los datos enviados y guardarlos en la base de datos
            $date1 = $peticion->request->get('encuestasbundle_crear');
            $fecha1 = $date1['fechaInicio'];
            $encuesta->setFechaInicio(new \DateTime($fecha1));
            //tercera fecha
            $date2 = $peticion->request->get('encuestasbundle_crear');
            $fecha2 = $date2['fechaFin'];
            $encuesta->setFechaFin(new \DateTime($fecha2));
            $tipoEncuesta = $formulario->getData()->getTipoEncuesta();
            $encuesta->setTipoEncuesta($tipoEncuesta[0]);

            $definitiva = $peticion->request->get('definitiva');
            $encuestaFase2 = $peticion->request->get('encuestaFase2');

            $encuesta->setDefinitiva($definitiva);
            if(isset($encuestaFase2) and $encuestaFase2 != ""){
                $encuesta->setEncuestaFase2($encuestaFase2);
            }
            else{
                $encuesta->setEncuestaFase2(0);
            }
            
            $em->persist($encuesta);
            $em->flush();
            //$this->get('session')->getFlashBag()->add('info', 'Registro de la Encuesta Exitoso!' );
            $this->get('session')->getFlashBag()->add('info', 'La encuesta ha sido creada exitosamente' );           
            return $this->redirect($this->generateUrl('encuestas_totales',array("tipoEncuesta" => 'general')));
        }

        return $this->render('EncuestasBundle:Encuestas:encuestasCrear.html.twig',array("formulario"=>$formulario->createView(),
            "encuestasFase2"=>$encuestasFase2));
    }

   
    public function encuestasTotalAction($tipoEncuesta)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        if($tipoEncuesta=='sufragio'){
            $dql   = "SELECT a FROM EncuestasBundle:Encuesta a WHERE a.tipoEncuesta !='general' ORDER BY a.nombreEncuesta ASC ";

        } 
        else{

            $dql   = "SELECT a FROM EncuestasBundle:Encuesta a ORDER BY a.nombreEncuesta ASC";
        }

   
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*page number*/,5/*limit per page*/);

        // parameters to template
        return $this->render('EncuestasBundle:Encuestas:encuestastotales.html.twig', array('pagination' => $pagination,'buscar' => ""));

    }

    //funcion que recibe el id de la encuesta para buscarlo en base de datos y mantenerlo en sesión
    public function crearPreguntasAction($id_encuesta)
    {
        $em = $this->getDoctrine()->getManager();

        //busco la encuesta por el id que recibe
        if($em->find('EncuestasBundle:Encuesta', $id_encuesta)){
            $encuesta = $em->find('EncuestasBundle:Encuesta', $id_encuesta);
            //creo las variables de sesión id_encuesta y encuesta para mantener en sesión estos datos
            $this->getRequest()->getSession()->set('id_encuesta', $this->getRequest()->get('id_encuesta'));
            $this->getRequest()->getSession()->set('encuesta', $encuesta);

        }

        else{

            throw $this->createNotFoundException('No existe la encuesta');
        }
        
        return $this->render('EncuestasBundle:Encuestas:encuestasAsignar.html.twig', array('encuesta' => $encuesta));

    }

    public function configurarEncuestaAction () 
    {
        $peticion = $this->getRequest();
        $preguntas = new Preguntas();
        $formulario = $this->createForm(new PreguntasType(),$preguntas);
        $formulario->handleRequest($peticion);
        $em = $this->getDoctrine()->getManager();
        $encuesta = $em->find('EncuestasBundle:Encuesta', $this->getRequest()->getSession()->get('id_encuesta'));
        $cantidad = $peticion->request->get('sistemaencuesta_usuariobundle_encuestatype');

        if ($cantidad['cantidad']>0) {            
            $this->getRequest()->getSession()->set('cantidad', $cantidad['cantidad']);

            //esto sirve para recuperar los datos de las preguntas y asignarlos al fomulario
            if($encuesta->getPreguntas()){
                $preguntas = $em->find('EncuestasBundle:Preguntas', $encuesta->getPreguntas()->getId());
                $formulario = $this->createForm(new PreguntasType(),$preguntas);
                $formulario->handleRequest($peticion);
            }
        }

        //si completó bien el formulario, busca en la base de datos la encuesta y se lo asigna a preguntas
        if ($formulario->isValid()) {

            $item = $peticion->request->get('item');
            $preguntasType = $peticion->request->get('preguntastype');
            $form = $peticion->request->get('form');
            //echo "<br>se da cuenta ".$preguntasType["pregunta1"];
            //esto sirve para recuperar los datos de las preguntas y asignarlos al fomulario
            if($encuesta->getPreguntas()){ //echo '<br> entro en esto';
                $preguntas = $em->find('EncuestasBundle:Preguntas', $encuesta->getPreguntas()->getId());
                $formulario = $this->createForm(new PreguntasType(),$preguntas);
                $formulario->handleRequest($peticion);
                //$preguntas->setEncuesta($encuesta);


            }
            $preguntas->setEncuesta($encuesta); 
            $em->persist($preguntas);
            

            foreach ($preguntas as $key => $value) {
                $preguntas[$key]->getPregunta1();//$value;
            }

            if($form["definitiva"] == "si"){
                $encuesta->setDefinitiva("true");
            }
            else{
                $encuesta->setDefinitiva("false");
            }

            //echo "<br> ".$this->getRequest()->getSession()->get('cantidad');

            $respsi = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "si"));
            $respno = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "no"));
            $resdicenoser = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "dicenoser"));
            $resnosabe = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "nosabe"));
            for ($x=1; $x <= 8 ; $x++) { 
                $EncuestaTipoRespuesta = $em->getRepository('EncuestasBundle:EncuestaTipoRespuesta')->findOneBy(array('npregunta' => $x,'Preguntas'=>$preguntas->getId()));
                if (!$EncuestaTipoRespuesta){ //echo '<br> no tenia '.$x;
                    $EncuestaTipoRespuesta = new EncuestaTipoRespuesta();
                    $EncuestaTipoRespuesta->setPreguntas($preguntas);
                    $EncuestaTipoRespuesta->setIdEncuesta($preguntas);
                    $EncuestaTipoRespuesta->setNpregunta($x);
                }
                $get = "getPregunta".$x;
                //echo '<br> '.$EncuestaTipoRespuesta." -*- ".$preguntas->$get();

                if (isset ($preguntasType["pregunta".$x])) {
                    

                    if($x == 1 or $x == 2 or $x == 3 or $x == 4 or $x == 5){
                        $tieneSi = false;
                        //echo "<br> 123tiene pregunta".$x." ".$respsi;
                        foreach ($EncuestaTipoRespuesta->getTipoRespuesta() as $key => $value) {
                            if("si" == $value->getResp()){
                                //echo "<br>value ".$value->getResp();
                                $tieneSi = true;
                            }                            
                        }
                        if(!$tieneSi){
                            $EncuestaTipoRespuesta ->setTipoRespuesta($respsi);
                        }
                    }
                }
                else{
                    $em->remove($EncuestaTipoRespuesta);
                }

                if ($preguntas->$get() !=""){ //echo "<br> la pregunta $x es ".$preguntas->$get();
                    $si="si".$x;
                    $no="no".$x;
                    //$norespondio="norespondio".$x;
                    $cambiodenumero="cambiodenumero".$x;
                    $dicenoser="dicenoser".$x;
                    $nosabe="nosabe".$x;


                    /*
                                if (isset ($item [$si])) {
                                    $respsi = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "si"));
                                    
                                    $r = $EncuestaTipoRespuesta->getTipoRespuesta();
                                    $tieneSi = false;
                                    foreach ($EncuestaTipoRespuesta->getTipoRespuesta() as $key => $value) {
                                        if($item [$si] == $value->getResp()){
                                            //echo "<br>value ".$value->getResp();
                                            $tieneSi = true;
                                        }                            
                                    }
                                    if(!$tieneSi){
                                        $EncuestaTipoRespuesta ->setTipoRespuesta($respsi);
                                    }
                                }
                                else{ 
                                    $respsi = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "si"));
                                    //echo 'borrado'; exit;
                                    $EncuestaTipoRespuesta ->removeTipoRespuesta($respsi);
                                    
                                    $connection = $em->getConnection();
                                    $statement = $connection->prepare("DELETE FROM respuestas_preguntas WHERE id_encuesta_tipo_respuesta = ? AND id_tipo_respuesta = ?");
                                    $statement->bindValue(1,$EncuestaTipoRespuesta->getId());
                                    $statement->bindValue(2,$respsi->getId());
                                    $statement->execute();
                                }
                    */
                    if (isset ($item [$no])) {
                        $respno = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "no"));
                        
                        $r = $EncuestaTipoRespuesta->getTipoRespuesta();
                        $tieneNo = false;
                        foreach ($EncuestaTipoRespuesta->getTipoRespuesta() as $key => $value) {
                            if($item [$no] == $value->getResp()){
                                //echo "<br>value ".$value->getResp();
                                $tieneNo = true;
                            }                            
                        }
                        if(!$tieneNo){
                            $EncuestaTipoRespuesta ->setTipoRespuesta($respno);
                        }
                    }
                    else{ 
                        $respno = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "no"));
                        $EncuestaTipoRespuesta ->removeTipoRespuesta($respno);
                        $connection = $em->getConnection();
                        $statement = $connection->prepare("DELETE FROM respuestas_preguntas WHERE id_encuesta_tipo_respuesta = ? AND id_tipo_respuesta = ?");
                        $statement->bindValue(1,$EncuestaTipoRespuesta->getId());
                        $statement->bindValue(2,$respsi->getId());
                        $statement->execute();
                    }
                    /*
                        if (isset ($item [$norespondio])) {
                            $respnorespondio = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "norespondio"));
                            //echo '<br> -- '.$item [$norespondio];
                            $tieneNorespondio = false;
                            foreach ($EncuestaTipoRespuesta->getTipoRespuesta() as $key => $value) {//echo '<br>'.$key.' aki '.$value->getResp();
                                if($item [$norespondio] == $value->getResp()){
                                    //echo "<br>value ".$value->getResp();
                                    $tieneNorespondio = true;
                                }                            
                            }
                            if(!$tieneNorespondio){
                                $EncuestaTipoRespuesta ->setTipoRespuesta($respnorespondio);
                            }
                        }
                        else{ 
                            $respnorespondio = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "norespondio"));
                            $EncuestaTipoRespuesta ->removeTipoRespuesta($respnorespondio);
                            $connection = $em->getConnection();
                            $statement = $connection->prepare("DELETE FROM respuestas_preguntas WHERE id_encuesta_tipo_respuesta = ? AND id_tipo_respuesta = ?");
                            $statement->bindValue(1,$EncuestaTipoRespuesta->getId());
                            $statement->bindValue(2,$respsi->getId());
                            $statement->execute();
                            //echo '<br> lo kito';
                        }
                    */
                    if (isset ($item [$cambiodenumero])) {
                        $respcambiodenumero = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "cambiodenumero"));
                        
                        $tieneCambiodenumero = false;
                        foreach ($EncuestaTipoRespuesta->getTipoRespuesta() as $key => $value) {
                            //echo '<br> -- '.$item [$cambiodenumero];
                            //echo '<br>'.$key.' aki '.$value->getResp();
                            if($item [$cambiodenumero] == $value->getResp()){
                                //echo "<br>value ".$value->getResp();
                                $tieneCambiodenumero = true;
                            }                            
                        }
                        if(!$tieneCambiodenumero){
                            $EncuestaTipoRespuesta ->setTipoRespuesta($respcambiodenumero);
                        }
                    }
                    else{ 
                        $respcambiodenumero = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "cambiodenumero"));
                        $EncuestaTipoRespuesta ->removeTipoRespuesta($respcambiodenumero);
                        $connection = $em->getConnection();
                        $statement = $connection->prepare("DELETE FROM respuestas_preguntas WHERE id_encuesta_tipo_respuesta = ? AND id_tipo_respuesta = ?");
                        $statement->bindValue(1,$EncuestaTipoRespuesta->getId());
                        $statement->bindValue(2,$respsi->getId());
                        $statement->execute();
                    }

                    if (isset ($item [$dicenoser])) {
                        $resdicenoser = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "dicenoser"));
                       
                        $tieneDicenoser = false;
                        foreach ($EncuestaTipoRespuesta->getTipoRespuesta() as $key => $value) {
                            if($item [$dicenoser] == $value->getResp()){
                               // echo "<br>value ".$value->getResp();
                                $tieneDicenoser = true;
                            }                            
                        }
                        if(!$tieneDicenoser){
                            $EncuestaTipoRespuesta ->setTipoRespuesta($resdicenoser);
                        }
                    }
                    else{
                        $resdicenoser = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "dicenoser"));
                        $EncuestaTipoRespuesta ->removeTipoRespuesta($resdicenoser);

                        $connection = $em->getConnection();
                        $statement = $connection->prepare("DELETE FROM respuestas_preguntas WHERE id_encuesta_tipo_respuesta = ? AND id_tipo_respuesta = ?");
                        $statement->bindValue(1,$EncuestaTipoRespuesta->getId());
                        $statement->bindValue(2,$respsi->getId());
                        $statement->execute();
                    }

                    if (isset ($item [$nosabe])) {
                        $resnosabe = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "nosabe"));
                       
                        $tieneNosabe = false;
                        foreach ($EncuestaTipoRespuesta->getTipoRespuesta() as $key => $value) {
                            if($item [$nosabe] == $value->getResp()){
                               // echo "<br>value ".$value->getResp();
                                $tieneNosabe = true;
                            }                            
                        }
                        if(!$tieneNosabe){
                            $EncuestaTipoRespuesta ->setTipoRespuesta($resnosabe);
                        }
                    }
                    else{
                        $resnosabe = $em->getRepository('EncuestasBundle:TipoRespuesta')->findOneBy(array('resp' => "nosabe"));
                        $EncuestaTipoRespuesta ->removeTipoRespuesta($resnosabe);
                    }

                     //ANTES ESTABA AKI   
                     //$em->persist($EncuestaTipoRespuesta);
                     $errores = $this->get('validator')->validate($EncuestaTipoRespuesta);

                     if(!empty($errores))
                        {
                           // echo 'se vino'.$errorsString = (string) $errores;
                            //$errores[0]->getMessage();
                        foreach($errores as $error)
                            echo 'pp'.(string) $error->getMessage();

                    //return new Response();
                    }   
                    //ANTES ESTABA AKI
                     ///$em->flush();
                    $preguntas->setEncuestaTipoRespuesta($EncuestaTipoRespuesta);
                }           
            } 
            //echo '<br> -- '."final";
         //exit;

            $em->flush();
            $this->get('session')->getFlashBag()->add('info', 'Configuración Exitosa' );
            return $this->redirect($this->generateUrl('encuestas_totales',array("tipoEncuesta" => 'general')));
        }

          return $this->render('EncuestasBundle:Encuestas:configurarEncuesta.html.twig', array('formulario' => $formulario->createView(),'encuesta' => $this->getRequest()->getSession()->get('encuesta'),'cantidad' => $cantidad['cantidad'],'confi_preguntas' =>$preguntas));
    }

    public function eliminarAction($id_encuesta)
    {
        $em = $this->getDoctrine()->getManager();
        $encuesta = $em->getRepository('EncuestasBundle:Encuesta')->findOneById($id_encuesta);
        $em->remove($encuesta);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Encuesta eliminada correctamente' );         
        return $this->redirect($this->generateUrl('encuestas_totales',array("tipoEncuesta" => 'general')));
    }


    public function datosEncuestaAction($id_encuesta)
    {
        $results = null;
        $em = $this->getDoctrine()->getManager();
        $encuesta = $em->find('EncuestasBundle:Encuesta', $id_encuesta);
        $this->getRequest()->getSession()->set('encuesta', $encuesta);
        $peticion = $this->getRequest();
        $form = $peticion->request->get('form');
        $municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio' => 'ASC'));
        //$usuarioMunicipio =  $em->getRepository('EncuestasBundle:UsuarioMunicipio')->findAll();
        $formu = $this->createFormBuilder();
        $total = '';
        $contactadosTodos = false;
        $parroquia = "";
                
        $formulario = $formu->getForm();

        //Después de recibir la información del formulario verifico si tiene la parroquia asignada y por lo menos datos en el 1er campo
        if((isset($form['parroquia']) and $form['parroquia'] == "todos") || (isset($form['boton_buscar']) and $this->getRequest()->getSession()->get('parroquia') == "todos") || isset($form['boton_guardar'])){
            if(isset($form['parroquia']) and $form['parroquia'] == "todos"){
                $parroquias = $em->getRepository('EncuestasBundle:Parroquia')->findBy(array(),array('nombreParroquia'=>'ASC'));
                $municipio = $em->find('EncuestasBundle:Municipio', $form['municipios']);
                $equipo =$form['equipos'];
                $parroquia = $form['parroquia'];

                $this->getRequest()->getSession()->set('parroquia', $form['parroquia']);
                $this->getRequest()->getSession()->set('municipios', $municipio);
                $this->getRequest()->getSession()->set('equipo', $form['equipos']);
            }
            else{
                $parroquia = $this->getRequest()->getSession()->get('parroquia');
                $municipio = $this->getRequest()->getSession()->get('municipios');
                $equipo    = $this->getRequest()->getSession()->get('equipo');
            }

        }
        //echo $parroquia;


        if(isset($parroquia) and  $parroquia == "todos"){

            if($encuesta->getTipoEncuesta() == "general"){
                //$total = $em->getRepository('EncuestasBundle:Contactados')->findAll();
                $total = $em->getRepository('EncuestasBundle:Contactados')->findBy(array('encuesta'=>$encuesta,'equipo'=>$equipo) );
                $total = count($total);
                //echo $total;
                if($total == 0){
                    $total=true;
                }
            }
            else{
                //$total = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findAll();                
                $total = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findBy(array('encuesta'=>$encuesta,'equipo'=>$equipo) );
                $total = count($total);
                if($total == 0){
                    $total=true;
                }
            }

            if(isset($form['boton_guardar'])){

                //recupero los datos de la paq, mun, equipo, persona buscada y datos de las repuestas
                $this->getRequest()->getSession()->get('parroquia');
                $this->getRequest()->getSession()->get('municipios');
                $this->getRequest()->getSession()->get('equipo');
                $form = $peticion->request->get('form');
                //$personaEncontrado = $this->getRequest()->getSession()->get('results');
                $persona = $this->getRequest()->getSession()->get('results');

                //realizo la verificación de qué tipo de encuesta es porque existen dos, general y las etapas del sufragio
                //los contactados de las encuestas generales se guardan en contactados y los del sufragio en contactadosSufragio
                if($encuesta->getTipoEncuesta() == "general"){
                    $contactado = new Contactados();
                    $parroquia = $em->find('EncuestasBundle:Parroquia', $persona['id_parroquia']);
                    
                    $municipio = $em->find('EncuestasBundle:Municipio', $this->getRequest()->getSession()->get('municipios'));
                    /////////////////////////////////////////////////////////////////
                    //este for sirve para recuperar los datos de cada una de las respuesta seleccionada en el formulario, además hace la 
                    //verificación si la respuesta tiene algún valor y despues si hace la asignación al objeto contactado
                    for($j=1;$j<11;$j++){ //echo '<br>'.$j.' '.$form[$j];
                        if(isset($form[$j])){
                            $nombre = 'setResp'.$j;
                            $contactado->$nombre($form[$j]);
                            //echo '<br> resp'.$j.' -- '.$form[$j];
                        }
                    }
                    //
                    $contactado->setParroquia($parroquia );
                    /////////////////////////////////////////////////////////////////////////////////////////////////
                }
                else{
                    $contactado = new ContactadosSufragio();
                    //OJO PENDIENTE POR HACER CUANDO ESTE LISTO EL FORMULARIO DE LOS VOTOS................
                    $contactado->setNumeroPregunta(1);
                    $contactado->setNumeroMesa(1);
                    $contactado->setRespuesta($form[1]);
                    $contactado->setEquipo($this->getRequest()->getSession()->get('equipo'));
                    
                    $cv = $em->find('EncuestasBundle:CentroVotacion', $this->getRequest()->getSession()->get('cv'));
                    $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                        $parroquia->getMunicipio()->getCircuito()->getId(),$parroquia->getMunicipio()->getId(),
                        $parroquia->getId());
                    //.......................................
                    
                }                
                
                $contactado->setCedula($persona['cedula']);
                $contactado->setEquipo($this->getRequest()->getSession()->get('equipo'));
                $contactado->setEncuesta($encuesta);
                //echo '<br> encuesta '.$encuesta->getId();
                $em->persist($contactado);
                $em->flush($contactado);
                //exit;
            }

            $connection = $em->getConnection();
            $personaNoEncontrada = false;
            $centrodevotacion ="";
            $cont = 0;
            
            $buscando = $connection->prepare("SELECT * FROM ".$this->getRequest()->getSession()->get('equipo')." WHERE id_municipio = ? "); 
            $buscando-> bindValue(1,$municipio->getId());
            $buscando->execute();
            $totalEquipo = $buscando->fetchAll();
            //echo '<br> el total del ekipo'.
            $totalEquipo = count($totalEquipo);

            if($encuesta->getTipoEncuesta() == "general"){
                $totalPersonaContactada = $em->getRepository('EncuestasBundle:Contactados')->findBy(array('encuesta'=>$encuesta,
                    'equipo'=>$this->getRequest()->getSession()->get('equipo'), 'id_municipio'=>$municipio->getId()));                
            }
            else{
                $totalPersonaContactada = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findBy(array('encuesta'=>$encuesta,
                    'equipo'=>$this->getRequest()->getSession()->get('equipo'), 'id_municipio'=>$municipio->getId()));                
            }

            //echo '<br> '.count($totalPersonaContactada)." ".(integer)$totalEquipo;

            if((integer)count($totalPersonaContactada) == (integer)$totalEquipo){
                $personaNoEncontrada = true;
                $contactadosTodos = true;
                //echo '<br>ññ '.$cont. ' '.$total;
                $results[0]['apellidos_nombres']="";
                $results[0]['cedula']="";
                $results[0]['telefono_1']="";
                $results[0]['institucion']="";
                $this->get('session')->getFlashBag()->add('info', 'Ya todas las personas del equipo '.$this->getRequest()->getSession()->get('equipo').
                ' fueron contactadas' ); 
                return $this->redirect($this->generateUrl('encuestas_datosEncuesta', array('id_encuesta'=> $encuesta->getId())));  
            }
            else{
                $totalPersonasEncontradas =array();
                while($personaNoEncontrada == false /*and $cont != $total*/){
                    //echo 'equipo'.$form['equipos'].' -- '.$this->getRequest()->getSession()->get('equipo');
                    
                    //en la consulta de statement sustituyo el signo de interrogación por el $parroquia->getId() mediante el bindValue, el 1 es porke es el primer
                    //signo de interrogación, si hubiese otro signo de interrogación se coloca otro bindValue y sería 2 y así aumentaría d uno en uno
                    $queryContactados = "";
                    if(count($totalPersonaContactada) > 1 ){
                        foreach ($totalPersonaContactada as $key => $value) {
                            $queryContactados .= " AND cedula <> '".$value->getCedula()."'";
                        }
                        //echo '<br> '.$queryContactados;
                    }
                    //echo "<br><br> SELECT * FROM ".$this->getRequest()->getSession()->get('equipo')." WHERE id_municipio = ? ".
                    //$queryContactados." ORDER BY RANDOM() LIMIT 1 ";

                    $statement = $connection->prepare("SELECT * FROM ".$this->getRequest()->getSession()->get('equipo').
                        " WHERE id_municipio = ? ".$queryContactados." ORDER BY RANDOM() LIMIT 1 ");
                    $statement-> bindValue(1,$municipio->getId());
                    $statement->execute();
                    $results = $statement->fetchAll();
                    //echo '<br><br> coun '.count($results);
                    $newKey = "";
                    if(count($results) != 0){
                        $centrodevotacion = $em->getRepository('EncuestasBundle:CentroVotacion')->findOneBy(array('id'=>$results[0]['id_cv'],));
                        foreach ($results[0] as $key => $value) {
                            //echo "<br> $key";
                            if($key == " id_militancia"){
                                $newKey = $key;
                            }
                        }
                    }
                    //echo '<br><br> i '.$results[0]['cedula'];
                    $encontrado = false;
                    //exit;
                    //echo '<br><br>id',(integer)$encuesta->getId(),'<br>cedula'. $results[0]['cedula'],'<br>equipo',$this->getRequest()->getSession()->get('equipo');
                    //$personaContactada = $em->getRepository('EncuestasBundle:Contactados')->findOneByCedula();
                    //realizo la búskeda por el id_encuesta, cedula y equipo para verificar si ya fue contactado, si lo encuestra vuelve a buscar otra persona
                    if($totalEquipo == count($totalPersonasEncontradas)){
                        $this->get('session')->getFlashBag()->add('info', '1 No existen datos para el equipo '.$this->getRequest()->getSession()->get('equipo').
                        ' en el municipio '.$municipio); 
                        return $this->redirect($this->generateUrl('encuestas_datosEncuesta', array('id_encuesta'=> $encuesta->getId())));        
                    }

                    if(count($results) == 0){
                        $this->get('session')->getFlashBag()->add('info', 'No existen datos o todas las personas fueron contactadas del equipo '.$this->getRequest()->getSession()->get('equipo').
                        ' en el municipio '.$municipio); 
                        return $this->redirect($this->generateUrl('encuestas_datosEncuesta', array('id_encuesta'=> $encuesta->getId())));        
                    }
                    ///echo $encuesta->getTipoEncuesta().'encuesta'.$encuesta,'cedula'.$results[0]['cedula'],'equipo'.$this->getRequest()->getSession()->get('equipo');
                    //if(!$encontrado){
                        if($encuesta->getTipoEncuesta() == "general"){
                            $personaContactada = $em->getRepository('EncuestasBundle:Contactados')->findOneBy(array('encuesta'=>$encuesta,
                                'cedula' => $results[0]['cedula'],'id_municipio'=>$municipio,
                                'equipo'=>$this->getRequest()->getSession()->get('equipo')));
                        }
                        else{
                            $personaContactada = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('encuesta'=>$encuesta,
                                'cedula' => $results[0]['cedula'],'id_municipio'=>$municipio,
                                'equipo'=>$this->getRequest()->getSession()->get('equipo')));
                        }
                        //$totalPersonasEncontradas[] = $personaContactada;
                    //}
                    //echo '<br> persona '.$personaContactada;
                    //echo '<br> count persona '.count($personaContactada);
                    
                    if(isset($personaContactada)){
                        $personaNoEncontrada = false;
                    }
                    else{
                        $personaNoEncontrada = true;
                    }
                }
            }
            //exit;
            //echo '- - '.$results[0]['cedula'];
            $paq = $em->getRepository('EncuestasBundle:Parroquia')->findOneBy(array('id'=>$results[0]['id_parroquia'],));
            //echo '<br> pa '.$paq->getNombreParroquia();
            $this->getRequest()->getSession()->set('results', $results[0]);
            return $this->render('EncuestasBundle:Encuestas:mostrarDatos.html.twig', array('formulario' => $formulario->createView(),
            'equipo' => $this->getRequest()->getSession()->get('equipo'),
            'municipios' => $municipio,
            'parroquia' => $paq->getNombreParroquia(), 'encuesta' => $encuesta, 'results' => $results[0],
            'contactadosTodos'=>$contactadosTodos, 'key'=>$newKey, "centrodevotacion" =>$centrodevotacion));
        }

        //este primer if es para verificar si la acción viene desde el boton buscar o desde el boton buscar otro o desde el boton guardar
        //estas son las maneras de entrar en este if para luego realizar una búsqueda de una nueva persona y mostrarla en pantalla
        //echo isset($form['boton_buscar']);
        //echo $parroquia;
        if((isset($form['parroquia']) and $form['parroquia'] != "todos") || (isset($form['boton_buscar']) and $parroquia != "todos") || (isset($form['boton_guardar']) and $parroquia != "todos")){
            //echo "pa aca";
            if(isset($form['parroquia'])){
                $parroquia = $em->find('EncuestasBundle:Parroquia', $form['parroquia']);
                $municipio = $em->find('EncuestasBundle:Municipio', $form['municipios']);
                $equipo =$form['equipos'];
                //OJO MODIFICAR CUANDO ESTE EL FORMULARIO DE REGISTRAR LOS VOTOS...........
                //echo $cv = $em->find('EncuestasBundle:CentroVotacion', 120813001);
                //.........................................................................
                $this->getRequest()->getSession()->set('municipios', $municipio);
                $this->getRequest()->getSession()->set('parroquia', $parroquia);
                //$this->getRequest()->getSession()->set('cv', $cv);
                $this->getRequest()->getSession()->set('equipo', $form['equipos']);
                
            }
            else{
                $parroquia  =  $this->getRequest()->getSession()->get('parroquia');
                $municipio =  $this->getRequest()->getSession()->get('municipios');
                $cv         =  $this->getRequest()->getSession()->get('cv');
                $equipo      =  $this->getRequest()->getSession()->get('equipo');
                
            }


            if($encuesta->getTipoEncuesta() == "general"){
                //$total = $em->getRepository('EncuestasBundle:Contactados')->findAll();
                $total = $em->getRepository('EncuestasBundle:Contactados')->findBy(array('encuesta'=>$encuesta,'equipo'=>$equipo) );
                $total = count($total);
                //echo $total;
                if($total == 0){
                    $total=true;
                }
            }
            else{
                //$total = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findAll();                
                $total = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findBy(array('encuesta'=>$encuesta,'equipo'=>$equipo) );
                $total = count($total);
                if($total == 0){
                    $total=true;
                }
            }
            


            if(isset($form['boton_guardar'])){

                //recupero los datos de la paq, mun, equipo, persona buscada y datos de las repuestas
                $this->getRequest()->getSession()->get('parroquia');
                $this->getRequest()->getSession()->get('municipios');
                $this->getRequest()->getSession()->get('equipo');
                $form = $peticion->request->get('form');

                //realizo la verificación de qué tipo de encuesta es porque existen dos, general y las etapas del sufragio
                //los contactados de las encuestas generales se guardan en contactados y los del sufragio en contactadosSufragio
                if($encuesta->getTipoEncuesta() == "general"){
                    $contactado = new Contactados();
                    $parroquia = $em->find('EncuestasBundle:Parroquia', $this->getRequest()->getSession()->get('parroquia'));
                    
                    $municipio = $em->find('EncuestasBundle:Municipio', $this->getRequest()->getSession()->get('municipios'));
                    /////////////////////////////////////////////////////////////////
                    //este for sirve para recuperar los datos de cada una de las respuesta seleccionada en el formulario, además hace la 
                    //verificación si la respuesta tiene algún valor y despues si hace la asignación al objeto contactado
                    for($j=1;$j<11;$j++){ //echo '<br>'.$j.' '.$form[$j];
                        if(isset($form[$j])){
                            $nombre = 'setResp'.$j;
                            $contactado->$nombre($form[$j]);
                            //echo '<br> resp'.$j.' -- '.$form[$j];
                        }
                    }
                    //

                    //echo 'aki----'; exit;
                    $contactado->setParroquia($parroquia );
                    /////////////////////////////////////////////////////////////////////////////////////////////////
                }
                else{
                    $contactado = new ContactadosSufragio();
                    //OJO PENDIENTE POR HACER CUANDO ESTE LISTO EL FORMULARIO DE LOS VOTOS................
                    $contactado->setNumeroPregunta(1);
                    $contactado->setNumeroMesa(1);
                    $contactado->setRespuesta($form[1]);
                    $contactado->setEquipo($this->getRequest()->getSession()->get('equipo'));
                    
                    $cv = $em->find('EncuestasBundle:CentroVotacion', $this->getRequest()->getSession()->get('cv'));
                    $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                        $parroquia->getMunicipio()->getCircuito()->getId(),$parroquia->getMunicipio()->getId(),
                        $parroquia->getId());
                    //.......................................
                    
                }
                
                $persona = $this->getRequest()->getSession()->get('results');
                $contactado->setCedula($persona['cedula']);
                $contactado->setEquipo($this->getRequest()->getSession()->get('equipo'));
                $contactado->setEncuesta($encuesta);
                //echo '<br> encuesta '.$encuesta->getId();
                $em->persist($contactado);
                $em->flush($contactado);
                //exit;
            }

            $connection = $em->getConnection();
            $personaNoEncontrada = false;
            $centrodevotacion ="";
            $cont = 0;
            
            // ESTA ES LA CONSULTA ORIGINAL
            //LO CAMBIE AHORITA EN JULIO DEL 2017
            //$buscando = $connection->prepare("SELECT * FROM ".$this->getRequest()->getSession()->get('equipo')); 
            ///////////////////////////////
            
            $buscando = $connection->prepare("SELECT * FROM trabajadores WHERE codigo = '".$this->getRequest()->getSession()->get('equipo')."'"); 
            

            $buscando->execute();
            $totalEquipo = $buscando->fetchAll();

            $totalEquipo = count($totalEquipo);

            if($encuesta->getTipoEncuesta() == "general"){
                $totalPersonaContactada = $em->getRepository('EncuestasBundle:Contactados')->findBy(array('encuesta'=>$encuesta,
                    'equipo'=>$this->getRequest()->getSession()->get('equipo'), 'parroquia'=>$parroquia));                
            }
            else{
                $totalPersonaContactada = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findBy(array('encuesta'=>$encuesta,
                    'equipo'=>$this->getRequest()->getSession()->get('equipo'), 'parroquia'=>$parroquia));                
            }
            //$totalPersonaContactada = count($totalPersonaContactada);
            $i=0;
            //este if se hace porke se debe verificar ke el total de contactados sea diferente al total de buscados,
            //ya que si son iguales es porke en la tabla contactados estan todos los del ekipo que se esta buscando.
            if((integer)count($totalPersonaContactada) == (integer)$totalEquipo){
                $personaNoEncontrada = true;
                $contactadosTodos = true;
                //echo '<br>ññ '.$cont. ' '.$total;
                $results[0]['apellidos_nombres']="";
                $results[0]['cedula']="";
                $results[0]['telefono_1']="";
                $this->get('session')->getFlashBag()->add('info', 'Ya todas las personas del equipo '.$this->getRequest()->getSession()->get('equipo').
                ' fueron contactadas' ); 
                return $this->redirect($this->generateUrl('encuestas_datosEncuesta', array('id_encuesta'=> $encuesta->getId())));  
            }
            else{
                $totalPersonasEncontradas =array();
                while($personaNoEncontrada == false /*and $cont != $total*/){
                    //echo 'equipo'.$form['equipos'].' -- '.$this->getRequest()->getSession()->get('equipo');
                    
                    //en la consulta de statement sustituyo el signo de interrogación por el $parroquia->getId() mediante el bindValue, el 1 es porke es el primer
                    //signo de interrogación, si hubiese otro signo de interrogación se coloca otro bindValue y sería 2 y así aumentaría d uno en uno
                    $queryContactados = "";
                    if(count($totalPersonaContactada) > 1 ){
                        foreach ($totalPersonaContactada as $key => $value) {
                            $queryContactados .= " AND cedula <> '".$value->getCedula()."'";
                        }
                        //echo '<br> '.$queryContactados;
                    }
                    //echo "<br> SELECT * FROM ".$this->getRequest()->getSession()->get('equipo')." WHERE id_parroquia = ? ".$queryContactados." ORDER BY RANDOM() LIMIT 1 ";
                    $statement = $connection->prepare("SELECT * FROM trabajadores WHERE codigo = '".$this->getRequest()->getSession()->get('equipo')."'".$queryContactados." ORDER BY RANDOM() LIMIT 1 ");
                    //$statement-> bindValue(1,$parroquia->getId());
                    $statement->execute();
                    $results = $statement->fetchAll();
                    //echo '<br> coun '.count($results);
                    $newKey = "";
                    if(count($results) != 0){
                        // LO CAMBIE AHORITA EN JULIO DEL 2017

                        //$centrodevotacion = $em->getRepository('EncuestasBundle:CentroVotacion')->findOneBy(array('id'=>$results[0]['id_cv'],));
                        ////////////////////

                        $centrodevotacion = $em->getRepository('EncuestasBundle:CentroVotacion')->findOneBy(array('id'=>120813003,));
                        foreach ($results[0] as $key => $value) {
                            //echo "<br> $key";
                            if($key == " id_militancia"){
                                $newKey = $key;
                            }
                        }
                    }
                    
                    $encontrado = false;
                    //exit;
                    //echo '<br><br>id',(integer)$encuesta->getId(),'<br>cedula'. $results[0]['cedula'],'<br>equipo',$this->getRequest()->getSession()->get('equipo');
                    //$personaContactada = $em->getRepository('EncuestasBundle:Contactados')->findOneByCedula();
                    //realizo la búskeda por el id_encuesta, cedula y equipo para verificar si ya fue contactado, si lo encuestra vuelve a buscar otra persona
                    if($totalEquipo == count($totalPersonasEncontradas)){
                        $this->get('session')->getFlashBag()->add('info', '1 No existen datos para el equipo '.$this->getRequest()->getSession()->get('equipo').
                        ' en el municipio '.$municipio.' y parroquia '.$parroquia->getNombreParroquia()); 
                        return $this->redirect($this->generateUrl('encuestas_datosEncuesta', array('id_encuesta'=> $encuesta->getId())));        
                    }

                    if(count($results) == 0){
                        $this->get('session')->getFlashBag()->add('info', 'No existen datos o todas las personas fueron contactadas del equipo '.$this->getRequest()->getSession()->get('equipo').
                        ' en el municipio '.$municipio.' y parroquia '.$parroquia->getNombreParroquia()); 
                        return $this->redirect($this->generateUrl('encuestas_datosEncuesta', array('id_encuesta'=> $encuesta->getId())));        
                    }
                    ///echo $encuesta->getTipoEncuesta().'encuesta'.$encuesta,'cedula'.$results[0]['cedula'],'equipo'.$this->getRequest()->getSession()->get('equipo');
                    //if(!$encontrado){
                        if($encuesta->getTipoEncuesta() == "general"){
                            $personaContactada = $em->getRepository('EncuestasBundle:Contactados')->findOneBy(array('encuesta'=>$encuesta,
                                'cedula' => $results[0]['cedula'],'parroquia'=>$parroquia,
                                'equipo'=>$this->getRequest()->getSession()->get('equipo')));
                        }
                        else{
                            $personaContactada = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('encuesta'=>$encuesta,
                                'cedula' => $results[0]['cedula'],'parroquia'=>$parroquia,
                                'equipo'=>$this->getRequest()->getSession()->get('equipo')));
                        }
                        //$totalPersonasEncontradas[] = $personaContactada;
                    //}
                    
                    if(isset($personaContactada)){
                        $personaNoEncontrada = false;
                    }
                    else{
                        $personaNoEncontrada = true;
                    }
                }
            }

            // LO CAMBIE AHORITA EN JULIO DEL 2017
            //$paq = $em->getRepository('EncuestasBundle:Parroquia')->findOneBy(array('id'=>$results[0]['id_parroquia'],));
            //////////////////

            $paq = $em->getRepository('EncuestasBundle:Parroquia')->findOneBy(array('id'=>1,));
            //echo '<br> pa '.$paq->getNombreParroquia();
            $this->getRequest()->getSession()->set('results', $results[0]);
            return $this->render('EncuestasBundle:Encuestas:mostrarDatos.html.twig', array(
                'formulario' => $formulario->createView(),
                'equipo' => $this->getRequest()->getSession()->get('equipo'),
                'municipios' => $municipio,
                'parroquia' => $paq->getNombreParroquia(), 
                'encuesta' => $encuesta, 
                'results' => $results[0],
                'contactadosTodos'=>$contactadosTodos, 
                'key'=>$newKey, 
                "centrodevotacion" =>$centrodevotacion)
            );
        } 

        //echo 'aja';
        //exit;
        /*if(){

        }*/
        return $this->render('EncuestasBundle:Encuestas:datosEncuesta.html.twig', array('formulario' => $formulario->createView(), 'encuesta' => $encuesta, 'municipios' => $municipios, 'parroquia' =>'', ));
        
    }

    public function datosEncuestaSufragioAction($id_encuesta)
    {
        $results = null;
        $em = $this->getDoctrine()->getManager();
        $encuesta = $em->find('EncuestasBundle:Encuesta', $id_encuesta);
        $this->getRequest()->getSession()->set('encuesta', $encuesta);
        $peticion = $this->getRequest();
        $form = $peticion->request->get('form');
        $municipios = array();
        $circuitos = array();
        //$circuitos =  $em->getRepository('EncuestasBundle:Circuito')->findAll();
        //if($encuesta->getTipoEncuesta() != "general"){
        //    $municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(''),array('nombreMunicipio'=>'ASC'));
        //}
        //else{
        $usuario = $this->getUser(); 
        if($usuario->getPrioridad()){
            $cvUsuario = $em->getRepository('EncuestasBundle:CentroVotacion')->findBy(array('idUsuario'=>$usuario->getId()),array('nombreCentro'=>'ASC'));
            foreach ($cvUsuario as $key => $value) {
                //echo "<br> . ".$value->getParroquia()->getMunicipio();
                $circuito =  $em->getRepository('EncuestasBundle:Circuito')->findOneBy(array('id'=>$value->getParroquia()->getMunicipio()->getCircuito()),array('nombreCircuito'=>'ASC'));
                $municipio =  $em->getRepository('EncuestasBundle:Municipio')->findOneBy(array('id'=>$value->getParroquia()->getMunicipio()),array('nombreMunicipio'=>'ASC'));
                $municipios[] = $municipio;
                $circuitos[] = $circuito;
            }
            $municipios = array_unique($municipios); 
            $circuitos = array_unique ($circuitos);
        }
        else{
            $municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
            $circuitos =  $em->getRepository('EncuestasBundle:Circuito')->findAll();
        }
        
        //}
        
        $formu = $this->createFormBuilder();

        if($encuesta->getTipoEncuesta() == "fase2"){
            if(!$encuestaFase2 = $em->getRepository('EncuestasBundle:Encuesta')->findOneBy(array('encuestaFase2'=>$encuesta->getId()))){
                $encuestaFase2 = array('id'=>0);
            }
        }
        else{
            $encuestaFase2 = array('id'=>0);
        }

        $total = '';
        $incidencias = '';
        $datos = array();
        $contactadosTodos = false;
                
        $formulario = $formu->getForm();
        $connection = $em->getConnection();

        if(isset($form['cv']) || isset($form['boton_buscar']) || isset($form['boton_guardar']) || $peticion->query->get('totalizacion') == "totalizacion") {

            
            $totalPersonaContactada = array();
            /* si se selecciono un centro de votación es porke también se selecciono parroquia y municipio */
            if(isset($form['cv']) and $form['cv'] != "todos"){
                $parroquia = $em->find('EncuestasBundle:Parroquia', $form['parroquia']);
                $municipios = $em->find('EncuestasBundle:Municipio', $form['municipios']);
                /*echo '<br>cv '.*/$cv = $em->find('EncuestasBundle:CentroVotacion', $form['cv']);

                $this->getRequest()->getSession()->set('municipios', $municipios);
                $this->getRequest()->getSession()->set('parroquia', $parroquia);
                $this->getRequest()->getSession()->set('cv', $cv);

                
                $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = ? "); 

                //en la consulta de statement sustituyo el signo de interrogación por el $parroquia->getId() mediante el bindValue, el 1 es porke es el primer
                //signo de interrogación, si hubiese otro signo de interrogación se coloca otro bindValue y sería 2 y así aumentaría d uno en uno
                $statement-> bindValue(1,$cv->getId());
            }
            //echo '<br>statement '.$statement;
           
            /* si se selecciono TODOS en la lista de centro de votación pueden existir varias opciones, una es ke selecciono municipio
             y parroquia y al final selecciono TODOS en la lista de Centro de votacion, la otra opción es que sólo seleccionó el municipio
             pero en la lista de parroquia seleccionó TODOS y por ende en la lista de centro de votación seleccionó TODOS también. */
            if(isset($form['cv']) and $form['cv'] == "todos"){
                //cuando se selecciona todo en el centro de votación, y una parroquia y un municipio //
                $this->getRequest()->getSession()->set('cv', $form['cv']);
                if($form['parroquia'] != "todos"){
                    $parroquia = $em->find('EncuestasBundle:Parroquia', $form['parroquia']);
                    $municipios = $em->find('EncuestasBundle:Municipio', $form['municipios']);
                    $this->getRequest()->getSession()->set('municipios', $municipios);
                    $this->getRequest()->getSession()->set('parroquia', $parroquia);

                    if($encuesta->getTipoEncuesta() == "fase1"){
                        $totalPersonaContactada = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findBy(array('encuesta'=>$encuesta,
                        'id_parroquia'=>$parroquia->getId(),'id_municipio'=>$municipios->getId(),'numeroPregunta'=>2,'numeroMesa'=>0));
                    }

                    //$statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch WHERE id_parroquia = ".
                    //    $parroquia->getId()." GROUP BY ubch.id_cv ORDER BY RANDOM() LIMIT 1 )");
                    
                    $statementOTRO = $connection->prepare("SELECT id_cv FROM ubch 
                        WHERE id_parroquia = ? GROUP BY id_cv,contactado ORDER BY contactado,id_cv ASC");
                    $statementOTRO-> bindValue(1,$parroquia->getId());

                    $this->getRequest()->getSession()->set('encuestar', 0);
                    $this->getRequest()->getSession()->set('cvTotales',"");
                    //echo ' el encuestar '.$this->getRequest()->getSession()->get('encuestar');
                    //$aki = true;

                    if(count($totalPersonaContactada) > 0){
                        //$totalPersonaContactada = array_unique($totalPersonaContactada);
                        //print_r(array_values($totalPersonaContactada));
                        $queryContactados = "";
                        $idCV = array();
                        foreach ($totalPersonaContactada as $key => $value) { 
                            //echo '<br> $key'.$key." value ".$value;
                            if($key == 0){
                                $queryContactados .= " id_cv <> '".$value->getCentroVotacion()->getId()."'";
                                $idCV[] = $value->getCentroVotacion()->getId();
                                //echo '<br> el primero';
                            }
                            else{
                                if ( !in_array($value->getCentroVotacion()->getId(), $idCV)) {
                                    $queryContactados .= " AND id_cv <> '".$value->getCentroVotacion()->getId()."'";
                                    $idCV[] = $value->getCentroVotacion()->getId();
                                    //echo '<br>aki va';
                                }                                
                            }
                        }
                        //echo '<br> '.$queryContactados;
                    }        
                } /* si en la lista de parroquia selecciono una parroquia */
                else{
                    /* si se selecciono un municipio */
                    if($form['municipios'] != "todos"){
                        $municipios = $em->find('EncuestasBundle:Municipio', $form['municipios']);
                        $this->getRequest()->getSession()->set('municipios', $municipios);
                        $this->getRequest()->getSession()->set('parroquia', "todos");

                        $totalPersonaContactada = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findBy(array('encuesta'=>$encuesta,
                        'id_municipio'=>$municipios->getId()));
                        if(count($totalPersonaContactada) > 0){
                            //$totalPersonaContactada = array_unique($totalPersonaContactada);
                            //print_r(array_values($totalPersonaContactada));
                            $queryContactados = "";
                            $idCV = array();
                            //foreach ($totalPersonaContactada as $key => $value) { 
                            //    echo '<br> $key'.$key." value ".$value;
                            //}
                        }
                        /*
                            //echo'<br> $municipios'. "SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch WHERE id_municipio = ".
                            //$municipios->getId()." GROUP BY id_cv ORDER BY RANDOM() LIMIT 1 )";
                        
                        
                            $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch WHERE id_municipio = ".
                                $municipios->getId()." GROUP BY id_cv ORDER BY RANDOM() LIMIT 1 )");
                        */
                        $statementOTRO = $connection->prepare("SELECT id_cv FROM ubch 
                            WHERE id_municipio = ? GROUP BY id_cv,contactado ORDER BY contactado,id_cv ASC");
                        $statementOTRO-> bindValue(1,$municipios->getId());
                        //echo '<br>con municpio y sin parroquia';
                        $this->getRequest()->getSession()->set('encuestar', 0);
                        $this->getRequest()->getSession()->set('cvTotales',"");

                    }
                    /* si NO se selecciono un municipio */
                    else{                        
                        if(isset($form['circuitos'])){ 
                            if($form['circuitos'] != "todos"){ 
                                $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch WHERE id_circuito = ?
                                 GROUP BY id_cv ORDER BY RANDOM() LIMIT 1 )");
                                $statement-> bindValue(1,$form['circuitos']);
                                $this->getRequest()->getSession()->set('circuito', $form['circuitos']);
                            }
                            else{
                                $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch GROUP BY id_cv ORDER BY
                                 RANDOM() LIMIT 1 )");
                                $this->getRequest()->getSession()->set('circuito', "todos");
                            }
                        }
                        else{
                            $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch GROUP BY ubch.id_cv 
                                   ORDER BY RANDOM() LIMIT 1 )");
                        }
                        
                        $this->getRequest()->getSession()->set('municipios', "todos");
                        $this->getRequest()->getSession()->set('parroquia', "todos");                        
                    }                
                }
            }

            if(isset($form['boton_buscar']) || isset($form['boton_guardar']) || $peticion->query->get('totalizacion') == "totalizacion" ){

                if(isset($form['boton_guardar'])){

                    //$personaEncuestada = $this->getRequest()->getSession()->get('datos');
                    $datos = $this->getRequest()->getSession()->get('datos');
                    $results = $this->getRequest()->getSession()->get('results');

                    $parroquia = $em->find('EncuestasBundle:Parroquia', $results['id_parroquia']);
                    $municipios = $em->find('EncuestasBundle:Municipio', $results['id_municipio']);
                    $cv = $em->find('EncuestasBundle:CentroVotacion', $results['id_cv']);

                    $mesas = array();
                    $contador = 0;

                    for($g = 1;$g<9;$g++){

                        $contactado = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>1,
                            'encuesta'=>$encuesta,'numeroMesa'=>$g,'centroVotacion'=>$cv,'cedula'=>$datos['coordinador']['cedula']));
                        
                        $mesa = 'mesa'.$g;
                        //echo '<br> contactado '.$contactado;
                        if( isset($form[$mesa]) and $form[$mesa] == "si"){
                                
                            $totales = $connection->prepare("SELECT instaladas,id_cv FROM totales WHERE id_cv = ? AND id_encuesta = ? ");
                            $totales-> bindValue(1,$cv->getId());
                            $totales-> bindValue(2,$encuesta->getId());
                            $totales->execute();
                            $aperturaTotal = $totales->fetch();
                            //echo "<br> - ".$aperturaTotal['instaladas']." - ".count($aperturaTotal);
                            if($aperturaTotal['id_cv'] == ""){ //echo 'si';
                                $totales = $connection->prepare("INSERT INTO totales (id_cv,id_eje,id_parroquia,id_municipio,id_circuito,instaladas,id_encuesta)
                                 VALUES (?,?,?,?,?,?,?) ");
                                
                                $totales-> bindValue(1,$cv->getId()); //NEXTVAL('ubch_id_seq')
                                $totales-> bindValue(2,$cv->getParroquia()->getMunicipio()->getEje()->getId());
                                $totales-> bindValue(3,$cv->getParroquia()->getId());
                                $totales-> bindValue(4,$cv->getParroquia()->getMunicipio()->getId());
                                $totales-> bindValue(5,$cv->getParroquia()->getMunicipio()->getCircuito()->getId());
                                $totales-> bindValue(6,$contador);
                                $totales-> bindValue(7,$encuesta->getId());
                                $totales->execute();
                                $contador++;
                            }
                            else{

                                $aperturaTotal['instaladas']++;
                                $t0 = $connection->prepare("UPDATE totales SET instaladas = ? WHERE id_cv = ? AND id_encuesta = ? "); 
                                $t0-> bindValue(1,$aperturaTotal['instaladas']); 
                                $t0-> bindValue(2,$cv->getId());
                                $t0-> bindValue(3,$encuesta->getId());
                                $t0->execute();                           
                            }
                            
                        }
                        // pregunta uno de la fase 1, las mesas instaladas //
                        if(!$contactado and isset($form[$mesa])){
                            $contactado = new ContactadosSufragio();
                            $contactado->setCedula($datos['coordinador']['cedula']);
                            $contactado->setEncuesta($encuesta);
                            $contactado->setEquipo('ubch');
                            $contactado->setNumeroPregunta(1);
                            $contactado->setNumeroMesa($g);
                            $contactado->setRespuesta($form[$mesa]);
                            $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                                $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),
                                $parroquia->getId());
                        }
                        else{
                            if(isset($form[$mesa])){ //echo '<br> mesa '.$form[$mesa]." ".$contactado->getId()." ".$contactado->getCedula();
                                $contactado->setCedula($datos['coordinador']['cedula']);
                                $contactado->setRespuesta($form[$mesa]);
                                
                            }
                            else{
                                if(isset($contactado) and $contactado->getRespuesta() == "" ){ 
                                    $contactado->setCedula($datos['coordinador']['cedula']);
                                    $contactado->setRespuesta("-");
                                }
                            }                
                        }

                        if(isset($contactado)){ //echo '<br> cuardo ';
                            $em->persist($contactado);                
                            $em->flush($contactado);
                        }
                    }
                        // pregunta dos de la fase 1, asistieron los testigos //
                    if(isset($form['testigos'])){

                        $contactado = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>2,'encuesta'=>$encuesta,
                            'numeroMesa'=>0,'centroVotacion'=>$cv));

                        if(!$contactado){
                            $contactado = new ContactadosSufragio();
                            $contactado->setEncuesta($encuesta);
                            $contactado->setEquipo('ubch');
                            $contactado->setNumeroPregunta(2);
                            $contactado->setNumeroMesa(0);
                            
                            $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                            $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),
                            $parroquia->getId());
                        }

                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setRespuesta($form['testigos']);
                        $em->persist($contactado);
                        $em->flush($contactado);
                    }

                    // pregunta tres de la fase 1, asistieron los miebros //
                    if(isset($form['miembros'])){

                        $contactado = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>3,'encuesta'=>$encuesta,
                            'numeroMesa'=>0,'centroVotacion'=>$cv));

                        if(!$contactado){
                            $contactado = new ContactadosSufragio();
                            $contactado->setEncuesta($encuesta);
                            $contactado->setEquipo('ubch');
                            $contactado->setNumeroPregunta(3);
                            $contactado->setNumeroMesa(0);
                            
                            $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                            $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),
                            $parroquia->getId());                        
                        }

                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setRespuesta($form['miembros']);
                        $em->persist($contactado);
                        $em->flush($contactado);
                    }

                    //echo 'kiiii-- ';

                    if($this->getRequest()->getSession()->get('cv') != "todos"){
                        $municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));

                        return $this->redirect($this->generateUrl('encuestas_datosEncuestaSufragio', array('id_encuesta'=> $encuesta->getId(),
                         'municipios' => $municipios )));
                    }
                }
                
                /* entra aki para buscar una ubch cuando la accion viene del botón totalización que esta en el formulario de fase 2 */
                if($peticion->query->get('totalizacion') == "totalizacion"){
                    /*echo '<br>municipios '.*/$results = $this->getRequest()->getSession()->get('results');
                    
                    /*echo '<br>municipios '.*/$municipios = $em->getRepository('EncuestasBundle:Municipio')->findOneBy(array('id'=>$results['id_municipio']));
                    /*echo '<br>parroquia '.*/$parroquia = $em->getRepository('EncuestasBundle:Parroquia')->findOneBy(array('id'=>$results['id_parroquia']));
                    /*echo '<br>cv '.*/$cv = $em->getRepository('EncuestasBundle:CentroVotacion')->findOneBy(array('id'=>$results['id_cv']));
                    $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = ? "); 
                    $statement-> bindValue(1,$cv->getId());
                }
                else{ /* entra aki para buscar otra ubch cuando la accion viene de buscar otro o guardar fase 1  */

                    /*echo '<br>municipios '.*/$municipios = $this->getRequest()->getSession()->get('municipios');
                    /*echo '<br>parroquia '.*/$parroquia = $this->getRequest()->getSession()->get('parroquia');
                    /*echo '<br>cv '.*/$cv = $this->getRequest()->getSession()->get('cv');
                    /*echo '<br>cv '.*/$circuito = $this->getRequest()->getSession()->get('circuito');
                    if($cv != "todos"){
                        $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = ? "); 
                        $statement-> bindValue(1,$cv->getId());
                    }
                    else{ 

                        if($parroquia != "todos"){
                            //$statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch WHERE id_parroquia = ?
                            // GROUP BY ubch.id_cv ORDER BY RANDOM() LIMIT 1 )");
                            //$statement-> bindValue(1,$parroquia->getId());

                            $statementOTRO = $connection->prepare("SELECT id_cv FROM ubch 
                                WHERE id_parroquia = ? GROUP BY id_cv,contactado ORDER BY contactado,id_cv ASC");
                            $statementOTRO-> bindValue(1,$parroquia->getId());
                        }
                        else{ 
                            if($municipios != "todos"){
                                //$statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch WHERE id_municipio = ?
                                // GROUP BY ubch.id_cv ORDER BY RANDOM() LIMIT 1 )");
                                //$statement-> bindValue(1,$municipios->getId());

                                $statementOTRO = $connection->prepare("SELECT id_cv FROM ubch 
                                    WHERE id_municipio = ? GROUP BY id_cv,contactado ORDER BY contactado,id_cv ASC");
                                $statementOTRO-> bindValue(1,$municipios->getId());

                            }
                            else{
                                if($encuesta->getTipoEncuesta() == "circuito"){ 
                                    if($circuito != "todos"){
                                        $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch WHERE id_circuito = ?
                                         GROUP BY ubch.id_cv ORDER BY RANDOM() LIMIT 1 )");
                                        $statement-> bindValue(1,$circuito);
                                    }
                                    else{
                                        $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch GROUP BY ubch.id_cv 
                                            ORDER BY RANDOM() LIMIT 1 )");
                                        
                                    }
                                }
                                else{ 
                                    $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch GROUP BY ubch.id_cv 
                                            ORDER BY RANDOM() LIMIT 1 )");
                                }
                                
                            }
                        }
                    }
                }

                
            }
            //echo '<br>cv '.$cv;
            $encuestar = $this->getRequest()->getSession()->get('encuestar');
            if(!isset($statement)){ //echo '<br>sin';
                if(isset($encuestar) and $encuestar == 0 ){
                    //echo '<br>aki - ';
                    $cvTotales = $this->getRequest()->getSession()->get('cvTotales');
                    //echo '<br>aki - '.$cvTotales;
                    if(isset($cvTotales) and $cvTotales == ""){
                        $statementOTRO->execute();
                        $cvTotales = $statementOTRO->fetchAll();
                        $ubchEncontrados = array();
                        $this->getRequest()->getSession()->set('cvTotales',$cvTotales);
                        $indice = $this->getRequest()->getSession()->get('encuestar');
                        //echo '<br>indice - '.$indice;
    
                        foreach ($cvTotales as $key => $value) {
                            //echo '<br>count - '.$key.' -- '.$value['id_cv'].' -- '.$value['id_cv'];
                            $buscarUbch = $connection->prepare("SELECT * FROM ubch WHERE id_cv = ? ");
                            $buscarUbch->bindValue(1,$value['id_cv']);
                            $buscarUbch->execute();
                            
                            if($indice == $key){
                                $results = $buscarUbch->fetchAll();
                                //echo '<br>el 0 - '.$results[0]['cargo'];
                                $ubchEncontrados[$key] = $results;
                                $this->getRequest()->getSession()->set('ubchEncontrados', $results);
                            }
                            else{
                                $resultados = $buscarUbch->fetchAll();
                                //echo '<br>demas - '.$resultados[0]['cargo'];
                                $ubchEncontrados[$key] = $resultados;
                                $this->getRequest()->getSession()->set('ubchEncontrados', $ubchEncontrados);
                            }
                            //echo '<br> contando '.count($resultados);
                            //$resultados['contactado'] = $key;
                            //echo '<br> contando '.$resultados['contactado'];
                            //$ubchEncontrados[] = $resultados; 
                        }
                        if(count($cvTotales) == $indice + 1){
                            $this->getRequest()->getSession()->set('encuestar', 0);
                        }
                       
                        //echo '<br>cvTotales - ';
                        $this->getRequest()->getSession()->set('encuestar', $this->getRequest()->getSession()->get('encuestar') + 1);
                    }
                    else{
                        $ubchEncontrados = $this->getRequest()->getSession()->get('ubchEncontrados');
                        $results = $ubchEncontrados[0];
                        if(count($cvTotales) > 1){
                            $this->getRequest()->getSession()->set('encuestar', $this->getRequest()->getSession()->get('encuestar') + 1);
                        }
                    }
                }
                else{
                    //echo '<br>else - ';
                    
                    $ubchEncontrados = $this->getRequest()->getSession()->get('ubchEncontrados');
                    $cvTotales = $this->getRequest()->getSession()->get('cvTotales');
                    $indice = $this->getRequest()->getSession()->get('encuestar');
                   // echo '<br>indice - '.$indice;
    
    
                    if(count($ubchEncontrados) > 0 ){
                        //echo '<br>ubchEncontrados contados '.count($ubchEncontrados);
                        foreach ($ubchEncontrados as $key => $value) {
                            
                            //$buscarUbch = $connection->prepare("SELECT * FROM ubch WHERE id_cv = ? AND cargo = ? ");
                            //$buscarUbch->bindValue(1,$value['id_cv']);
                            //$buscarUbch->bindValue(2,"Coordinador");
                            //$buscarUbch->execute();
                            //$resultados = $buscarUbch->fetch();
    
                            $indice = $this->getRequest()->getSession()->get('encuestar');
                            // echo '<br>indice -else '.$indice;
                            //echo '<br>count -else '.$key.' -- '.$value[0]['id_cv'].' -- '.$value[0]['id_cv'];
                            if($indice == $key){
                                /* cv a mostrar */
                                echo "";
                                $results = $value;
                            }                       
                        }
    
                        if(count($cvTotales) == $indice + 1){
                            $this->getRequest()->getSession()->set('encuestar', 0);
                        }
                        else{
                            $this->getRequest()->getSession()->set('encuestar', $this->getRequest()->getSession()->get('encuestar') + 1);
                        }
                    }
                }
            }
            else{ //echo '<br>con';

                $statement->execute();
                $results = $statement->fetchAll();
            }
            //echo '<br> co '.count($results);
            for($t=0;$t<count($results);$t++){
                if(isset($results[$t])){ //echo '<br> -- '.$results[$t]['cargo']." ".$results[$t]['apellidos_nombres'];
                    if($results[$t]['cargo']=="Jefe de Logí­stica"){
                       $datos['logistica']=$results[$t];
                    }
                    if($results[$t]['cargo']=="Coordinador de Testigos"){
                        $datos['testigo']=$results[$t];
                    }
                    if($results[$t]['cargo']=="Jefe de Movilización del Voto"){
                        $datos['movilizacion']=$results[$t];
                    }
                    if($results[$t]['cargo'] == "Coordinador"){
                        /*echo '<br> -- si hay coor'.*/$results[$t]['cargo']." ".$results[$t]['apellidos_nombres'];
                        $datos['coordinador']=$results[$t];                        
                    }
                    else{
                        if(!isset($datos['coordinador'])){
                            $datos['coordinador']['apellidos_nombres'] = "No existen datos";
                            $datos['coordinador']['cedula'] = "";
                            $datos['coordinador']['telefono_1'] = "No existen datos";
                            $datos['coordinador']['id_ubch'] = "nuevo";
                        }
                    }
                }
            }

            /* esto es nuevo para saber si existen esos cargos en la BD , de lo contrario entonces creo los arreglos pero con estos datos */
            if(!isset($datos['logistica'])){
                $datos['logistica']['apellidos_nombres'] = "No existen datos";
                $datos['logistica']['cedula'] = "";
                $datos['logistica']['telefono_1'] = "No existen datos";
                $datos['logistica']['id_ubch'] = "nuevo";
            }
            if(!isset($datos['testigo'])){
                $datos['testigo']['apellidos_nombres'] = "No existen datos";
                $datos['testigo']['cedula'] = "";
                $datos['testigo']['telefono_1'] = "No existen datos";
                $datos['testigo']['id_ubch'] = "nuevo";
            }

            if(!isset($datos['movilizacion'])){
                $datos['movilizacion']['apellidos_nombres'] = "No existen datos";
                $datos['movilizacion']['cedula'] = "";
                $datos['movilizacion']['telefono_1'] = "No existen datos";
                $datos['movilizacion']['id_ubch'] = "nuevo";
            }

            $cv = $em->getRepository('EncuestasBundle:CentroVotacion')->findOneBy(array('id'=>$results[0]['id_cv']));
            $paq = $em->getRepository('EncuestasBundle:Parroquia')->findOneBy(array('id'=>$results[0]['id_parroquia']));
            $mun = $em->getRepository('EncuestasBundle:Municipio')->findOneBy(array('id'=>$results[0]['id_municipio']));
            $datos['parroquia']['nombre'] = $paq->getNombreParroquia();
            $datos['municipio']['nombre'] = $mun->getNombreMunicipio();
            
            $candidatos = "";
            $this->getRequest()->getSession()->set('datos', $datos);
            $this->getRequest()->getSession()->set('results', $results[0]);
            $contactados = array();
            $testigos = "";
            $miembros = "";
            $totalCandidatos = "";
            $votosMesa = array();

            
            if($encuesta->getTipoEncuesta() == 'fase1'){
                $plantilla = "EncuestasBundle:Encuestas:mostrarDatosFase1.html.twig";                
                
                for($g = 1;$g<9;$g++){

                    $x = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>1,'encuesta'=>$encuesta,
                        'numeroMesa'=>$g,'centroVotacion'=>$cv));
                    if(isset($x)){
                        $contactados[] = $x;
                    }
                }
                $testigos = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>2,
                    'encuesta'=>$encuesta,'numeroMesa'=>0,'centroVotacion'=>$cv));
                $miembros = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>3,
                    'encuesta'=>$encuesta,'numeroMesa'=>0,'centroVotacion'=>$cv));

            }

            if($encuesta->getTipoEncuesta() == 'fase2'){
                $plantilla = "EncuestasBundle:Encuestas:mostrarDatosFase2.html.twig";
                $incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findOneBy(array('encuesta'=>$encuesta,'cv'=>$cv->getId())) ;
                $contactadosSufragio = $em->getRepository('EncuestasBundle:contactadosSufragio')->findAll();
            
            }

            if($encuesta->getTipoEncuesta() != 'fase2' and $encuesta->getTipoEncuesta() != 'fase1' and $encuesta->getTipoEncuesta() != 'general'){
                

                $plantilla = "EncuestasBundle:Encuestas:mostrarDatosFase3.html.twig";
                if($encuesta->getTipoEncuesta() == "alcalde"){
                    $candidatos = $em->getRepository('EncuestasBundle:Candidatos')->findBy(array('encuesta'=>$encuesta,
                        'identificador'=>$mun->getId(),
                        'tipoEleccion'=>"alcalde"));
                }
                else{
                    if($encuesta->getTipoEncuesta() == "circuito"){
                        $incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findBy(array('encuesta'=>$encuesta)) ;
                        $candidatos = $em->getRepository('EncuestasBundle:Candidatos')->findBy(array('encuesta'=>$encuesta,
                        'identificador'=>$mun->getCircuito()->getId(),
                        'tipoEleccion'=>"circuito" ));
                    }
                    else{
                        $candidatos = $em->getRepository('EncuestasBundle:Candidatos')->findBy(array('encuesta'=>$encuesta,
                            'tipoEleccion'=>"estatal" ));
                    }

                }
                if ($encuesta->getTipoEncuesta() == "voto-lista"){
                    $candidatos = $em->getRepository('EncuestasBundle:Candidatos')->findBy(array('encuesta'=>$encuesta,
                            'tipoEleccion'=>"voto-lista" ));
                }

                
                $i = 3;
                $p = 0;
                $psuv = "";
                $mud = "";
                $otros = "";
                $otros1 = "";
                $votosMesa = array();

                foreach ($candidatos as $key => $value) {
                    //echo "<br> - ".$value->getPartido()." ".$p;
                    $cvCandidatosMesas = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_encuesta'=>$encuesta->getId(),
                            'centroVotacion'=>$cv,'candidatos'=>$value->getId()));
                    foreach ($cvCandidatosMesas as $llaveNew => $valueNew) {
                       $votosMesa[] = $valueNew;
                    }
                    if($value->getPartido() == "psuv" or $value->getPartido() == "gpp-psuv"){
                        //$totalCandidatos[0] = $value;
                        //array_push($totalCandidatos, array("1"=>$value));
                        $psuv=$value;
                        //echo "<br> psuv ".$p;
                        
                    }
                    if($value->getPartido() == "mud"){
                        //$totalCandidatos[1] = $value;
                        $mud=$value;
                        //array_push($totalCandidatos, array("2"=>$value));
                        //echo "<br>mud ".$p;
                        //echo "<br>--  ".$totalCandidatos[1];
                        
                    }
                    if($value->getPartido() == "otros" ){
                        //$totalCandidatos[$i] = $value;
                        
                        //array_push($totalCandidatos, array($p=>$value));
                        //echo "<br>otros ".$p." ".$i;
                        $p++;                       
                        $i++;
                        if($otros == ""){
                            //$totalCandidatos[$i] = $value;
                            $otros=$value;
                            //array_push($totalCandidatos, array($p=>$value));
                            //echo "<br>otros ".$p." ".$i;
                            $p++;                       
                            //$i++;
                        }
                        else{
                            $otros1=$value;
                        }
                    }
                    
                }
                $totalCandidatos =array("1"=>$psuv, "2"=>$mud, "3"=>$otros, "4"=>$otros1);

                // función para ordenar el arreglo por llave o clave
                ksort($totalCandidatos);

                //foreach ($totalCandidatos as $key => $value) {
                //    if(isset($value))
                //        echo "<br> -".$key." ".$value." ".$value->getPartido();
                //}

                $incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findOneBy(array('encuesta'=>$encuesta,'cv'=>$cv->getId()));
                $this->getRequest()->getSession()->set('candidatos', $totalCandidatos);

            }

            //$jk = $cv->getContactadosSufragio();
            return $this->render($plantilla, array(
                    'formulario' => $formulario->createView(),
                    'equipo' => $this->getRequest()->getSession()->get('equipo'),
                    'municipios' => $this->getRequest()->getSession()->get('municipios'),
                    'parroquia' => $this->getRequest()->getSession()->get('parroquia'), 'votosMesa'=>$votosMesa,
                    'encuesta' => $encuesta, 'cv'=>$cv, 'datos'=>$datos, 'candidatos' => $totalCandidatos,
                    'incidencias'=>$incidencias,'contactados'=>$contactados,'testigos' => $testigos, 'miembros'=>$miembros,
                    'encuestaFase2'=>$encuestaFase2,'buscarTodo'=>$this->getRequest()->getSession()->get('cv'),
                    'totalizacion'=>$peticion->query->get('totalizacion'),'contactadosSufragio'=>$peticion->query->get('contactadosSufragio'))
                    );
            
        }

        if(isset($form['boton_guardar']) /*and $this->getRequest()->getSession()->get('parroquia') != "" and $this->getRequest()->getSession()->get('municipios') != ""*/){

            //recupero los datos de la paq, mun, equipo, persona buscada y datos de las repuestas
            //$parroquia = $this->getRequest()->getSession()->get('parroquia');
            //$municipios = $this->getRequest()->getSession()->get('municipios');
            $personaEncuestada = $this->getRequest()->getSession()->get('results');
            //asi estaba antes //
            //$parroquia = $em->find('EncuestasBundle:Parroquia', $parroquia->getId());
            //$municipios = $em->find('EncuestasBundle:Municipio', $municipios->getId());
            //$cv = $em->find('EncuestasBundle:CentroVotacion', $this->getRequest()->getSession()->get('cv'));
            //echo 'hola'.$personaEncuestada['id_parroquia'];
            /*echo '<br> parroquia '.*/$parroquia = $em->find('EncuestasBundle:Parroquia', $personaEncuestada['id_parroquia']);
            /*echo '<br> municipios '.*/$municipios = $em->find('EncuestasBundle:Municipio', $personaEncuestada['id_municipio']);
            /*echo '<br> cv 2da '.*/$cv = $em->find('EncuestasBundle:CentroVotacion', $personaEncuestada['id_cv']);

            $mesas = array();
            //$form = $peticion->request->get('form');
            //echo $cv;
            $datos = $this->getRequest()->getSession()->get('datos');
            for($g = 1;$g<9;$g++){

                $contactado = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>1,
                    'encuesta'=>$encuesta,'numeroMesa'=>$g,'centroVotacion'=>$cv));
                
                $mesa = 'mesa'.$g;
                //echo '<br> contactado '.$contactado;
                /* pregunta uno de la fase 1, las mesas instaladas */
                if(!$contactado and isset($form[$mesa])){
                    $contactado = new ContactadosSufragio();
                    $contactado->setCedula($datos['coordinador']['cedula']);
                    $contactado->setEncuesta($encuesta);
                    $contactado->setEquipo('ubch');
                    $contactado->setNumeroPregunta(1);
                    $contactado->setNumeroMesa($g);
                    $contactado->setRespuesta($form[$mesa]);
                    $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                      $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),
                      $parroquia->getId());
                }
                else{
                    if(isset($form[$mesa])){ //echo '<br> mesa '.$form[$mesa]." ".$contactado->getId();
                        $contactado->setRespuesta($form[$mesa]);
                    }
                    else{
                        if(isset($contactado)){ 
                            $contactado->setRespuesta("-");
                        }
                    }                
                }

                if(isset($contactado)){
                    $em->persist($contactado);                
                    $em->flush($contactado);
                }
            }
                /* pregunta dos de la fase 1, asistieron los testigos */
            if(isset($form['testigos'])){

                $contactado = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>2,'encuesta'=>$encuesta,
                            'numeroMesa'=>0,'centroVotacion'=>$cv));

                if(!$contactado){
                    $contactado = new ContactadosSufragio();
                    $contactado->setCedula($datos['coordinador']['cedula']);
                    $contactado->setEncuesta($encuesta);
                    $contactado->setEquipo('ubch');
                    $contactado->setNumeroPregunta(2);
                    $contactado->setNumeroMesa(0);
                    
                    $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                    $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),
                    $parroquia->getId());
                }

                $contactado->setRespuesta($form['testigos']);
                $em->persist($contactado);
                $em->flush($contactado);
            }

              /* pregunta tres de la fase 1, asistieron los miebros */
            if(isset($form['miembros'])){

                $contactado = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>3,'encuesta'=>$encuesta,
                            'numeroMesa'=>0,'centroVotacion'=>$cv));

                if(!$contactado){
                    $contactado = new ContactadosSufragio();
                    $contactado->setCedula($datos['coordinador']['cedula']);
                    $contactado->setEncuesta($encuesta);
                    $contactado->setEquipo('ubch');
                    $contactado->setNumeroPregunta(3);
                    $contactado->setNumeroMesa(0);
                    
                    $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                    $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),
                    $parroquia->getId());                        
                }

                $contactado->setRespuesta($form['miembros']);

                $em->persist($contactado);
                $em->flush($contactado);
            }

            $personaNoEncontrada = false;
            $cont = 0;

            $personaNoEncontrada = true;
            $contactadosTodos = true;
            //echo '<br>ññ '.$cont. ' '.$total;
            $results[0]['apellidos_nombres']="";
            $results[0]['cedula']="";
            $results[0]['telefono_1']="";
            $this->get('session')->getFlashBag()->add('info', 'Los datos fueron almacenados correctamente' ); 
            //$municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
            $contactados = array();
            $testigos = "";
            $miembros = "";
            $totalCandidatos = "";
        
            if($encuesta->getTipoEncuesta() == 'fase1'){
                $plantilla = "EncuestasBundle:Encuestas:mostrarDatosFase1.html.twig";
                
                for($g = 1;$g<9;$g++){

                    $x = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>1,'encuesta'=>$encuesta,
                        'numeroMesa'=>$g,'centroVotacion'=>$cv));
                    if(isset($x)){
                        $contactados[] = $x;
                    }
                }
                $testigos = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>2,
                    'encuesta'=>$encuesta,'numeroMesa'=>0,'centroVotacion'=>$cv));
                $miembros = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>3,
                    'encuesta'=>$encuesta,'numeroMesa'=>0,'centroVotacion'=>$cv));

            }


            $jk = $cv->getContactadosSufragio();
            return $this->render($plantilla, array(
                'formulario' => $formulario->createView(),
                'equipo' => $this->getRequest()->getSession()->get('equipo'),
                'municipios' => $this->getRequest()->getSession()->get('municipios'),
                'parroquia' => $this->getRequest()->getSession()->get('parroquia'), 
                'encuesta' => $encuesta, 'cv'=>$cv, 'datos'=>$datos, 'candidatos' => $totalCandidatos,
                'incidencias'=>$incidencias,"contactados"=>$contactados,"testigos" => $testigos, "miembros"=>$miembros )
                );

        }
        

        //VOTOS DEL SUFRAGIO
        if(isset($form['boton_guardar_fase3'])){
            
            /*echo '<br>municipios '.*/$results = $this->getRequest()->getSession()->get('results');
            if($this->getRequest()->getSession()->get('cv') != "todos"){
                $cv = $this->getRequest()->getSession()->get('cv');
                $cv = $em->getRepository('EncuestasBundle:CentroVotacion')->findOneBy(array('id'=>$cv));
            }
            else{
                /*echo '<br>cv '.*/$cv = $em->getRepository('EncuestasBundle:CentroVotacion')->findOneBy(array('id'=>$results['id_cv']));
            }

            if($this->getRequest()->getSession()->get('municipios') != "todos"){
                $municipios = $this->getRequest()->getSession()->get('municipios');
                $municipios = $em->getRepository('EncuestasBundle:Municipio')->findOneBy(array('id'=>$municipios));
            }
            else{
                /*echo '<br>municipios '.*/$municipios = $em->getRepository('EncuestasBundle:Municipio')->findOneBy(array('id'=>$results['id_municipio']));
            }

            if($this->getRequest()->getSession()->get('parroquia') != "todos"){
                $parroquia = $this->getRequest()->getSession()->get('parroquia');
                $parroquia = $em->getRepository('EncuestasBundle:Parroquia')->findOneBy(array('id'=>$this->getRequest()->getSession()->get('parroquia')));
            }
            else{
                /*echo '<br>parroquia '.*/$parroquia = $em->getRepository('EncuestasBundle:Parroquia')->findOneBy(array('id'=>$results['id_parroquia']));
            }

            $candidatos = $this->getRequest()->getSession()->get('candidatos');
            //echo "<br>- ".$cv."-- ".$cv->getNombreCentro();
            foreach ($candidatos as $key => $value){
                $votos=0;
                $votosLista=0;
                $total = 0;
                $totalLista = 0;
                if(isset($candidatos[$key]) and $candidatos[$key] != ""){
                    $id = $candidatos[$key];
                    /*echo "<br>candidaato- ". */
                    $candidato = $em->find('EncuestasBundle:Candidatos', $id);

                    //echo "<br>- ".$key."<br>--getApellidoNombre ".$candidato->getApellidoNombre();
                    for ($p=0; $p<(integer)$cv->getCantidadMesas();$p++) {
                        $u = $candidato->getId();
                        $sum = $p+1;
                        /*echo "<br>indice- ".*/$indice=$u."_".$sum;
                        $indiceLista = "lista_".$indice;
                        /*echo "<br>votos- ".*/$votos = $votos + $form[$indice]; 
                        /*echo "<br>votosLista- ".*/$votosLista = $votosLista + $form[$indiceLista];                    

                        $cvCandidatos = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_encuesta'=>$encuesta->getId(),
                            'centroVotacion'=>$cv,'candidatos'=>$candidato->getId(),'nroMesa'=>$sum));

                        if(count($cvCandidatos) == 0 and $form[$indice] != "" and $form[$indiceLista] != ""){

                            $cvCandidatos = new CvCandidatos();                    
                            $cvCandidatos->setCandidato($candidato);
                            $cvCandidatos->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                                $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),$parroquia->getId());
                            $cvCandidatos->setVotos((integer)$form[$indice]);
                            $cvCandidatos->setNroMesa($sum); //numero de mesa
                            $cvCandidatos->setVotosLista((integer)$form[$indiceLista]);                        
                            
                            /*echo '<br>total--- '.*/$total = (integer)$form[$indice] + (integer)$candidato->getCantidadVotosTotal();
                            /*echo '<br>totalLista--- '.*/$totalLista = (integer)$form[$indiceLista] + (integer)$candidato->getCantidadVotosTotalLista();
                            $candidato->setCantidadVotosTotal($total);
                            $candidato->setCantidadVotosTotalLista($totalLista);
                            ///$candidato->setCvCandidatos($cvCandidatos);
                            $em->persist($cvCandidatos);
                            $em->persist($candidato);
                            $em->flush($candidato);
                        }                        
                    }
                }

            }

            if($incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findOneBy(array('encuesta'=>$encuesta,'cv'=>$cv->getId()))){
                $incidencias->setDescripcion ($form['incidencias']);
            }
            else{
                $incidencias= new Incidencias();

                $incidencias->setDescripcion ($form['incidencias']);
                $incidencias->setEncuesta($encuesta);
                $incidencias->setCentroVotacion($cv->getId());
            }
            
            if(isset($form['tipo_incidencia'])){ 

                $incidencias->setTipoIncidencia(trim($form['tipo_incidencia']));
            }

            $em->persist($incidencias);
            $em->flush($incidencias);

            $personaNoEncontrada = false;
        
            $contactadosTodos = true;
            //echo '<br>ññ '.$cont. ' '.$total;
            $results[0]['apellidos_nombres']="";
            $results[0]['cedula']="";
            $results[0]['telefono_1']="";               
            //$this->get('session')->getFlashBag()->add('info', 'Los datos fueron almacenados correctamente' );  
            $municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));

             /*echo '<br>municipios '.*/$municipios = $this->getRequest()->getSession()->get('municipios');
            /*echo '<br>parroquia '.*/$parroquia = $this->getRequest()->getSession()->get('parroquia');
            /*echo '<br>cv '.*/$cv = $this->getRequest()->getSession()->get('cv');
            /*echo '<br>cv '.*/$circuito = $this->getRequest()->getSession()->get('circuito');
            
            if($cv != "todos"){
                $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = ? "); 
                $statement-> bindValue(1,$cv->getId());
            }
            else{
                if($parroquia != "todos"){
                    $statementOTRO = $connection->prepare("SELECT id_cv FROM ubch 
                        WHERE id_parroquia = ? GROUP BY id_cv,contactado ORDER BY contactado,id_cv ASC");
                    $statementOTRO-> bindValue(1,$parroquia->getId());
                }
                else{
                    if($municipios != "todos"){
                        $statementOTRO = $connection->prepare("SELECT id_cv FROM ubch 
                            WHERE id_municipio = ? GROUP BY id_cv,contactado ORDER BY contactado,id_cv ASC");
                        $statementOTRO-> bindValue(1,$municipios->getId());
                    }
                    else{
                        if($encuesta->getTipoEncuesta() == "circuito"){ 
                            if($circuito != "todos"){
                                $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch WHERE id_circuito = ?
                                 GROUP BY ubch.id_cv ORDER BY RANDOM() LIMIT 1 )");
                                $statement-> bindValue(1,$circuito);
                            }
                            else{
                                $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch GROUP BY ubch.id_cv 
                                    ORDER BY RANDOM() LIMIT 1 )");
                                
                            }
                        }
                        else{ 
                            $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch GROUP BY ubch.id_cv 
                                    ORDER BY RANDOM() LIMIT 1 )");
                        }
                    }                    
                }
            }
                        
            $encuestar = $this->getRequest()->getSession()->get('encuestar');
            if(!isset($statement)){ //echo '<br>sin';
                if(isset($encuestar) and $encuestar == 0 ){
                    //echo '<br>aki - ';
                    $cvTotales = $this->getRequest()->getSession()->get('cvTotales');
                    //echo '<br>aki - '.$cvTotales;
                    if(isset($cvTotales) and $cvTotales == ""){
                        $statementOTRO->execute();
                        $cvTotales = $statementOTRO->fetchAll();
                        $ubchEncontrados = array();
                        $this->getRequest()->getSession()->set('cvTotales',$cvTotales);
                        $indice = $this->getRequest()->getSession()->get('encuestar');
                        //echo '<br>indice - '.$indice;
    
                        foreach ($cvTotales as $key => $value) {
                            //echo '<br>count - '.$key.' -- '.$value['id_cv'].' -- '.$value['id_cv'];
                            $buscarUbch = $connection->prepare("SELECT * FROM ubch WHERE id_cv = ? ");
                            $buscarUbch->bindValue(1,$value['id_cv']);
                            $buscarUbch->execute();
                            
                            if($indice == $key){
                                $results = $buscarUbch->fetchAll();
                                //echo '<br>el 0 - '.$results[0]['cargo'];
                                $ubchEncontrados[$key] = $results;
                                $this->getRequest()->getSession()->set('ubchEncontrados', $results);
                            }
                            else{
                                $resultados = $buscarUbch->fetchAll();
                                //echo '<br>demas - '.$resultados[0]['cargo'];
                                $ubchEncontrados[$key] = $resultados;
                                $this->getRequest()->getSession()->set('ubchEncontrados', $ubchEncontrados);
                            }
                        }
                        if(count($cvTotales) == $indice + 1){
                            $this->getRequest()->getSession()->set('encuestar', 0);
                        }
                       
                        //echo '<br>cvTotales - ';
                        $this->getRequest()->getSession()->set('encuestar', $this->getRequest()->getSession()->get('encuestar') + 1);
                    }
                    else{
                        $ubchEncontrados = $this->getRequest()->getSession()->get('ubchEncontrados');
                        $results = $ubchEncontrados[0];
                        if(count($cvTotales) > 1){
                            $this->getRequest()->getSession()->set('encuestar', $this->getRequest()->getSession()->get('encuestar') + 1);
                        }
                    }
                }
                else{

                    $ubchEncontrados = $this->getRequest()->getSession()->get('ubchEncontrados');
                    $cvTotales = $this->getRequest()->getSession()->get('cvTotales');
                    $indice = $this->getRequest()->getSession()->get('encuestar');

                    if(count($ubchEncontrados) > 0 ){
                        //echo '<br>ubchEncontrados contados '.count($ubchEncontrados);
                        foreach ($ubchEncontrados as $key => $value) {

                            $indice = $this->getRequest()->getSession()->get('encuestar');
                            // echo '<br>indice -else '.$indice;
                            //echo '<br>count -else '.$key.' -- '.$value[0]['id_cv'].' -- '.$value[0]['id_cv'];
                            if($indice == $key){
                                /* cv a mostrar */
                                echo "";
                                $results = $value;
                            }                       
                        }
    
                        if(count($cvTotales) == $indice + 1){
                            $this->getRequest()->getSession()->set('encuestar', 0);
                        }
                        else{
                            $this->getRequest()->getSession()->set('encuestar', $this->getRequest()->getSession()->get('encuestar') + 1);
                        }
                    }
                }
            }
            else{ //echo '<br>con';

                $statement->execute();
                $results = $statement->fetchAll();
            }

            for($t=0;$t<count($results);$t++){
                if(isset($results[$t])){ //echo '<br> -- '.$results[$t]['cargo']." ".$results[$t]['apellidos_nombres'];
                    if($results[$t]['cargo']=="Jefe de Logí­stica"){
                       $datos['logistica']=$results[$t];
                    }
                    if($results[$t]['cargo']=="Coordinador de Testigos"){
                        $datos['testigo']=$results[$t];
                    }
                    if($results[$t]['cargo']=="Jefe de Movilización del Voto"){
                        $datos['movilizacion']=$results[$t];
                    }
                    if($results[$t]['cargo'] == "Coordinador"){
                        /*echo '<br> -- si hay coor'.*/$results[$t]['cargo']." ".$results[$t]['apellidos_nombres'];
                        $datos['coordinador']=$results[$t];                        
                    }
                    else{
                        if(!isset($datos['coordinador'])){
                            $datos['coordinador']['apellidos_nombres'] = "No existen datos";
                            $datos['coordinador']['cedula'] = "";
                            $datos['coordinador']['telefono_1'] = "No existen datos";
                            $datos['coordinador']['id_ubch'] = "nuevo";
                        }
                    }
                }
            }

            /* esto es nuevo para saber si existen esos cargos en la BD , de lo contrario entonces creo los arreglos pero con estos datos */
            if(!isset($datos['logistica'])){
                $datos['logistica']['apellidos_nombres'] = "No existen datos";
                $datos['logistica']['cedula'] = "";
                $datos['logistica']['telefono_1'] = "No existen datos";
                $datos['logistica']['id_ubch'] = "nuevo";
            }
            if(!isset($datos['testigo'])){
                $datos['testigo']['apellidos_nombres'] = "No existen datos";
                $datos['testigo']['cedula'] = "";
                $datos['testigo']['telefono_1'] = "No existen datos";
                $datos['testigo']['id_ubch'] = "nuevo";
            }

            if(!isset($datos['movilizacion'])){
                $datos['movilizacion']['apellidos_nombres'] = "No existen datos";
                $datos['movilizacion']['cedula'] = "";
                $datos['movilizacion']['telefono_1'] = "No existen datos";
                $datos['movilizacion']['id_ubch'] = "nuevo";
            }


           /*echo 'cv'. */$cv = $em->getRepository('EncuestasBundle:CentroVotacion')->findOneBy(array('id'=>$results[0]['id_cv']));
            $paq = $em->getRepository('EncuestasBundle:Parroquia')->findOneBy(array('id'=>$results[0]['id_parroquia']));
           /*echo '<br>este es'.*/$mun = $em->getRepository('EncuestasBundle:Municipio')->findOneBy(array('id'=>$results[0]['id_municipio']));
            $datos['parroquia']['nombre'] = $paq->getNombreParroquia();
            $datos['municipio']['nombre'] = $mun->getNombreMunicipio();
            
            $candidatos = "";
            $this->getRequest()->getSession()->set('datos', $datos);
            $this->getRequest()->getSession()->set('results', $results[0]);
            $contactados = array();
            $testigos = "";
            $miembros = "";
            $totalCandidatos = "";
         
            if($encuesta->getTipoEncuesta() == 'circuito' or $encuesta->getTipoEncuesta() == 'estadal' or $encuesta->getTipoEncuesta() == 'alcalde'){
                $plantilla = "EncuestasBundle:Encuestas:mostrarDatosFase3.html.twig";
                $incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findOneBy(array('encuesta'=>$encuesta,'cv'=>$cv->getId())) ;
            
            }
            if($encuesta->getTipoEncuesta() == "alcalde"){
                $candidatos = $em->getRepository('EncuestasBundle:Candidatos')->findBy(array('encuesta'=>$encuesta,
                    'identificador'=>$mun->getId(),
                    'tipoEleccion'=>"alcalde"));
            }
            else{
                if($encuesta->getTipoEncuesta() == "circuito"){
                    //$incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findBy(array('encuesta'=>$encuesta)) ;
                    $candidatos = $em->getRepository('EncuestasBundle:Candidatos')->findBy(array('encuesta'=>$encuesta,
                    'identificador'=>$mun->getCircuito()->getId(),
                    'tipoEleccion'=>"circuito" ));
                }
                else{
                    $candidatos = $em->getRepository('EncuestasBundle:Candidatos')->findBy(array('encuesta'=>$encuesta,
                        'tipoEleccion'=>"estatal" ));
                }

            }

            $i = 3;
            $p = 0;
            $psuv = "";
            $mud = "";
            $otros = "";
            $otros1 = "";
            $votosMesa = array();

            foreach ($candidatos as $key => $value) {
                //echo "<br> - ".$value->getPartido()." ".$p;
                $cvCandidatosMesas = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_encuesta'=>$encuesta->getId(),
                        'centroVotacion'=>$cv,'candidatos'=>$value->getId()));
                foreach ($cvCandidatosMesas as $llaveNew => $valueNew) {
                   $votosMesa[] = $valueNew;
                }
                if($value->getPartido() == "psuv" or $value->getPartido() == "gpp-psuv"){
                    
                    $psuv=$value;                    
                }
                if($value->getPartido() == "mud"){
                    $mud=$value;                    
                }
                if($value->getPartido() == "otros" ){
                    $p++;                       
                    $i++;
                    if($otros == ""){
                        $otros=$value;
                        $p++;                       
                        //$i++;
                    }
                    else{
                        $otros1=$value;
                    }
                }
                
            }
            $totalCandidatos =array("1"=>$psuv, "2"=>$mud, "3"=>$otros, "4"=>$otros1);

            // función para ordenar el arreglo por llave o clave
            ksort($totalCandidatos);

            /* este if es para que depués que guarde se vaya a la pantalla de elegir municipio, parroquia y cv, esto es así
            porke ya se eligió municipio, parroquia y CV entonces despues que guarda no debe mostrar el mismo que ya encuesto */
            if($this->getRequest()->getSession()->get('cv') != "todos"){
                //$municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
                $usuario = $this->getUser(); 
                if($usuario->getPrioridad()){
                    $cvUsuario = $em->getRepository('EncuestasBundle:CentroVotacion')->findBy(array('idUsuario'=>$usuario->getId()),array('nombreCentro'=>'ASC'));
                    foreach ($cvUsuario as $key => $value) {
                        //echo "<br> . ".$value->getParroquia()->getMunicipio();
                        $circuito =  $em->getRepository('EncuestasBundle:Circuito')->findOneBy(array('id'=>$value->getParroquia()->getMunicipio()->getCircuito()),array('nombreCircuito'=>'ASC'));
                        $municipio =  $em->getRepository('EncuestasBundle:Municipio')->findOneBy(array('id'=>$value->getParroquia()->getMunicipio()),array('nombreMunicipio'=>'ASC'));
                        $municipios[] = $municipio;
                        $circuitos[] = $circuito;
                    }
                    $municipios = array_unique($municipios); 
                    $circuitos = array_unique ($circuitos);
                }
                else{
                    $municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
                    $circuitos =  $em->getRepository('EncuestasBundle:Circuito')->findAll();
                }

                return $this->redirect($this->generateUrl('encuestas_datosEncuestaSufragio', array('id_encuesta'=> $encuesta->getId(),
                 'municipios' => $municipios, 'circuitos' => $circuitos )));
            }

            //$jk = $cv->getContactadosSufragio();
            return $this->render($plantilla, array(
                    'formulario' => $formulario->createView(),
                    'equipo' => $this->getRequest()->getSession()->get('equipo'),
                    'municipios' => $this->getRequest()->getSession()->get('municipios'),
                    'parroquia' => $this->getRequest()->getSession()->get('parroquia'), 'votosMesa'=>$votosMesa, 
                    'encuesta' => $encuesta, 'cv'=>$cv, 'datos'=>$datos, 'candidatos' => $totalCandidatos,
                    'incidencias'=>$incidencias,"contactados"=>$contactados,"testigos" => $testigos, "miembros"=>$miembros,
                    'encuestaFase2'=>$encuestaFase2,'buscarTodo'=>$this->getRequest()->getSession()->get('cv'),
                    'totalizacion'=>$peticion->query->get('totalizacion'),'contactadosSufragio'=>$peticion->query->get('contactadosSufragio') )
                    );
        
        }
        
        if(isset($form['boton_guardar_fase2'])) {
            $results = $this->getRequest()->getSession()->get('results');
            $parroquia = $em->find('EncuestasBundle:Parroquia', $results['id_parroquia']);
            $municipios = $em->find('EncuestasBundle:Municipio', $results['id_municipio']);
            $cv = $em->getRepository('EncuestasBundle:CentroVotacion')->findOneBy(array('id'=>$results['id_cv']));
            $datos = $this->getRequest()->getSession()->get('datos');
            $si = 1;
            $cierreTotal = 1;
            for($n=1;$n<$cv->getCantidadMesas()+1;$n++){

                $var = 'apertura_'.$n; //echo '<br>'.$var;
                
                if(isset($form[$var])){ //echo '<br>'.$var;
                    $contactado = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>1,
                        'encuesta'=>$encuesta, 'numeroMesa'=>$n,'centroVotacion'=>$cv));
                    //echo $contactado;
                    if($form[$var] == "si"){
                                
                        $totales = $connection->prepare("SELECT apertura,cierre,id_cv FROM totales WHERE id_cv = ? AND id_encuesta = ? ");
                        $totales-> bindValue(1,$cv->getId());
                        $totales-> bindValue(2,$encuesta->getId());
                        $totales->execute();
                        $aperturaTotal = $totales->fetch();
                        //echo "<br> - ".$aperturaTotal['apertura']." - ".count($aperturaTotal)." - ".$cv->getId()." - ".$encuesta->getId();
                        if($aperturaTotal['id_cv'] == "" ){ //echo 'si';
                            $totales = $connection->prepare("INSERT INTO totales (id_cv,id_eje,id_parroquia,id_municipio,id_circuito,apertura,id_encuesta)
                             VALUES (?,?,?,?,?,?,?) ");
                            
                            $totales-> bindValue(1,$cv->getId()); //NEXTVAL('ubch_id_seq')
                            $totales-> bindValue(2,$cv->getParroquia()->getMunicipio()->getEje()->getId());
                            $totales-> bindValue(3,$cv->getParroquia()->getId());
                            $totales-> bindValue(4,$cv->getParroquia()->getMunicipio()->getId());
                            $totales-> bindValue(5,$cv->getParroquia()->getMunicipio()->getCircuito()->getId());
                            $totales-> bindValue(6,$si);
                            $totales-> bindValue(7,$encuesta->getId());
                            $totales->execute();
                            $si++;
                        }
                        else{
                            //echo '<br> si '.$si;
                            $t0 = $connection->prepare("UPDATE totales SET apertura = ? WHERE id_cv = ? AND id_encuesta = ? "); 
                            $t0-> bindValue(1,$si); 
                            $t0-> bindValue(2,$cv->getId());
                            $t0-> bindValue(3,$encuesta->getId());
                            $t0->execute();
                            $si++;
                        }                        
                    }

                    if(isset($contactado)){ //echo "e1";
                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setRespuesta($form[$var]);
                    }
                    else{ //echo "no_e1";
                        $contactado = new ContactadosSufragio();
                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setEncuesta($encuesta);
                        $contactado->setEquipo('ubch');
                        $contactado->setNumeroPregunta(1);
                        $contactado->setNumeroMesa($n);
                        $contactado->setRespuesta($form[$var]);
                        $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                        $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),
                        $parroquia->getId());                        
                    }
                    
                    $em->persist($contactado);
                    $em->flush($contactado);
                }

                $var = 'testigos_'.$n;//echo '<br>'.$var;
                if(isset($form[$var])){//echo '<br>'.$var;
                    $contactado = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>2,'encuesta'=>$encuesta,
                        'numeroMesa'=>$n,'centroVotacion'=>$cv));
                    if(isset($contactado)){
                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setRespuesta($form[$var]);
                    }
                    else{
                        $contactado = new ContactadosSufragio();
                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setEncuesta($encuesta);
                        $contactado->setEquipo('ubch');
                        $contactado->setNumeroPregunta(2);
                        $contactado->setNumeroMesa($n);
                        $contactado->setRespuesta($form[$var]);
                        $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                        $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),
                        $parroquia->getId());
                    }
                    $em->persist($contactado);
                    $em->flush($contactado);
                }

                $var = 'o_participacion_'.$n;//echo '<br>'.$var;
                if(isset($form[$var])){//echo '<br>'.$var;
                    $contactado = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>3,
                        'encuesta'=>$encuesta, 'numeroMesa'=>$n,'centroVotacion'=>$cv));
                    if(isset($contactado)){
                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setRespuesta($form[$var]);
                    }
                    else{
                        $contactado = new ContactadosSufragio();
                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setEncuesta($encuesta);
                        $contactado->setEquipo('ubch');
                        $contactado->setNumeroPregunta(3);
                        $contactado->setNumeroMesa($n);
                        $contactado->setRespuesta($form[$var]);
                        $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                        $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),
                        $parroquia->getId());
                    }
                    $em->persist($contactado);
                    $em->flush($contactado);
                }

                $var = 'op_participacion_'.$n;//echo '<br>'.$var;
                if(isset($form[$var])){//echo '<br>'.$var;
                    $contactado = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>4,'encuesta'=>$encuesta,
                        'numeroMesa'=>$n,'centroVotacion'=>$cv));
                    if(isset($contactado)){
                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setRespuesta($form[$var]);
                    }
                    else{
                        $contactado = new ContactadosSufragio();
                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setEncuesta($encuesta);
                        $contactado->setEquipo('ubch');
                        $contactado->setNumeroPregunta(4);
                        $contactado->setNumeroMesa($n);
                        $contactado->setRespuesta($form[$var]);
                        $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                        $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),
                        $parroquia->getId());
                    }
                    $em->persist($contactado);
                    $em->flush($contactado);
                }

                $var = 'cierre_'.$n;//echo '<br>'.$var;
                if(isset($form[$var])){
                    //echo '<br>'.$var;

                    if($form[$var] == "si"){
                                
                        $totales = $connection->prepare("SELECT apertura,cierre,id_cv FROM totales WHERE id_cv = ? AND id_encuesta = ? ");
                        $totales-> bindValue(1,$cv->getId());
                        $totales-> bindValue(2,$encuesta->getId());
                        $totales->execute();
                        $aperturaTotal = $totales->fetch();
                        //echo "<br> - ".$aperturaTotal['apertura']." - ".count($aperturaTotal)." - ".$cv->getId()." - ".$encuesta->getId();
                        if($aperturaTotal['id_cv'] == "" ){ //echo 'si';
                            $totales = $connection->prepare("INSERT INTO totales (id_cv,id_eje,id_parroquia,id_municipio,id_circuito,cierre,id_encuesta)
                             VALUES (?,?,?,?,?,?,?) ");
                            
                            $totales-> bindValue(1,$cv->getId()); //NEXTVAL('ubch_id_seq')
                            $totales-> bindValue(2,$cv->getParroquia()->getMunicipio()->getEje()->getId());
                            $totales-> bindValue(3,$cv->getParroquia()->getId());
                            $totales-> bindValue(4,$cv->getParroquia()->getMunicipio()->getId());
                            $totales-> bindValue(5,$cv->getParroquia()->getMunicipio()->getCircuito()->getId());
                            $totales-> bindValue(6,$cierreTotal);
                            $totales-> bindValue(7,$encuesta->getId());
                            $totales->execute();
                            $cierreTotal++;
                        }
                        else{
                            
                            $t0 = $connection->prepare("UPDATE totales SET cierre = ? WHERE id_cv = ? AND id_encuesta = ? "); 
                            $t0-> bindValue(1,$cierreTotal); 
                            $t0-> bindValue(2,$cv->getId());
                            $t0-> bindValue(3,$encuesta->getId());
                            $t0->execute();
                            $cierreTotal++;
                        }                        
                    }

                    $contactado = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findOneBy(array('numeroPregunta'=>5,'encuesta'=>$encuesta,
                        'numeroMesa'=>$n,'centroVotacion'=>$cv));
                    if(isset($contactado)){
                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setRespuesta($form[$var]);
                    }
                    else{
                        $contactado = new ContactadosSufragio();
                        $contactado->setCedula($datos['coordinador']['cedula']);
                        $contactado->setEncuesta($encuesta);
                        $contactado->setEquipo('ubch');
                        $contactado->setNumeroPregunta(5);
                        $contactado->setNumeroMesa($n);
                        $contactado->setRespuesta($form[$var]);
                        $contactado->setCentroVotacion($cv,$parroquia->getMunicipio()->getEje()->getId(),
                        $parroquia->getMunicipio()->getCircuito()->getId(),$municipios->getId(),
                        $parroquia->getId());
                    }
                    $em->persist($contactado);
                    $em->flush($contactado);
                }
               
            }

            if(isset($form['incidencias'])){ 
                //
                $incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findOneBy(array('encuesta'=>$encuesta,'cv'=>$cv->getId())) ;
                if(isset($incidencias)){
                    //$incidencias = $encuesta->getIncidencia();
                    
                    $incidencias->setDescripcion($form['incidencias']);
                }
                else{
                    $incidencias= new Incidencias();
                    $incidencias->setDescripcion($form['incidencias']);
                    $incidencias->setEncuesta($encuesta);
                    $incidencias->setCentroVotacion($cv->getId());
                }


                if(isset($form['tipo_incidencia'])){ 
                
                    $incidencias->setTipoIncidencia(trim($form['tipo_incidencia']));
                }

                $em->persist($incidencias);
                $em->flush($incidencias);
            }

            $municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));            
            
            /* DESDE AKI ES EL CODIGO PARA BUSCAR AL NUEVO ENCUESTADO */
            ////////////////////////////////////////////////////////////

            /*echo '<br>municipios '.*/$municipios = $this->getRequest()->getSession()->get('municipios');
            /*echo '<br>parroquia '.*/$parroquia = $this->getRequest()->getSession()->get('parroquia');
            /*echo '<br>cv '.*/$cv = $this->getRequest()->getSession()->get('cv');
            
            if($cv != "todos"){
                $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = ? "); 
                $statement-> bindValue(1,$cv->getId());
            }
            else{
                if($parroquia != "todos"){
                    //$statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch WHERE id_parroquia = ".
                    //    $parroquia->getId()." GROUP BY ubch.id_cv ORDER BY RANDOM() LIMIT 1 )");

                    $statementOTRO = $connection->prepare("SELECT id_cv FROM ubch 
                        WHERE id_parroquia = ? GROUP BY id_cv,contactado ORDER BY contactado,id_cv ASC");
                    $statementOTRO-> bindValue(1,$parroquia->getId());
                }
                else{
                    if($municipios != "todos"){
                        //$statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch WHERE id_municipio = ".
                        //    $municipios->getId()." GROUP BY ubch.id_cv ORDER BY RANDOM() LIMIT 1 )");

                        $statementOTRO = $connection->prepare("SELECT id_cv FROM ubch 
                            WHERE id_municipio = ? GROUP BY id_cv,contactado ORDER BY contactado,id_cv ASC");
                        $statementOTRO-> bindValue(1,$municipios->getId());
                    }
                    else{
                        $statement = $connection->prepare("SELECT * FROM ubch WHERE id_cv = (SELECT id_cv FROM ubch GROUP BY id_cv ORDER BY RANDOM() LIMIT 1 )");
                    }                    
                }
            }
                        
            $encuestar = $this->getRequest()->getSession()->get('encuestar');
            if(!isset($statement)){ //echo '<br>sin';
                if(isset($encuestar) and $encuestar == 0 ){
                    //echo '<br>aki - ';
                    $cvTotales = $this->getRequest()->getSession()->get('cvTotales');
                    //echo '<br>aki - '.$cvTotales;
                    if(isset($cvTotales) and $cvTotales == ""){
                        $statementOTRO->execute();
                        $cvTotales = $statementOTRO->fetchAll();
                        $ubchEncontrados = array();
                        $this->getRequest()->getSession()->set('cvTotales',$cvTotales);
                        $indice = $this->getRequest()->getSession()->get('encuestar');
                        //echo '<br>indice - '.$indice;
    
                        foreach ($cvTotales as $key => $value) {
                            //echo '<br>count - '.$key.' -- '.$value['id_cv'].' -- '.$value['id_cv'];
                            $buscarUbch = $connection->prepare("SELECT * FROM ubch WHERE id_cv = ? ");
                            $buscarUbch->bindValue(1,$value['id_cv']);
                            $buscarUbch->execute();
                            
                            if($indice == $key){
                                $results = $buscarUbch->fetchAll();
                                //echo '<br>el 0 - '.$results[0]['cargo'];
                                $ubchEncontrados[$key] = $results;
                                $this->getRequest()->getSession()->set('ubchEncontrados', $results);
                            }
                            else{
                                $resultados = $buscarUbch->fetchAll();
                                //echo '<br>demas - '.$resultados[0]['cargo'];
                                $ubchEncontrados[$key] = $resultados;
                                $this->getRequest()->getSession()->set('ubchEncontrados', $ubchEncontrados);
                            }
                        }
                        if(count($cvTotales) == $indice + 1){
                            $this->getRequest()->getSession()->set('encuestar', 0);
                        }
                       
                        //echo '<br>cvTotales - ';
                        $this->getRequest()->getSession()->set('encuestar', $this->getRequest()->getSession()->get('encuestar') + 1);
                    }
                    else{
                        $ubchEncontrados = $this->getRequest()->getSession()->get('ubchEncontrados');
                        $results = $ubchEncontrados[0];
                        if(count($cvTotales) > 1){
                            $this->getRequest()->getSession()->set('encuestar', $this->getRequest()->getSession()->get('encuestar') + 1);
                        }
                    }
                }
                else{

                    $ubchEncontrados = $this->getRequest()->getSession()->get('ubchEncontrados');
                    $cvTotales = $this->getRequest()->getSession()->get('cvTotales');
                    $indice = $this->getRequest()->getSession()->get('encuestar');

                    if(count($ubchEncontrados) > 0 ){
                        //echo '<br>ubchEncontrados contados '.count($ubchEncontrados);
                        foreach ($ubchEncontrados as $key => $value) {

                            $indice = $this->getRequest()->getSession()->get('encuestar');
                            // echo '<br>indice -else '.$indice;
                            //echo '<br>count -else '.$key.' -- '.$value[0]['id_cv'].' -- '.$value[0]['id_cv'];
                            if($indice == $key){
                                /* cv a mostrar */
                                echo "";
                                $results = $value;
                            }                       
                        }
    
                        if(count($cvTotales) == $indice + 1){
                            $this->getRequest()->getSession()->set('encuestar', 0);
                        }
                        else{
                            $this->getRequest()->getSession()->set('encuestar', $this->getRequest()->getSession()->get('encuestar') + 1);
                        }
                    }
                }
            }
            else{ //echo '<br>con';

                $statement->execute();
                $results = $statement->fetchAll();
            }

            for($t=0;$t<count($results);$t++){
                if(isset($results[$t])){ //echo '<br> -- '.$results[$t]['cargo']." ".$results[$t]['apellidos_nombres'];
                    if($results[$t]['cargo']=="Jefe de Logí­stica"){
                       $datos['logistica']=$results[$t];
                    }
                    if($results[$t]['cargo']=="Coordinador de Testigos"){
                        $datos['testigo']=$results[$t];
                    }
                    if($results[$t]['cargo']=="Jefe de Movilización del Voto"){
                        $datos['movilizacion']=$results[$t];
                    }
                    if($results[$t]['cargo'] == "Coordinador"){
                        /*echo '<br> -- si hay coor'.*/$results[$t]['cargo']." ".$results[$t]['apellidos_nombres'];
                        $datos['coordinador']=$results[$t];                        
                    }
                    else{
                        if(!isset($datos['coordinador'])){
                            $datos['coordinador']['apellidos_nombres'] = "No existen datos";
                            $datos['coordinador']['cedula'] = "";
                            $datos['coordinador']['telefono_1'] = "No existen datos";
                            $datos['coordinador']['id_ubch'] = "nuevo";
                        }
                    }
                }
            }

            /* esto es nuevo para saber si existen esos cargos en la BD , de lo contrario entonces creo los arreglos pero con estos datos */
            if(!isset($datos['logistica'])){
                $datos['logistica']['apellidos_nombres'] = "No existen datos";
                $datos['logistica']['cedula'] = "";
                $datos['logistica']['telefono_1'] = "No existen datos";
                $datos['logistica']['id_ubch'] = "nuevo";
            }
            if(!isset($datos['testigo'])){
                $datos['testigo']['apellidos_nombres'] = "No existen datos";
                $datos['testigo']['cedula'] = "";
                $datos['testigo']['telefono_1'] = "No existen datos";
                $datos['testigo']['id_ubch'] = "nuevo";
            }

            if(!isset($datos['movilizacion'])){
                $datos['movilizacion']['apellidos_nombres'] = "No existen datos";
                $datos['movilizacion']['cedula'] = "";
                $datos['movilizacion']['telefono_1'] = "No existen datos";
                $datos['movilizacion']['id_ubch'] = "nuevo";
            }

            $cv = $em->getRepository('EncuestasBundle:CentroVotacion')->findOneBy(array('id'=>$results[0]['id_cv']));
            $paq = $em->getRepository('EncuestasBundle:Parroquia')->findOneBy(array('id'=>$results[0]['id_parroquia']));
            $mun = $em->getRepository('EncuestasBundle:Municipio')->findOneBy(array('id'=>$results[0]['id_municipio']));
            $datos['parroquia']['nombre'] = $paq->getNombreParroquia();
            $datos['municipio']['nombre'] = $mun->getNombreMunicipio();
            
            $candidatos = "";
            $this->getRequest()->getSession()->set('datos', $datos);
            $this->getRequest()->getSession()->set('results', $results[0]);
            $contactados = array();
            $testigos = "";
            $miembros = "";
            $totalCandidatos = "";
         
            if($encuesta->getTipoEncuesta() == 'fase2'){
                $plantilla = "EncuestasBundle:Encuestas:mostrarDatosFase2.html.twig";
                $incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findOneBy(array('encuesta'=>$encuesta,'cv'=>$cv->getId())) ;
            
            }
            /* este if es para que depués que guarde se vaya a la pantalla de elegir municipio, parroquia y cv, esto es así
            porke ya se eligió municipio, parroquia y CV entonces despues que guarda no debe mostrar el mismo que ya encuesto */
            if($this->getRequest()->getSession()->get('cv') != "todos"){
                $municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));

                $usuario = $this->getUser(); 
                if($usuario->getPrioridad()){
                    $cvUsuario = $em->getRepository('EncuestasBundle:CentroVotacion')->findBy(array('idUsuario'=>$usuario->getId()),array('nombreCentro'=>'ASC'));
                    foreach ($cvUsuario as $key => $value) {
                        //echo "<br> . ".$value->getParroquia()->getMunicipio();
                        $circuito =  $em->getRepository('EncuestasBundle:Circuito')->findOneBy(array('id'=>$value->getParroquia()->getMunicipio()->getCircuito()),array('nombreCircuito'=>'ASC'));
                        $municipio =  $em->getRepository('EncuestasBundle:Municipio')->findOneBy(array('id'=>$value->getParroquia()->getMunicipio()),array('nombreMunicipio'=>'ASC'));
                        $municipios[] = $municipio;
                        $circuitos[] = $circuito;
                    }
                    $municipios = array_unique($municipios); 
                    $circuitos = array_unique ($circuitos);
                }
                else{
                    $municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
                    $circuitos =  $em->getRepository('EncuestasBundle:Circuito')->findAll();
                }

                return $this->redirect($this->generateUrl('encuestas_datosEncuestaSufragio', array('id_encuesta'=> $encuesta->getId(),
                 'municipios' => $municipios )));
            }

            //$jk = $cv->getContactadosSufragio();
            return $this->render($plantilla, array(
                    'formulario' => $formulario->createView(),
                    'equipo' => $this->getRequest()->getSession()->get('equipo'),
                    'municipios' => $this->getRequest()->getSession()->get('municipios'),
                    'parroquia' => $this->getRequest()->getSession()->get('parroquia'), 
                    'encuesta' => $encuesta, 'cv'=>$cv, 'datos'=>$datos, 'candidatos' => $totalCandidatos,
                    'incidencias'=>$incidencias,"contactados"=>$contactados,"testigos" => $testigos, "miembros"=>$miembros,
                    'encuestaFase2'=>$encuestaFase2,'buscarTodo'=>$this->getRequest()->getSession()->get('cv'),
                    'totalizacion'=>$peticion->query->get('totalizacion'),'contactadosSufragio'=>$peticion->query->get('contactadosSufragio') )
                    );
        }        
            
        // } 
        return $this->render('EncuestasBundle:Encuestas:datosEncuestaSufragio.html.twig', array('formulario' => $formulario->createView(),
         'encuesta' => $encuesta, 'circuitos' => $circuitos, 'municipios' => $municipios, 'parroquia' =>'','encuestaFase2'=>$encuestaFase2,
         'incidencias'=>$incidencias, 'totalizacion'=>$peticion->query->get('totalizacion')));
       
    }

    public function datosEncuestaComandoAction($id_encuesta)
    {
        
        $em = $this->getDoctrine()->getManager();
        $encuesta = $em->find('EncuestasBundle:Encuesta', $id_encuesta);
        $this->getRequest()->getSession()->set('encuesta', $encuesta);
        $peticion = $this->getRequest();
        $form = $peticion->request->get('form');
        $circuitos  =  $em->getRepository('EncuestasBundle:Circuito')->findAll();
        $cargosComando  =  $em->getRepository('EncuestasBundle:CargoComando')->findAll();
        $municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio' => 'ASC'));
        $formu   = $this->createFormBuilder();
        $results = null;
        $total   = '';
        $contactadosTodos = false;                
        $formulario = $formu->getForm();
        //echo isset($form['cargo']);
        //este primer if es para verificar si la acción viene desde el boton buscar o desde el boton buscar otro o desde el boton guardar
        //estas son las maneras de entrar en este if para luego realizar una búsqueda de una nueva persona y mostrarla en pantalla
        
        if(isset($form['cargo']) || isset($form['boton_buscar']) || isset($form['boton_guardar'])){

            $cargo = "";
            $area =  "";
            //echo '<br> cargo'.$form['cargo'];
            if(isset($form['cargo'])){
                if($form['cargo'] != "todos"){
                    $cargo = $em->find('EncuestasBundle:CargoComando', $form['cargo']);
                }
                else{
                    $cargo = "todos";
                }

                //echo '<br> cargo en if'.$cargo;
                $this->getRequest()->getSession()->set('cargo', $cargo);
            }
            else{
                $cargo = $this->getRequest()->getSession()->get('cargo');
            }
            //echo '<br> area '.$form['area'];
            if(isset($form['area'])){

                $area =  $form['area'];
                $this->getRequest()->getSession()->set('area', $area);
                $circuito = "";
                $municipio = "";

                //echo '<br> area en if... '.$area;
               
                //echo '<br> municipio '.$form['municipio'];
                //echo '<br> circuito '.$form['circuito'];
                if($area == "circuito" and $form['circuito'] != ""){ 
                    //$circuito = $em->find('EncuestasBundle:Circuito', $form['circuito']); 
                    $circuito = $form['circuito'];
                }
                if($area == "municipio" and $form['municipio'] != ""){
                    //$municipio = $em->find('EncuestasBundle:Municipio', $form['municipio']);
                    $municipio = $form['municipio'];
                }

                //echo '<br> municipio en if'.$municipio;
                //echo '<br> circuito en if'.$circuito;
                $this->getRequest()->getSession()->set('municipio', $municipio);
                $this->getRequest()->getSession()->set('circuito', $circuito);
            }
            else{
                $area =  $this->getRequest()->getSession()->get('area');
                $circuito   =  $this->getRequest()->getSession()->get('circuito');
                $municipio  =  $this->getRequest()->getSession()->get('municipio');

            }


            if($encuesta->getTipoEncuesta() == "comando"){
                //$total = $em->getRepository('EncuestasBundle:Contactados')->findAll();
                $total = $em->getRepository('EncuestasBundle:ContactadoComando')->findBy(array('encuesta'=>$encuesta) );
                $total = count($total);
                //echo $total;
                if($total == 0){
                    $total=true;
                }
            }            


            if(isset($form['boton_guardar'])){

                //recupero los datos de la paq, mun, equipo, persona buscada y datos de las repuestas
                //$circuito = $this->getRequest()->getSession()->get('circuito');
                //$municipio = $this->getRequest()->getSession()->get('municipio');
                //$cargo = $this->getRequest()->getSession()->get('cargo');
                $persona = $this->getRequest()->getSession()->get('results');
                $persona = $em->getRepository('EncuestasBundle:ComandoCamp')->findOneBy(array('cedula'=>$persona['cedula']));

                $form = $peticion->request->get('form');

                //realizo la verificación de qué tipo de encuesta es porque existen dos, general y las etapas del sufragio
                //los contactados de las encuestas generales se guardan en contactados y los del sufragio en contactadosSufragio
                if($encuesta->getTipoEncuesta() == "comando"){
                    $contactado = new ContactadoComando();
                    /*if($this->getRequest()->getSession()->get('circuito') != ""){
                        $circuito = $em->find('EncuestasBundle:Circuito', $this->getRequest()->getSession()->get('circuito'));
                    }
                    if($this->getRequest()->getSession()->get('municipio') != ""){
                        $municipio = $em->find('EncuestasBundle:Municipio', $this->getRequest()->getSession()->get('municipio'));
                    }*/
                    /////////////////////////////////////////////////////////////////
                    //este for sirve para recuperar los datos de cada una de las respuesta seleccionada en el formulario, además hace la 
                    //verificación si la respuesta tiene algún valor y despues si hace la asignación al objeto contactado
                    for($j=1;$j<6;$j++){ //echo '<br>'.$j.' '.$form[$j];
                        if(isset($form[$j])){
                            $nombre = 'setResp'.$j;
                            $contactado->$nombre($form[$j]);
                            //echo '<br> resp'.$j.' -- '.$form[$j];
                        }
                    }
                    //
                    //$contactado->setCedula($persona->getCedula() );
                    /////////////////////////////////////////////////////////////////////////////////////////////////
                }
                
                
                $contactado->setCedula($persona->getCedula());
                $contactado->setComandoCamp($persona);
                $contactado->setEncuesta($encuesta);
                $contactado->setFecha(new \DateTime(date('y-m-d')));
                //echo '<br> encuesta '.$encuesta->getId();
                $em->persist($contactado);
                $em->flush($contactado);
                //exit;
            }

            $connection = $em->getConnection();
            $personaNoEncontrada = false;
            $cont = 0;
            $totalEquipo = "";
            $identificador = "";
            /* sí selecciona un cargo diferente al cargo "todos"*/
            if($cargo != "todos"){
                       
                //echo '<br> cargo en el otro if '.$cargo;
                //echo '<br> area en el otro if '.$area;
                if($area == "municipio"){ /* luego de seleccionar el cargo selecciona sólo el municipio, me regresa solo una persona */
                    if($municipio != ""){
                        $totalEquipo = $em->getRepository('EncuestasBundle:ComandoCamp')->findBy(array('area'=>$area,
                            'cargoComando'=>$cargo->getId(),'identificador'=>$municipio) );
                        $identificador = $municipio;
                        //echo '<br> municipio en el otro if '.$municipio;
                    } /* luego de seleccionar el cargo y NO selecciona el municipio , me regresa muchas una persona*/
                    else{
                        $totalEquipo = $em->getRepository('EncuestasBundle:ComandoCamp')->findBy(array('area'=>$area,
                            'cargoComando'=>$cargo->getId()) );
                        $identificador = "";
                        //echo '<br> municipio en el del otro '.$circuito;
                    }
                }
                else{ /* luego de seleccionar el cargo selecciona sólo el circuito, me regresa solo una persona */                   
                    //echo '<br> el area es circuito '.$area." ----- ".$circuito;
                    if($circuito != ""){ //echo 'pp';
                        $totalEquipo = $em->getRepository('EncuestasBundle:ComandoCamp')->findBy(array('area'=>$area,
                            'cargoComando'=>$cargo->getId(),'identificador'=>$circuito) );
                        $identificador = $circuito;

                        //echo '<br> circuito en aki '.$circuito;
                    } /* luego de seleccionar el cargo y NO selecciona el circuito, me regresa muchas una persona */
                    else{//echo '<br> circuito en del otro '.$cargo->getId()." ,,,, ".$area;
                        $totalEquipo = $em->getRepository('EncuestasBundle:ComandoCamp')->findBy(array('area'=>$area,
                            'cargoComando'=>$cargo->getId()) );
                        $identificador = "";
                        //echo '<br> totalEquipo '.$totalEquipo;
                    }
                }
                //foreach ($totalEquipo as $key => $value) {
                //    echo '<br> value '.$value;
                //}
            } /* sí selecciona el cargo "todos", en este caso va a visualizar todas las persona del cargo de un municipio o circuito seleccionado */
            else{
                if($area == "municipio"){
                    if(isset($municipio)){
                        $totalEquipo = $em->getRepository('EncuestasBundle:ComandoCamp')->findBy(array('area'=>$area,
                            'identificador'=>$municipio) );
                        $identificador = $municipio;
                    }
                }
                else{                    
                    if(isset($circuito)){
                        $totalEquipo = $em->getRepository('EncuestasBundle:ComandoCamp')->findBy(array('area'=>$area,
                            'identificador'=>$circuito) );
                        $identificador = $circuito;
                    }
                }
            }
            //$totalEquipo = $em->getRepository('EncuestasBundle:ComandoCamp')->findBy(array('area'=>$area,'cargo'=>$cargo) );
            /*echo "<br> totalEquipo ".*/$totalEquipo = count($totalEquipo);
            //echo "<br> iden ".$identificador." -";
            //$i =0;      
            //echo "<br> 123iden ".$identificador;
            $totalPersonaContactada = array();
            if($encuesta->getTipoEncuesta() == "comando"){
                $totalContactadas = $em->getRepository('EncuestasBundle:ContactadoComando')->findBy(array('encuesta'=>$encuesta));
                //foreach ($totalContactadas as $key => $value) { echo "<br>value ".$value; }
                if($cargo != "todos"){ //echo "<br> diferente a todos ".$cargo->getNombre();
                    //echo "<br> diferente a todos ".$cargo = $em->getRepository('EncuestasBundle:CargoComando')->findOneBy(array('nombre'=>$cargo));
                    if(isset($area)) { //echo "<br> con area ".$area;
                        if($identificador != ""){ //echo "<br> con area con identificador $identificador";
                            foreach ($totalContactadas as $key => $value) { //echo "<br>value ".$value;//$i++;
                            /*echo "<br><br>getIdentificador ".(integer)$value->getComandoCamp()->getIdentificador()." area- ".
                            $value->getComandoCamp()->getArea()." getCargoComando ".$value->getComandoCamp()->getCargoComando();
                            echo "<br>identificador ".(integer)$identificador." area- ".
                            $area." cargoComando ".$cargo;*/
                                /* con este ultimo if sólo debe seleccionar una persona ya que se especificaron todos los parametros */
                                if((integer)$value->getComandoCamp()->getIdentificador() == (integer) $identificador 
                                    and $value->getComandoCamp()->getArea() == $area
                                 and $value->getComandoCamp()->getCargoComando() == $cargo){
                                    /*echo "<br>totalPersonaContactada ".*/$totalPersonaContactada[] = $value;
                                }
                            }
                        }
                        else{ //echo "<br> con area sin identificador";
                            foreach ($totalContactadas as $key => $value) { //echo "<br>value ".$value;
                                /* en este if debe retornar todas las personas de un area (circuito o municipio) y cargo en especifico */
                                /*echo "<br><br> value area- ".$value->getComandoCamp()->getArea()." value CargoComando ".
                                $value->getComandoCamp()->getCargoComando();
                                echo "<br> area- ".$area." cargoComando ".$cargo;

                                if($value->getComandoCamp()->getArea() == $area ){
                                     echo "<br> entro en area - ";
                                }
                                     echo "<br> el cargo - ".gettype($value->getComandoCamp()->getCargoComando()).
                                     " tam ".strlen($value->getComandoCamp()->getCargoComando()->getNombre());

                                     echo "<br> otro el cargo - ".gettype($cargo)." tam ".strlen($cargo->getNombre());
                                if($value->getComandoCamp()->getCargoComando()->getNombre() == $cargo->getNombre() ){
                                     echo "<br> entro en cargo - ";
                                    
                                }
                                */

                                if($value->getComandoCamp()->getArea() == $area 
                                    and $value->getComandoCamp()->getCargoComando()->getNombre() == $cargo->getNombre()){
                                    /*echo "<br>totalPersonaContactada ".*/$totalPersonaContactada[] = $value;
                                }
                            }
                        }
                    }
                }
                else{ /* con este if es cuando no selecciona cargo, es decir, todos y por consiguiente debe seleccionar area e identificador.
                      Devuelve muchas personas*/ 
                    if(isset($area) and $identificador){
                        foreach ($totalContactadas as $key => $value) { //echo "<br> igual a todos";
                            if($value->getComandoCamp()->getIdentificador() == $identificador 
                                and $value->getComandoCamp()->getArea() == $area){
                                $totalPersonaContactada[] = $value;
                            }
                        }
                    }
                }
                
            }
            //echo "<br> 567iden ".$identificador;
            $totalPersonaContactada = count($totalPersonaContactada);
            //echo "<br> ".(integer)$totalPersonaContactada." ".(integer)$totalEquipo;
            //exit;
            //este if se hace porke se debe verificar ke el total de contactados sea diferente al total de buscados,
            //ya que si son iguales es porke en la tabla contactados estan todos los del ekipo que se esta buscando.
            if((integer)$totalPersonaContactada == (integer)$totalEquipo){
                $personaNoEncontrada = true;
                $contactadosTodos = true;
                //echo '<br>ññ '.$cont. ' '.$total;
                $results[0]['apellidos_nombres']="";
                $results[0]['cedula']="";
                $results[0]['telefono_1']="";
                $this->get('session')->getFlashBag()->add('info', 'Ya todas las personas del Comando de Campaña fueron contactadas' ); 
                return $this->redirect($this->generateUrl('encuestas_datosEncuestaComando', array('id_encuesta'=> $encuesta->getId())));  
            }
            else{
                while($personaNoEncontrada == false /*and $cont != $total*/){
                    
                    //en la consulta de statement sustituyo el signo de interrogación por el $parroquia->getId() mediante el bindValue, el 1 es porke es el primer
                    //signo de interrogación, si hubiese otro signo de interrogación se coloca otro bindValue y sería 2 y así aumentaría d uno en uno
                    if($cargo != "todos"){
                        if($municipio != "" or $circuito != ""){
                            if($municipio != ""){
                                $identificador = $municipio;                            
                            }
                            if($circuito != ""){
                                $identificador = $circuito;                           
                            }
                            /* obtengo una persona del area (circuito o municipio) especificado por el identificador y el cargo ke tiene*/
                            $statement = $connection->prepare("SELECT * FROM comando_camp WHERE area = ? AND id_cargo_comando = ? AND identificador = ? ORDER BY RANDOM() LIMIT 1 ");
                            $statement-> bindValue(1,$area);
                            $statement-> bindValue(2,$cargo->getId());
                            $statement-> bindValue(3,$identificador);
                        }
                        else{
                            /* obtengo muchas persona del area (circuito o municipio) de un mismo cargo, es decir, por ejemplo todos los jefes del area (circuito o municipio)*/
                            $statement = $connection->prepare("SELECT * FROM comando_camp WHERE area = ? AND id_cargo_comando = ? ORDER BY RANDOM() LIMIT 1 ");
                            $statement-> bindValue(1,$area);
                            $statement-> bindValue(2,$cargo->getId());
                        }
                        
                    }
                    else{
                        if($municipio != "" or $circuito != ""){
                            if($municipio != ""){
                                $identificador = $municipio;                            
                            }
                            if($circuito != ""){
                                $identificador = $circuito;                           
                            }         //echo "<br> iden ".$identificador;
                            /* obtengo muchas persona de un area (circuito o municipio) y sin importa el cargo ke tienen cada uno de ellos*/
                            $statement = $connection->prepare("SELECT * FROM comando_camp WHERE area = ? AND identificador = ? ORDER BY RANDOM() LIMIT 1 ");
                            $statement-> bindValue(1,$area);
                            $statement-> bindValue(2,$identificador);
                        }
                    }

                    $statement->execute();
                    $results = $statement->fetchAll();
                    //$results = $em->getRepository('EncuestasBundle:ComandoCamp')->findBy(array('area'=>"circuito",
                    //        'cargo'=>$cargo->getId(),'identificador'=>$circuito) );
                    //echo '<br> coun '.count($results);
                    //echo '<br><br>id',(integer)$encuesta->getId(),'<br>cedula'.$results[0]['cedula'],'<br>equipo';
                    //$personaContactada = $em->getRepository('EncuestasBundle:Contactados')->findOneByCedula();
                    //realizo la búskeda por el id_encuesta, cedula y equipo para verificar si ya fue contactado, si lo encuestra vuelve a buscar otra persona
                    
                    if(count($results) == 0){
                        $this->get('session')->getFlashBag()->add('info', 'No existen datos para este municipio '); 
                        return $this->redirect($this->generateUrl('encuestas_datosEncuestaComando', array('id_encuesta'=> $encuesta->getId())));        
                    }
                    //echo $encuesta->getTipoEncuesta().' encuesta '.$encuesta,' cedula '.$results[0]['cedula'],' cargo '.$this->getRequest()->getSession()->get('cargo');
                    
                    if($encuesta->getTipoEncuesta() == "comando"){
                        $personaContactada = $em->getRepository('EncuestasBundle:ContactadoComando')->findOneBy(array('encuesta'=>$encuesta,
                            'cedula' => $results[0]['cedula']));
                    }
                    //echo '<br><br>personaContactada ',$personaContactada;
                    if(isset($personaContactada)){
                        $personaNoEncontrada = false;
                    }
                    else{
                        $personaNoEncontrada = true;
                    }
                }
            }

            /* esto es para que muestre los nombre y no los id */
            if($results[0]['cedula'] != ""){
                $comandoCamp = $em->getRepository('EncuestasBundle:ComandoCamp')->findOneBy(array('cargoComando'=>$results[0]['id_cargo_comando']));
                if($results[0]['area'] == "municipio"){
                    $mun = $em->getRepository('EncuestasBundle:Municipio')->findOneBy(array('id'=>$results[0]['identificador']));
                    $results[0]['identificador'] = $mun->getNombreMunicipio();
                }
                
                $results[0]['id_cargo_comando'] = $comandoCamp->getCargoComando()->getNombre();
            }

            $this->getRequest()->getSession()->set('results', $results[0]);
            return $this->render('EncuestasBundle:Encuestas:mostrarDatosComando.html.twig', array('formulario' => $formulario->createView(),
            'cargo' => $this->getRequest()->getSession()->get('cargo'),
            'municipio' => $municipio,
            'circuito' => $this->getRequest()->getSession()->get('circuito'), 'encuesta' => $encuesta, 'results' => $results[0],
            'contactadosTodos'=>$contactadosTodos));
        } 

        return $this->render('EncuestasBundle:Encuestas:datosEncuestaComando.html.twig', array('formulario' => $formulario->createView(),
            'encuesta' => $encuesta, 'municipios' => $municipios, 'parroquia' =>'', 'circuitos' => $circuitos, 'cargosComando' => $cargosComando));
        
    }

    public function cargarMunicipiosAction($id_circuito)
    {
        $em = $this->getDoctrine()->getManager();
        $municipios = array();
        $usuario = $this->getUser(); 
        if($usuario->getPrioridad()){
            $cvUsuario = $em->getRepository('EncuestasBundle:CentroVotacion')->findBy(array('idUsuario'=>$usuario->getId()),array('nombreCentro'=>'ASC'));
            foreach ($cvUsuario as $key => $value) {
                //echo "<br> . ".$value->getParroquia()->getMunicipio();
                $municipio =  $em->getRepository('EncuestasBundle:Municipio')->findOneBy(array('id'=>$value->getParroquia()->getMunicipio()),array('nombreMunicipio'=>'ASC'));
                $municipios[] = $municipio;
            }
            $municipios = array_unique($municipios);
        }
        else{
            $municipios =  $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
        }
        $datos = array();
        foreach ($municipios as $key => $value) {
            if($municipios[$key]->getCircuito()->getId() == $id_circuito){
                //lo almaceno en la variable $datos en forma de diccionario porke así lo necesito en JQUERY
                $datos[]=array("mun"=>$municipios[$key]->getNombreMunicipio(),"id_mun"=>$municipios[$key]->getId());
            }
        }

        $response = new Response(json_encode($datos));       
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function cargarParroquiasAction($id_municipio)
    {
        $em = $this->getDoctrine()->getManager();
        $parroquias = array();
        $usuario = $this->getUser(); 
        if($usuario->getPrioridad()){
            $cvUsuario = $em->getRepository('EncuestasBundle:CentroVotacion')->findBy(array('idUsuario'=>$usuario->getId()),array('nombreCentro'=>'ASC'));
            foreach ($cvUsuario as $key => $value) {
                $parroquia = $em->getRepository('EncuestasBundle:Parroquia')->findOneBy(array('id'=>$value->getParroquia()),array('nombreParroquia'=>'ASC'));
                $parroquias[] = $parroquia;
            }
            $parroquias = array_unique($parroquias);
        }
        else{
            $parroquias = $em->getRepository('EncuestasBundle:Parroquia')->findBy(array(),array('nombreParroquia'=>'ASC'));
        }
        
        $datos = array();
        foreach ($parroquias as $key => $value) {
            if($parroquias[$key]->getMunicipio()->getId() == $id_municipio){
                //lo almaceno en la variable $datos en forma de diccionario porke así lo necesito en JQUERY
                $datos[]=array("paq"=>$parroquias[$key]->getNombreParroquia(),"id_paq"=>$parroquias[$key]->getId());
            }
        }

        $response = new Response(json_encode($datos));       
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function cargarCVAction($id_parroquia)
    {
        $em = $this->getDoctrine()->getManager();
        $parroquias = array();
        $usuario = $this->getUser();
        if($usuario->getPrioridad()){
            $cv = $em->getRepository('EncuestasBundle:CentroVotacion')->findBy(array('idUsuario'=>$usuario->getId()),array('nombreCentro'=>'ASC'));
        }
        else{
            $cv = $em->getRepository('EncuestasBundle:CentroVotacion')->findBy(array(),array('nombreCentro'=>'ASC'));
        }

        $datos = array();
        foreach ($cv as $key => $value) {
            if($cv[$key]->getParroquia()->getId() == $id_parroquia){
                //lo almaceno en la variable $datos en forma de diccionario porke así lo necesito en JQUERY
                $datos[]=array("cv"=>$cv[$key]->getNombreCentro(),"id_cv"=>$cv[$key]->getId());
            }
        }

        $response = new Response(json_encode($datos));       
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function resumenAction()
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM EncuestasBundle:Encuesta a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*page number*/,3/*limit per page*/);

        // parameters to template
        return $this->render('EncuestasBundle:Encuestas:resumenEncuestas.html.twig', array('pagination' => $pagination,'buscar' => ""));
        
    }

    public function respuestasAction($id_encuesta)
    {

        $peticion = $this->getRequest();
        $item = $peticion->request->get('item');

        foreach ($item as $key => $value) {
            if ($item[$key]) {
               echo "<br>".$key.' . '. $value;
            }
     
        }
    }


    public function verDetallesAction($id_encuesta, $tipo ='')
    {
        $peticion = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $encuesta = $em->find('EncuestasBundle:Encuesta', $id_encuesta);
        $plantilla = '';
        $contactados = array();
        $contactadoComando = array();
        $datosGenerales = array();

        $tipo_encuesta = $tipo;



        /*
        $statement = $connection->prepare("SELECT count(id_ubch) FROM ubch");
                $statement->execute();
                $seq = $statement->fetchAll();
                
                foreach ($seq[0] as $key => $value) {
                    $idUBCH = (integer)$value + 1;
                    $this->getRequest()->getSession()->set('idNueva',$idUBCH);
                    $datosJson = array("result"=>$name,"id_ubch"=>$idUBCH);

                }
        */


        if($encuesta->getTipoEncuesta()== "general"){
            if($tipo == "uno"){
                $plantilla = 'EncuestasBundle:Encuestas:detalleVentana.html.twig';
            }
            else{

                //$statement = $connection->prepare("UPDATE ".$tipo." SET apellidos_nombres = ?, cedula = ? WHERE ".$idTipo." = ? "); 

                //en la consulta de statement sustituyo el signo de interrogación por el $parroquia->getId() mediante el bindValue, el 1 es porke es el primer
                //signo de interrogación, si hubiese otro signo de interrogación se coloca otro bindValue y sería 2 y así aumentaría d uno en uno
                //$statement-> bindValue(1,$datos[0]);
                $connection = $em->getConnection();
                $statement = $connection->prepare("SELECT count(resp_4),resp_6  FROM contactados where resp_4 = 'no' and id_encuesta = ".$id_encuesta." group by resp_4, resp_6;");
                $statement->execute();
                $resp_4_no = $statement->fetchAll();

                $statement = $connection->prepare("SELECT count(resp_4),resp_6  FROM contactados where resp_4 = 'no' and id_encuesta = ".$id_encuesta." group by resp_4, resp_6;");
                $statement->execute();
                $resp_4_si = $statement->fetchAll();
                
                /*foreach ($resp_4_no as $key => $value) {
                    //foreach ($value as $k => $v) {
                    //    echo " ".$v;
                    //}

                    echo $value['count'];
                        
                    echo $resp_4_no[1]['resp_6'];
                        echo '<br>';
                    echo $resp_4_si$resp_4_no[1]['resp_6'];
                        echo '<br>';
                   // $idUBCH = (integer)$value + 1;
                    //$this->getRequest()->getSession()->set('idNueva',$idUBCH);
                    //$datosJson = array("result"=>$name,"id_ubch"=>$idUBCH);

                }*/

                $plantilla = 'EncuestasBundle:Encuestas:detalleVentana2.html.twig';

            }
            $municipios = $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
            $parroquias = $em->getRepository('EncuestasBundle:Parroquia')->findBy(array(),array('nombreParroquia'=>'ASC'));
            $cvCandidatos = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_encuesta'=>$encuesta->getId()));
            //$contactados = $em->getRepository('EncuestasBundle:Contactados')->findBy(array('encuesta'=>$encuesta->getId()));
            $incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findBy(array('encuesta'=>$encuesta->getId()));

            $datosEmpresas = [];
            $empresas =array(array('equipo'=>"astimarca",'empresa'=>"ASTIMARCA"),array('equipo'=>"cimla",'empresa'=>"CIMLA"),array('equipo'=>"corsobain",'empresa'=>"CORSOBAIN"),array('equipo'=>"diques",'empresa'=>"DIQUES Y ASTILLEROS"),array('equipo'=>"enasal",'empresa'=>"ENASAL"),array('equipo'=>"enatex",'empresa'=>"ENATEXCA"),array('equipo'=>"juncal",'empresa'=>"ENATUB EL JUNCAL"),array('equipo'=>"imosa",'empresa'=>"ENATUB IMOSA"),array('equipo'=>"anzoategui",'empresa'=>"ENATUB JOSE ANTONIO ANZOATEGUI"),array('equipo'=>"revestimiento",'empresa'=>"ENATUB REVESTIMIENTO"),array('equipo'=>"simon",'empresa'=>"ENATUB SIMON BOLIVAR"),array('equipo'=>"horcones",'empresa'=>"ENATUB LOS HORCONES"),array('equipo'=>"enaval",'empresa'=>"ENAVAL"),array('equipo'=>"zaraza",'empresa'=>"FABRICA DE BLOQUES PEDRO ZARAZA"),array('equipo'=>"galba",'empresa'=>"GUARDIAN DEL ALBA"),array('equipo'=>"icvt",'empresa'=>"ICVT"),array('equipo'=>"paca",'empresa'=>"PACA"),array('equipo'=>"asfalto",'empresa'=>"PDVSA ASFALTO"),array('equipo'=>"matriz",'empresa'=>"PDVSA INDUSTRIAL CASA MATRIZ"),array('equipo'=>"pilotes",'empresa'=>"PILOTES"),array('equipo'=>"pignv",'empresa'=>"PIGNV"),array('equipo'=>"pmvca",'empresa'=>"PMVCA"),array('equipo'=>"probasim",'empresa'=>"PROBASIM"),array('equipo'=>"recuvensa",'empresa'=>"RECUVENSA"),array('equipo'=>"unerven",'empresa'=>"UNERVEN"),array('equipo'=>"vensoplast",'empresa'=>"VENSOPLAST"),array('equipo'=>"vhicoa",'empresa'=>"VHICOA"),array('equipo'=>"vietven",'empresa'=>"VIETVEN"));
            foreach ($empresas as $key => $value) {
                //echo "<br><br>".$value['equipo'].$value['empresa'];
                $elSi = $encuesta->totalContactadosEmpresaPregunta("si",1,$value['equipo']);
                $elNo = $encuesta->totalContactadosEmpresaPregunta("norespondio",1,$value['equipo']);
                $elNoAsignado = $encuesta->totalContactadosEmpresaPregunta("noasignado",1,$value['equipo']);

                $elSi2 = $encuesta->totalContactadosEmpresaPregunta("si",2,$value['equipo']);
                $cambiodenumero2 = $encuesta->totalContactadosEmpresaPregunta("cambiodenumero",2,$value['equipo']);
               
                $elSi3 = $encuesta->totalContactadosEmpresaPregunta("si",3,$value['equipo']);
                $elNo3 = $encuesta->totalContactadosEmpresaPregunta("norespondio",3,$value['equipo']);
                $elSi4 = $encuesta->totalContactadosEmpresaPregunta("si",4,$value['equipo']);
                $elNo4 = $encuesta->totalContactadosEmpresaPregunta("no",4,$value['equipo']);
                $nosabe4 = $encuesta->totalContactadosEmpresaPregunta("nosabe",4,$value['equipo']);
                

                /*
                $movilizacion = $encuesta->totalContactadosEmpresaPregunta("movilizacion",5,$value['equipo']);
                $logistico = $encuesta->totalContactadosEmpresaPregunta("logistico",5,$value['equipo']);
                $seguridad = $encuesta->totalContactadosEmpresaPregunta("seguridad",5,$value['equipo']);
                $salud = $encuesta->totalContactadosEmpresaPregunta("salud",5,$value['equipo']);
                $metereologico = $encuesta->totalContactadosEmpresaPregunta("metereologico",5,$value['equipo']);
                $electrico = $encuesta->totalContactadosEmpresaPregunta("electrico",5,$value['equipo']);
                $otro = $encuesta->totalContactadosEmpresaPregunta("otro",5,$value['equipo']);


                1">Guerra económica  2">Seguridad  3">Transporte
                4">Servicos 5">Distrito Capital  6">Otros

                1">Amazonas  2">Aragua  3">Anzoátegui  4">Apure  5">Barinas  6">Bolivar  7">Carabobo  8">Cojedes
                  9">Delta Amacuro  10">Falcón  11">Guárico  12">Lara  13">Mérida  14">Miranda  15">Monagas
                  16">Nueva Esparta 17">Portuguesa  18">Sucre  19">Táchira  20">Trujillo  21">Vargas
                  22">Yaracuy  23">Zulia

                */

                //echo $edoAnzoategui = $encuesta->totalContactadosEmpresaPreguntaEstado("si",4,3,$value['equipo']);

                $economica = $encuesta->totalContactadosEmpresaPregunta(1,5,$value['equipo']);
                $seguridad5 = $encuesta->totalContactadosEmpresaPregunta(2,5,$value['equipo']);
                $transporte = $encuesta->totalContactadosEmpresaPregunta(3,5,$value['equipo']);
                $servicios = $encuesta->totalContactadosEmpresaPregunta(4,5,$value['equipo']);
                $capital = $encuesta->totalContactadosEmpresaPregunta(5,5,$value['equipo']);
                $otros = $encuesta->totalContactadosEmpresaPregunta(6,5,$value['equipo']);

                $amazonas = $encuesta->totalContactadosEmpresaPregunta(1,6,$value['equipo']);
                $aragua = $encuesta->totalContactadosEmpresaPregunta(2,6,$value['equipo']);
                $anzoategui = $encuesta->totalContactadosEmpresaPregunta(3,6,$value['equipo']);
                $apure = $encuesta->totalContactadosEmpresaPregunta(4,6,$value['equipo']);
                $barinas = $encuesta->totalContactadosEmpresaPregunta(5,6,$value['equipo']);
                $bolivar = $encuesta->totalContactadosEmpresaPregunta(6,6,$value['equipo']);
                $carabobo = $encuesta->totalContactadosEmpresaPregunta(7,6,$value['equipo']);
                $cojedes = $encuesta->totalContactadosEmpresaPregunta(8,6,$value['equipo']);
                $delta = $encuesta->totalContactadosEmpresaPregunta(9,6,$value['equipo']); 
                $falcon = $encuesta->totalContactadosEmpresaPregunta(10,6,$value['equipo']);
                $guarico = $encuesta->totalContactadosEmpresaPregunta(11,6,$value['equipo']);
                $lara = $encuesta->totalContactadosEmpresaPregunta(12,6,$value['equipo']);
                $merida = $encuesta->totalContactadosEmpresaPregunta(13,6,$value['equipo']);
                $miranda = $encuesta->totalContactadosEmpresaPregunta(14,6,$value['equipo']);
                $monagas = $encuesta->totalContactadosEmpresaPregunta(15,6,$value['equipo']);
                $nueva = $encuesta->totalContactadosEmpresaPregunta(16,6,$value['equipo']);
                $portuguesa = $encuesta->totalContactadosEmpresaPregunta(17,6,$value['equipo']);
                $sucre = $encuesta->totalContactadosEmpresaPregunta(18,6,$value['equipo']);
                $tachira = $encuesta->totalContactadosEmpresaPregunta(19,6,$value['equipo']);
                $trujillo = $encuesta->totalContactadosEmpresaPregunta(20,6,$value['equipo']);
                $vargas = $encuesta->totalContactadosEmpresaPregunta(21,6,$value['equipo']);
                $yaracuy = $encuesta->totalContactadosEmpresaPregunta(22,6,$value['equipo']);
                $zulia = $encuesta->totalContactadosEmpresaPregunta(23,6,$value['equipo']);

                $capitalE = $encuesta->totalContactadosEmpresaPregunta(24,6,$value['equipo']);
                $ninguno = $encuesta->totalContactadosEmpresaPregunta(25,6,$value['equipo']);


                $psuv = $encuesta->totalContactadosEmpresaPregunta('psuv',7,$value['equipo']);
                $mud = $encuesta->totalContactadosEmpresaPregunta("mud",7,$value['equipo']);

                $movilizacion = $encuesta->totalContactadosEmpresaPregunta("movilizacion",8,$value['equipo']);
                $logistico = $encuesta->totalContactadosEmpresaPregunta("logistico",8,$value['equipo']);
                $seguridad = $encuesta->totalContactadosEmpresaPregunta("seguridad",8,$value['equipo']);
                $salud = $encuesta->totalContactadosEmpresaPregunta("salud",8,$value['equipo']);
                $metereologico = $encuesta->totalContactadosEmpresaPregunta("metereologico",8,$value['equipo']);
                $electrico = $encuesta->totalContactadosEmpresaPregunta("electrico",8,$value['equipo']);
                $otro = $encuesta->totalContactadosEmpresaPregunta("otro",8,$value['equipo']);


                $datosEmpresas[] =array('equipo'=>$value['equipo'], 'empresa' => $value['empresa'], 'si1' => $elSi, 'no1' => $elNo, 'noasignado1' => $elNoAsignado, 'si2' => $elSi2, 'no2' => $cambiodenumero2, 'si3' => $elSi3, 'no3' => $elNo3, 'si4' => $elSi4, 'no4' => $elNo4, 'nosabe4' => $nosabe4,
                    'economica' => $economica, 'seguridad5' => $seguridad5, 'transporte' => $transporte, 'servicios' => $servicios, 'capital' => $capital, 'otros' => $otros, 
                    'psuv' => $psuv, 'mud' => $mud,
                    'amazonas' => $amazonas, 'aragua' => $aragua, 'anzoategui' => $anzoategui, 'apure' => $apure, 'barinas' => $barinas, 'bolivar' => $bolivar, 'carabobo' => $carabobo, 'cojedes' =>$cojedes, 'delta' => $delta, 'falcon' => $falcon, 'guarico' => $guarico, 'lara' => $lara, 'merida' => $merida, 'miranda' => $miranda, 'monagas' => $monagas, 'nueva' => $nueva, 'portuguesa' => $portuguesa, 'sucre' => $sucre, 'tachira' => $tachira, 'trujillo' => $trujillo, 'vargas' => $vargas, 'yaracuy' => $yaracuy, 'zulia' => $zulia, 'capitalE' => $capitalE, 'ninguno' => $ninguno,



                 'movilizacion' => $movilizacion, 'logistico' => $logistico, 'seguridad' => $seguridad, 'salud' => $salud, 'metereologico' => $metereologico, 'electrico' => $electrico, 'otro' => $otro);
            }

            $datos = array();

            $arrayEstados = array("","Amazonas","Aragua","Anzoátegui","Apure","Barinas","Bolivar","Carabobo","Cojedes","Delta Amacuro","Falcón","Guarico","Lara","Mérida","Miranda","Monagas","Nueva Esparta","Portuguesa","Sucre","Táchira","Trujillo","Vargas","Yaracuy","Zulia","Dtto. Capital","Ninguno","","");
            for ($i=1; $i < 26 ; $i++) { 

                $estados[$i] = array('si' => $encuesta->totalContactadosEmpresaPreguntaEstado("si",4,$i,''), 'no' => $encuesta->totalContactadosEmpresaPreguntaEstado("si",4,$i,''), 'total' => $encuesta->totalContactadosEmpresaPreguntaEstado("si",4,$i,'') + $encuesta->totalContactadosEmpresaPreguntaEstado("no",4,$i,''), 'estado' => $arrayEstados[$i]);
            }

            
            $totalGeneral = (integer)$encuesta->totalContactadosSi('si') + (integer)$encuesta->totalContactadosSi('norespondio');
            $datosGenerales =array('estados' => $estados, 'datosEmpresas'=>$datosEmpresas,'total'=>$totalGeneral,
                        'si1'=>$encuesta->totalContactadosSiPregunta("si",1),
                        'norespondio1'=>$encuesta->totalContactadosSiPregunta("norespondio",1),
                        'noasignado1'=>$encuesta->totalContactadosSiPregunta("noasignado",1),
                        'si2'=>$encuesta->totalContactadosSiPregunta("si",2),
                        'cambiodenumero2'=>$encuesta->totalContactadosSiPregunta("cambiodenumero",2),
                        'si3'=>$encuesta->totalContactadosSiPregunta("si",3),
                        'no3'=>$encuesta->totalContactadosSiPregunta("norespondio",3),
                        'si4'=>$encuesta->totalContactadosSiPregunta("si",4),
                        'no4'=>$encuesta->totalContactadosSiPregunta("no",4),
                        'nosabe4'=>$encuesta->totalContactadosSiPregunta("nosabe",4),
                        'si5'=>$encuesta->totalContactadosSiPregunta("si",5),
                        'no5'=>$encuesta->totalContactadosSiPregunta("no",5),
                        'movilizacion'=>$encuesta->totalContactadosSiPregunta("movilizacion",8),
                        'logistico'=>$encuesta->totalContactadosSiPregunta("logistico",8),
                        'seguridad'=>$encuesta->totalContactadosSiPregunta("seguridad",8),
                        'salud'=>$encuesta->totalContactadosSiPregunta("salud",8),
                        'metereologico'=>$encuesta->totalContactadosSiPregunta("metereologico",8),
                        'electrico'=>$encuesta->totalContactadosSiPregunta("electrico",8),
                        'otro'=>$encuesta->totalContactadosSiPregunta("otro",8),
                        'nosabe5'=>$encuesta->totalContactadosSiPregunta("nosabe",5),

                        /* $psuv
                        $mud
                        $movilizacion
                        $logistico
                        $seguridad
                        $salud
                        $metereologico
                        $electrico
                        $otro*/
                        );






            /*for($t = 1; $t < 5; $t++){
                foreach ($municipios =  as $key => $value) {
                    if($value->getCircuito()->getId())
                }
            }

            foreach ($contactados as $key => $value) {
                $datos[] =array('circuito'=>,'mun'=>,'paq'=>,'') 
            }*/
        }

        if($encuesta->getTipoEncuesta()== "comando"){

            $plantilla = 'EncuestasBundle:Encuestas:detalleVentanaComando.html.twig';
            $municipios = $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
            $parroquias = $em->getRepository('EncuestasBundle:Parroquia')->findBy(array(),array('nombreParroquia'=>'ASC'));
            $cvCandidatos = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_encuesta'=>$encuesta->getId()));
            $incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findBy(array('encuesta'=>$encuesta->getId()));
            $datos = array();
        }

        if($encuesta->getTipoEncuesta()== "fase1"){

            $plantilla = 'EncuestasBundle:Encuestas:detalleVentanaFase1.html.twig';
            $municipios = $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
            $parroquias = $em->getRepository('EncuestasBundle:Parroquia')->findBy(array(),array('nombreParroquia'=>'ASC'));
            $cvCandidatos = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_encuesta'=>$encuesta->getId()));
            $incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findBy(array('encuesta'=>$encuesta->getId()));
            $contactadosSufragio = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findBy(array('encuesta'=>$encuesta));
            $centros = array();

            foreach ($contactadosSufragio as $key => $value) {
               $centros[]=$value -> getCentroVotacion();
            }
            $datos = array();
            $centrodevotacion = array_unique($centros); 
            foreach ($centrodevotacion  as $key => $value) {
              $mesas='';
              $testigos='';
              $miembros='';
                
                foreach ($contactadosSufragio as $key1 => $value1) {

                    if ((string)$value1 -> getCentroVotacion()==(string)$value) {
                        if ($value1 -> getNumeroPregunta() == 1 and  $value1-> getRespuesta() == 'si') {
                            $mesas .= $value1 -> getNumeroMesa().',';
                        }
                        if ($value1 -> getNumeroPregunta() == 2 ) {
                            $testigos= $value1-> getRespuesta();
                        }
                        if ($value1 -> getNumeroPregunta() == 3 ) {
                            $miembros= $value1-> getRespuesta();
                        }                     
                    }             

                }  
                if ($mesas=='') {
                    $mesas='Ninguna';
                }

                $mesas= trim($mesas, ',');
                $datos[]= array('paq'=>$value->getParroquia()->getNombreParroquia(),
                    'cv'=>$value->getNombreCentro(),
                    'mi'=>$mesas,'testigos'=>$testigos,'miembros'=>$miembros,'municipio'=>$value->getParroquia()->getMunicipio()->getId()); 
            }
        }

        if($encuesta->getTipoEncuesta()== "fase2"){

            $plantilla = 'EncuestasBundle:Encuestas:detalleVentanaFase2.html.twig';
            $municipios = $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
            $parroquias = $em->getRepository('EncuestasBundle:Parroquia')->findBy(array(),array('nombreParroquia'=>'ASC'));
            $cvCandidatos = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_encuesta'=>$encuesta->getId()));
            $incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findBy(array('encuesta'=>$encuesta->getId()));

            $contactadosSufragio = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findBy(array('encuesta'=>$encuesta));
            $centros = array();
            foreach ($contactadosSufragio as $key => $value) {
               $centros[]=$value -> getCentroVotacion();   
            }
            $datos = array();
            $centrodevotacion = array_unique($centros); 
            foreach ($centrodevotacion  as $key => $value) {
                $apertura='';
                $testigos='';
                $cierre='';
                $oficialistas='';
                $opositores='';
                
               foreach ($contactadosSufragio as $key1 => $value1) {

                    if ((string)$value1 -> getCentroVotacion()==(string)$value) {
                        if ($value1 -> getNumeroPregunta() == 1 and  $value1-> getRespuesta() == 'si') {
                            $apertura .= $value1 -> getNumeroMesa().',';
                        }
                        if ($value1 -> getNumeroPregunta() == 2 ) {
                            $testigos = $testigos + $value1-> getRespuesta();
                        }
                        if ($value1 -> getNumeroPregunta() == 3 ) {
                            $oficialistas = $oficialistas + $value1-> getRespuesta();
                        } 
                        if ($value1 -> getNumeroPregunta() == 4 ) {
                            $opositores = $opositores + $value1-> getRespuesta();
                        }
                        if ($value1 -> getNumeroPregunta() == 5 and  $value1-> getRespuesta() == 'si' ) {
                            $cierre .= $value1-> getNumeroMesa().',';
                        }   
                    }             
                }  
                if ($apertura=='') {
                 $apertura='Ninguna';
                }

                $apertura= trim($apertura, ',');
                $testigos= trim($testigos, ',');
                $cierre= trim($cierre, ',');

                $datos[]= array('paq'=>$value->getParroquia()->getNombreParroquia(),
                    'cv'=>$value->getNombreCentro(),
                    'cvid'=>$value->getId(),
                    'apertura'=>$apertura,'testigos'=>$testigos, 'oficialistas'=>$oficialistas, 
                    'opositores'=>$opositores, 'cierre'=>$cierre,'municipio'=>$value->getParroquia()->getMunicipio()->getId()); 
            }
        }

        if($encuesta->getTipoEncuesta() != "general" and $encuesta->getTipoEncuesta() != "fase1" and $encuesta->getTipoEncuesta() != "fase2" and $encuesta->getTipoEncuesta() != "comando"){

            $plantilla = 'EncuestasBundle:Encuestas:detalleVentanaFase3.html.twig';
            $municipios = $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
            $parroquias = $em->getRepository('EncuestasBundle:Parroquia')->findBy(array(),array('nombreParroquia'=>'ASC'));
            $cvCandidatos = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_encuesta'=>$encuesta->getId()));
            $incidencias = $em->getRepository('EncuestasBundle:Incidencias')->findBy(array('encuesta'=>$encuesta->getId()));
            $datos = array();

        }

        $circuitos = $em->getRepository('EncuestasBundle:Circuito')->findBy(array(),array('id'=>'ASC'));
        return $this->render($plantilla, array('encuesta' => $encuesta,'buscar' => "", 'id_encuesta' => $encuesta, 'datos' => $datos,
            'municipios'=>$municipios,'parroquias'=>$parroquias, 'cvCandidatos' => $cvCandidatos,'circuitos'=>$circuitos,
            'datosGenerales'=>$datosGenerales,'asistencia'=>$peticion->query->get('asistencia'),
            'instalacion'=>$peticion->query->get('instalacion'),'movilizacion'=>$peticion->query->get('movilizacion'),
            'totalGlobal'=>$peticion->query->get('totalGlobal'),'totalizacion'=>$peticion->query->get('totalizacion'), 'incidencias'=>$incidencias));

    }

    public function verDetallesReporteAction($id_encuesta)
    {
        $peticion = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $encuesta = $em->find('EncuestasBundle:Encuesta', $id_encuesta);
        $plantilla = '';
        $contactados = array();
        $contactadoComando = array();
        $municipios = $em->getRepository('EncuestasBundle:Municipio')->findBy(array(),array('nombreMunicipio'=>'ASC'));
        $parroquias = $em->getRepository('EncuestasBundle:Parroquia')->findBy(array(),array('nombreParroquia'=>'ASC'));
        $cvCandidatos = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_encuesta'=>$encuesta->getId()));
        $contactadosSufragio = $em->getRepository('EncuestasBundle:ContactadosSufragio')->findBy(array('encuesta'=>$encuesta));
        $centros = array();
        $datos = array();

        if($encuesta->getTipoEncuesta()== "fase1"){

            $plantilla = 'EncuestasBundle:Encuestas:detalleVentanaReporteFase1.html.twig';

            foreach ($contactadosSufragio as $key => $value) {
                $centros[]=$value -> getCentroVotacion();   
            }
            
            $centrodevotacion = array_unique($centros); 
            foreach ($centrodevotacion  as $key => $value) {
                $mesas='';
                $testigos='';
                $miembros='';
                $cantMesas=0;
                
                foreach ($contactadosSufragio as $key1 => $value1) {

                    if ((string)$value1 -> getCentroVotacion()==(string)$value) {
                        if ($value1 -> getNumeroPregunta() == 1 and  $value1-> getRespuesta() == 'si') {
                            $mesas .= $value1 -> getNumeroMesa().'-';
                            $cantMesas++;
                        }
                        if ($value1 -> getNumeroPregunta() == 2 ) {
                            $testigos= $value1-> getRespuesta();
                        }
                        if ($value1 -> getNumeroPregunta() == 3 ) {
                            $miembros= $value1-> getRespuesta();
                        }                     
                    }
                }
                
                if ($mesas=='') {
                    $mesas='Ninguna';
                }

                $mesas= trim($mesas, '-');
                $datos[]= array('paq'=>$value->getParroquia()->getNombreParroquia(),
                    'cv'=>$value->getNombreCentro(),'id_cv'=>$value->getId(),'cantMesas'=>$cantMesas,
                    'mi'=>$mesas,'testigos'=>$testigos,'miembros'=>$miembros,'municipio'=>$value->getParroquia()->getMunicipio()->getId()); 
            }
        }

        if($encuesta->getTipoEncuesta()== "fase2"){

            $plantilla = 'EncuestasBundle:Encuestas:detalleVentanaReporteFase2.html.twig';            
            
            foreach ($contactadosSufragio as $key => $value) {
               $centros[]=$value -> getCentroVotacion();   
            }

            $centrodevotacion = array_unique($centros); 
            foreach ($centrodevotacion  as $key => $value) {
                $apertura='';
                $testigos='';
                $cierre='';
                $chavistas='';
                $opositores='';
                $cantMesas=0;
                $cantCierre=0;
                $incidencia = $em->getRepository('EncuestasBundle:Incidencias')->findOneBy(array('cv'=>$value->getId(), 'encuesta'=>$encuesta));
                
               foreach ($contactadosSufragio as $key1 => $value1) {

                    if ((string)$value1 -> getCentroVotacion()==(string)$value) {
                        if ($value1 -> getNumeroPregunta() == 1 and  $value1-> getRespuesta() == 'si') {
                            $apertura .= $value1 -> getNumeroMesa().'-';
                            $cantMesas++;
                        }
                        if ($value1 -> getNumeroPregunta() == 2 ) {
                            $testigos = $testigos + $value1-> getRespuesta();
                        }
                        if ($value1 -> getNumeroPregunta() == 3 ) {
                            $chavistas = $chavistas+$value1-> getRespuesta();
                        } 
                        if ($value1 -> getNumeroPregunta() == 4 ) {
                            $opositores = $opositores+$value1-> getRespuesta();
                        }
                        if ($value1 -> getNumeroPregunta() == 5 and  $value1-> getRespuesta() == 'si' ) {
                            $cierre .= $value1-> getNumeroMesa().'-';
                            $cantCierre++;
                        }   
                    }
                }
                if ($apertura=='') {
                 $apertura='Ninguna';
                }
                if ($testigos=='') {
                 $testigos='Ninguna';
                }
                if ($cierre=='') {
                 $cierre='Ninguna';
                }

                $apertura= trim($apertura, '-');
                $testigos= trim($testigos, '-');
                $cierre= trim($cierre, '-');

                $datos[]= array('paq'=>$value->getParroquia()->getNombreParroquia(),
                    'cv'=>$value->getNombreCentro(),'id_cv'=>$value->getId(),'cantMesas'=>$cantMesas,'cantCierre'=>$cantCierre,
                    'apertura'=>$apertura,'testigos'=>$testigos, 'oficialistas'=>$chavistas,
                    'tipoIncidencia'=>$incidencia->getTipoIncidencia(),
                    'incidencia'=>trim($incidencia->getDescripcion(),','),
                    'opositores'=>$opositores, 'cierre'=>$cierre,'municipio'=>$value->getParroquia()->getMunicipio()->getId()); 
            }
        }

        $filename = $encuesta->getTipoEncuesta()."_".date("Y_m_d_H-i-s").".csv"; 
        
        $response = $this->render($plantilla, array('encuesta' => $encuesta,'buscar' => "", 'id_encuesta' => $encuesta, 'datos' => $datos,
            'municipios'=>$municipios,'parroquias'=>$parroquias, 'cvCandidatos' => $cvCandidatos)); 

        $response->setStatusCode(200);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Description', 'Submissions Export');
        $response->headers->set('Content-Disposition', 'attachment; filename='.$filename);
        $response->headers->set('Content-Transfer-Encoding', 'binary');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', '0');

        return $response;

    }

    //función para buscar por nombre los proyectos
    public function buscarNombreAction()
    {
        $em = $this->getDoctrine()->getManager();
        $peticion = $this->getRequest();
        //almaceno en la variable $form todos los datos del formulario
        $form = $peticion->request->get('form');

        //se crea el formulario con un único elemente que es un campo de texto con nombre "nombreProyecto"
        $formu = $this->createFormBuilder();            
        $formu->add('nombreEncuesta','text', array('label' => 'Nombre de la Encuesta','attr'  => array('class'  => 'validate[required] form-line')));
        $formulario = $formu->getForm();

        //verifico sí existe algo escrito en el campo de texto "nombredeEncuesta" ó sí hizo click en el paginador
        if(isset($form['nombreEncuesta']) || $peticion->query->get('page')>0){
          if($form['nombreEncuesta'] != "" ){
              
            $em    = $this->get('doctrine.orm.entity_manager');
            $dql   = "SELECT a FROM EncuestasBundle:Encuesta a WHERE a.nombreEncuesta LIKE :name";
            $query = $em->createQuery($dql)->setParameter('name', '%'.$form['nombreEncuesta'].'%');
            //creo la variable de sesión que contenga el nombre escrito
            $this->getRequest()->getSession()->set('nombreEncuesta', $form['nombreEncuesta']);
          }
             
          else{
            // de lo contrario, es decir, si hace click en el paginador entonces realiza la búsqueda
            $em    = $this->get('doctrine.orm.entity_manager');
            $dql   = "SELECT a FROM EncuestasBundle:Encuesta a WHERE a.nombreEncuesta LIKE :name";
            $query = $em->createQuery($dql)->setParameter('name', '%'. $this->getRequest()->getSession()->get('nombreEncuesta').'%');
          }
            //se configura el paginador
          $paginator  = $this->get('knp_paginator');
          $pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*numero de pagina*/,1/*limite por pagina*/);
          return $this->render('EncuestasBundle:Encuestas:resumenEncuestas.html.twig', array('pagination' => $pagination,'buscar' => "nombre",
                              'nombreEncuesta' => $this->getRequest()->getSession()->get('nombreEncuesta')));
        }

        else{
          //$this->get('session')->getFlashBag()->add('info', 'Proyecto eliminado correctamente' );       
        
          return $this->render('EncuestasBundle:Encuestas:buscarNombreEncuestas.html.twig', array('formulario' => $formulario->createView(),
            'pagination' => "nada"));
        }
    }

    //buscar por fecha, es la misma mecanica que el buscar por nombre pero claro esta que ahora es por un rango de fecha
    public function buscarFechaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $peticion = $this->getRequest();
        //almaceno en la variable $form todos los datos del formulario
        $form = $peticion->request->get('form');

        $formu = $this->createFormBuilder();            
        //$formu->add('fechaInicio','date', array( 'years' => range(2014,2014), 'label' => 'Seleccionar Fecha de inicio de la Encuesta'));
        //$formu->add('fechaFinal','date', array( 'years' => range(2014,2020), 'label' => 'Seleccionar Fecha Final de la Encuesta'));
        $formu->add('fechaInicio','text',array(
                'label'  => 'Fecha de inicio',
                'required' => false,
                'attr' => array(
                'class' => 'validate[required,custom[date]] datepicker',
                'placeholder' => 'Pulse clic para mostrar calendario' )));
        $formu->add('fechaFinal','text',array(
                'label'  => 'Fecha de final',
                'required' => false,
                'attr' => array(
                'class' => 'validate[required,custom[date]] datepicker',
                'placeholder' => 'Pulse clic para mostrar calendario' )));
        $formulario = $formu->getForm();

        //verifico si recibe por primera vez la fecha inicio o si la cantidad de paginas del paginador es mayor a 0 para poder realizar las búsquedas
        if(isset($form['fechaInicio']) || $peticion->query->get('page')>0){
            $em = $this->get('doctrine.orm.entity_manager');

            if($form['fechaInicio'] != "" ){
                
                $fI=$form['fechaInicio'];
                $fF=$form['fechaFinal'];
                $dql   = "SELECT a FROM EncuestasBundle:Encuesta a WHERE a.fechaInicio >= :fechaI AND a.fechaFin <= :fechaF ";
                $query = $em->createQuery($dql)->setParameters(array('fechaI'=> date($fI) ,'fechaF'=> date($fF)));
                //asigno a variables de sesión la fechaInicio y final para seguir realizando las búsquedas cuando le doy al botón siguiente o atrás
                $this->getRequest()->getSession()->set('fechaInicio', date($fI));
                $this->getRequest()->getSession()->set('fechaFinal', date($fF));
            }
            else{
                
                $dql   = "SELECT a FROM EncuestasBundle:Encuesta a WHERE a.fechaInicio >= :fechaI AND a.fechaFin <= :fechaF ";
                $query = $em->createQuery($dql)->setParameters(array('fechaI'=> $this->getRequest()->getSession()->get('fechaInicio'),
                    'fechaF'=> $this->getRequest()->getSession()->get('fechaFinal')));
            }

            $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*numero de pagina*/,1/*limite por pagina*/);    
            // parametros para la plantilla
            return $this->render('EncuestasBundle:Encuestas:resumenEncuestas.html.twig', array('pagination' => $pagination,'buscar' => "fecha",
                'nombreEncuesta' => $this->getRequest()->getSession()->get('nombreEncuesta'),'fechaI'=> $this->getRequest()->getSession()->get('fechaInicio'),
                    'fechaF'=> $this->getRequest()->getSession()->get('fechaFinal')));
        }
        
        //$this->get('session')->getFlashBag()->add('info', 'Proyecto eliminado correctamente' );           
        return $this->render('EncuestasBundle:Encuestas:buscarFechaEncuestas.html.twig', array('formulario' => $formulario->createView(),
            'pagination' => null));
    }

    public function cargarCandidatoAction($id_encuesta)
    {
        $peticion = $this->getRequest();
        $candidato = new Candidatos();
        $formulario = $this->createForm(new CandidatoType(),$candidato);
        $formulario->handleRequest($peticion);        
        $form = $peticion->request->get('SistemaEncuesta_candidatotype');
        $formDatos = $peticion->request->get('form');
        $em = $this->getDoctrine()->getManager();
        $encuesta = $em->find('EncuestasBundle:Encuesta', $id_encuesta);
        $municipios = $em->getRepository('EncuestasBundle:Municipio')->findAll();

        //como todos los candidatos tiene encuesta,votos = 0 y tipo eleccion entonces asigno la encuesta, los votos y el tipo de eleccion
        $candidato->setEncuesta($encuesta); //echo $form['Guardar'];
        $candidato->setTipoEleccion($encuesta->getTipoEncuesta());
        $candidato->setCantidadVotosTotal(0);
        $candidato->setPartido($form['partido']);
        $candidato->subirFoto($this->container->getParameter('sistema_encuesta.directorio.imagenesCandidatos'));



        //si el usuario hace clic en el boton guardar entonces empiezo a verificar ke tipo de encuesta es y así realizar las búskedas en 
        //BD para hacer la asignación del identificador, es decir, el identificador es el id del municipio si la encuesta es de alcalde,
        // si la encuesta es por circuito entonces el identificador es el numero de circuito (id del circuito) y si no es ninguna de las
        //dos anteriores entonces la encuesta es para gobernadores o presidentes
        if(isset($formDatos['Guardar'])){
            if($encuesta->getTipoEncuesta() == "alcalde"){    
                $municipio = $em->find('EncuestasBundle:Municipio', $formDatos['municipios']);
                $candidato->setIdentificador($municipio->getId());                
            }
            elseif($encuesta->getTipoEncuesta() == "circuito"){
                $circuito = $em->find('EncuestasBundle:Circuito', $formDatos['circuito']);
                $candidato->setIdentificador($circuito->getId()); 
                
            }
            else{
                $candidato->setIdentificador('todos');
            }

            $em->persist($candidato);
            $em->flush($candidato);
            $this->get('session')->getFlashBag()->add('info', 'Candidato guardado correctamente' );
            return $this->redirect($this->generateUrl('encuestas_cargar_candidato',array('id_encuesta'=> $encuesta->getId(),)));
        }
        return $this->render('EncuestasBundle:Encuestas:cargarCandidato.html.twig', array('formulario' => $formulario->createView(),
            'encuesta' => $encuesta, 'municipios'=>$municipios));

    }

    public function buscarNombreEncuestaAction()
    {
      $em = $this->getDoctrine()->getManager();
      $peticion = $this->getRequest();
      $datos = array();
      $arrayToJs = array();

          $validateError= "El nombre de la encuesta ya esta registrado";
          $validateSuccess= "";
          $idCampo = $peticion->query->get('fieldId');
          $nombreEncuesta = $peticion->query->get('fieldValue');
          $encuesta = $em->getRepository('EncuestasBundle:Encuesta')->findOneBy(array('nombreEncuesta' => $nombreEncuesta,));
          //echo $usuario;
          //$request = $this->container->get('request');
          //echo '<br>ape',$routeName = $peticion->get('_route');
          //$name = $this->getActionName();
          //echo '<br>ap'.$name = $peticion->attributes->get('_controller');
          //$params = explode('::',$request->attributes->get('_controller'));

      if(isset($encuesta)){
          $arrayToJs[]=$idCampo;
          $arrayToJs[]=false;
          $arrayToJs[]=$validateError;
      }
      else{
          $arrayToJs[]=$idCampo;
          $arrayToJs[]=true;
          //$arrayToJs[]=$validateSuccess;
      }

      $response = new Response(json_encode($arrayToJs));       
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }

    public function buscarNombreCandidatoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $peticion = $this->getRequest();
        $datos = array();
        $arrayToJs = array();

        $validateError= "El nombre del candidato ya esta registrado";
        $validateSuccess= "";
        $idCampo = $peticion->query->get('fieldId');
        $apellidoNombre = $peticion->query->get('fieldValue');
        $candidatos = $em->getRepository('EncuestasBundle:Candidatos')->findOneBy(array('apellidoNombre' => $apellidoNombre,));
        //echo $usuario;
        //$request = $this->container->get('request');
        //echo '<br>ape',$routeName = $peticion->get('_route');
        //$name = $this->getActionName();
        //echo '<br>ap'.$name = $peticion->attributes->get('_controller');
        //$params = explode('::',$request->attributes->get('_controller'));

        if(isset($candidatos)){
            $arrayToJs[]=$idCampo;
            $arrayToJs[]=false;
            $arrayToJs[]=$validateError;
        }
        else{
            $arrayToJs[]=$idCampo;
            $arrayToJs[]=true;
            //$arrayToJs[]=$validateSuccess;
        }

        $response = new Response(json_encode($arrayToJs));       
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /* esta función sirve para editar los diferentes datos en "VIVO", haciendo doble clic, de los miembros de la UBCH */
    public function editarDatosAction($tipo)
    {
        $em = $this->getDoctrine()->getManager();
        $peticion = $this->getRequest();
        $cv = $this->getRequest()->getSession()->get('cv');
        $datosJson = "";
        $name = $peticion->get('value');
        //$datosJson[]=$name;
        /* asigno el valor del campo de esta manera para despues en el jquery.jeditable.js manipularlo como un objeto Json */
        $datosJson = array("result"=>$name);

        if($tipo == "ubch"){
            $idTipo = "id_ubch";
        }
        
        if($tipo == "clp"){
            $idTipo = "id_clp";
        }
        
        if($tipo == "beneficiarios_misiones"){
            $idTipo = "id_bene_misiones";
        }
        
        if($tipo == "militancia"){
            $idTipo = "id_militancia";
        }
        
        if($tipo == "rep"){
            $idTipo = "id_rep";
        }

        if($tipo == "trabajadores_patria"){
            $idTipo = "id_trab_patria";
        }

        if($tipo == "comando_camp"){
            $idTipo = "id_comando_camp";
        }

        if($tipo == "patrullas_sectoriales"){
            $idTipo = "id_patrullas_sectoriales";
        } 

        if($tipo == "gmvv"){
            $idTipo = "id_gmvv";
        } 

        if($tipo == "poder_popular"){
            $idTipo = "id_poder_popular";
        } 

        if($tipo == "patrulleros"){
            $idTipo = "id_patrulleros";
        }       

        if($peticion->get('nombre') != ""){
            $datos = explode(" (", $peticion->get('value'));
            /* sustrae sólo el número de cédula */
            $cedula = substr($datos[1], 3, -1);
            $connection = $em->getConnection();

            if($peticion->get('nombre') == "nuevo"){

                $statement = $connection->prepare("SELECT count(id_ubch) FROM ubch");
                $statement->execute();
                $seq = $statement->fetchAll();
                
                foreach ($seq[0] as $key => $value) {
                    $idUBCH = (integer)$value + 1;
                    $this->getRequest()->getSession()->set('idNueva',$idUBCH);
                    $datosJson = array("result"=>$name,"id_ubch"=>$idUBCH);

                }
                $statement = $connection->prepare("INSERT INTO ".$tipo." VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
                $statement-> bindValue(1,$idUBCH); //NEXTVAL('ubch_id_seq')
                $statement-> bindValue(2,$cv->getId());
                $statement-> bindValue(3,$cv->getParroquia()->getMunicipio()->getEje()->getId());
                $statement-> bindValue(4,$cv->getParroquia()->getId());
                $statement-> bindValue(5,$cv->getParroquia()->getMunicipio()->getId());
                $statement-> bindValue(6,trim($cedula));
                $statement-> bindValue(7,trim($datos[0]));
                $statement-> bindValue(8,"0");
                $statement-> bindValue(9,"");
                $statement-> bindValue(10,"Coordinador");
                $statement-> bindValue(11,0);
                $statement-> bindValue(12,0);
                $statement-> bindValue(13,0);
                $statement-> bindValue(14,0);
                $statement-> bindValue(15,$cv->getParroquia()->getMunicipio()->getCircuito()->getId());
                $statement->execute();
            }
            else{
                $statement = $connection->prepare("UPDATE ".$tipo." SET apellidos_nombres = ?, cedula = ? WHERE ".$idTipo." = ? "); 

                //en la consulta de statement sustituyo el signo de interrogación por el $parroquia->getId() mediante el bindValue, el 1 es porke es el primer
                //signo de interrogación, si hubiese otro signo de interrogación se coloca otro bindValue y sería 2 y así aumentaría d uno en uno
                $statement-> bindValue(1,$datos[0]);
                $statement-> bindValue(2,$cedula);
                $statement-> bindValue(3,$peticion->get('nombre'));
                $statement->execute();
            }
                       
        }

        if($peticion->get('telefono') != ""){

            $connection = $em->getConnection();
            $statement = $connection->prepare("UPDATE ".$tipo." SET telefono_1 = ? WHERE ".$idTipo." = ? "); 

            //en la consulta de statement sustituyo el signo de interrogación por el $parroquia->getId() mediante el bindValue, el 1 es porke es el primer
            //signo de interrogación, si hubiese otro signo de interrogación se coloca otro bindValue y sería 2 y así aumentaría d uno en uno
            $statement-> bindValue(1,trim($peticion->get('value')));
            // hago esta condición para verificar sí el dato es nuevo o recien ingresado en BD o ya fue buscado y mostrado
            if($peticion->get('telefono') == "nuevo"){
                $id = $this->getRequest()->getSession()->get('idNueva');
                $statement-> bindValue(2,$id);
                $datosJson = array("result"=>$name,"id_ubch"=>$id);
            }
            else{
                $statement-> bindValue(2,$peticion->get('telefono'));
            }
            
            $statement->execute();
        }

        if($peticion->get('telefono1') != ""){

            $connection = $em->getConnection();
            $statement = $connection->prepare("UPDATE ".$tipo." SET telefono_1 = ? WHERE ".$idTipo." = ? "); 

            //en la consulta de statement sustituyo el signo de interrogación por el $parroquia->getId() mediante el bindValue, el 1 es porke es el primer
            //signo de interrogación, si hubiese otro signo de interrogación se coloca otro bindValue y sería 2 y así aumentaría d uno en uno
            $statement-> bindValue(1,trim($peticion->get('value')));
            $statement-> bindValue(2,$peticion->get('telefono1'));
            $statement->execute();
        }

        if($peticion->get('telefono2') != ""){

            $connection = $em->getConnection();
            $statement = $connection->prepare("UPDATE ".$tipo." SET telefono_2 = ? WHERE ".$idTipo." = ? "); 

            //en la consulta de statement sustituyo el signo de interrogación por el $parroquia->getId() mediante el bindValue, el 1 es porke es el primer
            //signo de interrogación, si hubiese otro signo de interrogación se coloca otro bindValue y sería 2 y así aumentaría d uno en uno
            $statement-> bindValue(1,trim($peticion->get('value')));
            $statement-> bindValue(2,$peticion->get('telefono2'));
            $statement->execute();
        }

        if($peticion->get('nombres') != ""){

            $connection = $em->getConnection();
            $statement = $connection->prepare("UPDATE ".$tipo." SET apellidos_nombres = ? WHERE ".$idTipo." = ? "); 

            //en la consulta de statement sustituyo el signo de interrogación por el $parroquia->getId() mediante el bindValue, el 1 es porke es el primer
            //signo de interrogación, si hubiese otro signo de interrogación se coloca otro bindValue y sería 2 y así aumentaría d uno en uno
            $statement-> bindValue(1,$peticion->get('value'));
            $statement-> bindValue(2,$peticion->get('nombres'));
            $statement->execute();
        }

        if($peticion->get('cedula') != ""){

            $connection = $em->getConnection();

            $statement = $connection->prepare("UPDATE ".$tipo." SET cedula = ? WHERE ".$idTipo." = ? "); 

            //en la consulta de statement sustituyo el signo de interrogación por el $parroquia->getId() mediante el bindValue, el 1 es porke es el primer
            //signo de interrogación, si hubiese otro signo de interrogación se coloca otro bindValue y sería 2 y así aumentaría d uno en uno
            $statement-> bindValue(1,$peticion->get('value'));
            $statement-> bindValue(2,$peticion->get('cedula'));
            $statement->execute();
        }
        
        //$name = $peticion->query->get('value');
        //$name = $peticion->get('id');        

        //$request = $this->get('request');
        //$name .= $request->getMethod();

        //$name = $this->request->get('value');
        //return new Response($name);  


        $response = new Response(json_encode($datosJson));
        //$response->headers->set('Content-Type', 'text/html');
      
        return $response;
    }

    public function csvAction($id_encuesta,$repuesta){

        $em = $this->getDoctrine()->getManager();
        //$encuesta = $em->find('EncuestasBundle:Encuesta', $id_encuesta);
        $encuesta = $em->getRepository('EncuestasBundle:Encuesta')->findOneBy(array('id' => $id_encuesta));
        //$data = $em->getRepository('EncuestasBundle:Contactados')->findBy(array('resp1' => "si"));

        $connection = $em->getConnection();
        if($repuesta == "no_asignado"){
            $cadena = "contactados.resp_1 = 'noasignado'";
        }
        if($repuesta == "errado"){
            $cadena = "contactados.resp_2 = 'cambiodenumero'";
        }

        $statement = $connection->prepare("SELECT distinct ubch.cedula,ubch.id_cv,ubch.id_municipio,ubch.id_parroquia FROM ubch,contactados WHERE 
            ubch.cedula = contactados.cedula AND contactados.id_encuesta = ? AND ".$cadena.""); 
        $statement-> bindValue(1,$id_encuesta);
        $statement->execute();
        //$datos = $statement->fetchAll();
        $data = array();
        while ($row = $statement->fetch()) {
            //echo ' - '.$row['id_cv'];
            $statement1 = $connection->prepare("SELECT circuito.id_circuito,municipio.nombre_municipio,parroquia.nombre_parroquia,ubch.cedula,ubch.apellidos_nombres,ubch.telefono_1 FROM 
                ubch,municipio,parroquia,circuito WHERE ubch.cedula = ? AND municipio.id_municipio = ubch.id_municipio AND parroquia.id_parroquia = ubch.id_parroquia
                AND ubch.id_circuito = circuito.id_circuito ORDER BY circuito.id_circuito ASC"); 
            $statement1-> bindValue(1,$row['cedula']);
            $statement1->execute();
            $data[] = $statement1->fetch();
        }
        $repository = $this->getDoctrine()->getRepository('EncuestasBundle:Contactados'); 

        $filename = $repuesta."s_".date("Y_m_d_H-i-s").".csv"; 
        
        $response = $this->render('EncuestasBundle:Encuestas:adminCsv.html.twig', array('data' => $data)); 

        $response->setStatusCode(200);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Description', 'Submissions Export');
        $response->headers->set('Content-Disposition', 'attachment; filename='.$filename);
        $response->headers->set('Content-Transfer-Encoding', 'binary');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', '0');

        return $response; 

    }

    public function buscarCsvAction()
    {
        $em    = $this->get('doctrine.orm.entity_manager');

        $dql   = "SELECT a FROM EncuestasBundle:Encuesta a WHERE a.tipoEncuesta <> :tipoEncuesta AND 
        a.tipoEncuesta <> :tipoEncuesta2 AND a.tipoEncuesta <> :tipoEncuesta3 AND a.tipoEncuesta <> :tipoEncuesta4 AND
        a.tipoEncuesta <> :tipoEncuesta5 ORDER BY a.nombreEncuesta ASC";
        $query = $em->createQuery($dql)->setParameter('tipoEncuesta', 'alcalde')->setParameter('tipoEncuesta2', 'comando')
        ->setParameter('tipoEncuesta3', 'circuito')->setParameter('tipoEncuesta4', 'estatal')
        ->setParameter('tipoEncuesta5', 'voto-lista');

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*page number*/,5/*limit per page*/);

        // parameters to template
        return $this->render('EncuestasBundle:Encuestas:csv.html.twig', array('pagination' => $pagination,'buscar' => ""));

    }
}
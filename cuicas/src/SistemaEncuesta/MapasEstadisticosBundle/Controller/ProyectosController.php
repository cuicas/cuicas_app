<?php

namespace SistemaEncuesta\MapasEstadisticosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
//hago el llamado a todas las entidades de la base de datos

use SistemaEncuesta\ProyectosBundle\Entity\NombreCampos;
use SistemaEncuesta\ProyectosBundle\Entity\Municipio;
use SistemaEncuesta\ProyectosBundle\Entity\Parroquia;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
///
use Symfony\Component\HttpFoundation\Request;

class ProyectosController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MapasEstadisticosBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function cargarProyectosAction($id_proyecto)
    {
        
        $em = $this->getDoctrine()->getManager();
        $proyecto = $em->find('ProyectosBundle:ProyectoGubernamental', $id_proyecto);
        //$datosProyecto = $em->find('ProyectosBundle:DatosProyecto', $id_proyecto);
        $datosProyecto = $em->getRepository('ProyectosBundle:DatosProyecto')->findBy(array('proyectoGubernamental' => $id_proyecto));
        $nombreCampos = $em->getRepository('ProyectosBundle:NombreCampos')->findBy(array('proyectoGubernamental' => $id_proyecto));

        //debo acomodarlos para que sea mas elegante la programción CARLOS AZUAJE
        //recupero de la tabla NombreCampos los nombres de los campos asociado al proyecto seleccionado
        //verifico si cada uno d los campo tiene asignado algún nombre y se lo asigno al arreglo $nombres
        if($nombreCampos[0]->getNombreCampo1() != ''){

           $nombres[]= $nombreCampos[0]->getNombreCampo1();
        }
        if($nombreCampos[0]->getNombreCampo2() != ''){

           $nombres[]= $nombreCampos[0]->getNombreCampo2();
        }
        if($nombreCampos[0]->getNombreCampo3() != ''){

           $nombres[]= $nombreCampos[0]->getNombreCampo3();           
        }
        if($nombreCampos[0]->getNombreCampo4() != ''){

           $nombres[]= $nombreCampos[0]->getNombreCampo4();
        }
        if($nombreCampos[0]->getNombreCampo5() != ''){

           $nombres[]= $nombreCampos[0]->getNombreCampo5();
        }
        if($nombreCampos[0]->getNombreCampo6() != ''){

           $nombres[]= $nombreCampos[0]->getNombreCampo6();           
        }
        if($nombreCampos[0]->getNombreCampo7() != ''){

           $nombres[]= $nombreCampos[0]->getNombreCampo7();           
        }

        //si encuentran por lo menos un nombre asociado al proyecto crea 3 variables de sesión para mantener en la sesión activa
        //los datos de los nombres de los campos, los datos asociado al proyecto y tambíén el proyecto seleccionado
        if(count($nombres)>0){

            $this->getRequest()->getSession()->set('nombresDeCampos', $nombres);
            $this->getRequest()->getSession()->set('proyecto', $proyecto);
            $this->getRequest()->getSession()->set('datosProyecto', $datosProyecto);
        }

        $campos= array('','','','','','','');
        $i = 0;
        //debo acomodarlos para que sea mas elegante la programción CARLOS AZUAJE
        //recupero de la tabla DatosProyecto todos los datos que han sido asignado al proyecto seleccionado
        //recorro la variable $datosProyecto para sumar el contenido asociado a cada uno de los campos
        foreach ($datosProyecto as $key => $value) {

            if(null !== $datosProyecto[$key]->getCampo1()) {
                $campos[0] = (integer)$campos[0] + (integer)$datosProyecto[$key]->getCampo1();
            }
            if(null !== $datosProyecto[$key]->getCampo2()){
                $campos[1] = (integer)$campos[1] + (integer)$datosProyecto[$key]->getCampo2();
            }
            if(null !== $datosProyecto[$key]->getCampo3()){
                $campos[2] = (integer)$campos[2] + (integer)$datosProyecto[$key]->getCampo3();
            }            
            if(null !== $datosProyecto[$key]->getCampo4()){
                $campos[3] = (integer)$campos[3] + (integer)$datosProyecto[$key]->getCampo4();
            }
            if(null !== $datosProyecto[$key]->getCampo5()){
                $campos[4] = (integer)$campos[4] + (integer)$datosProyecto[$key]->getCampo5();
            }
            if(null !== $datosProyecto[$key]->getCampo6()){
                $campos[5] = (integer)$campos[5] + (integer)$datosProyecto[$key]->getCampo6();
            }
            if(null !== $datosProyecto[$key]->getCampo7()){
                $campos[6] = (integer)$campos[6] + (integer)$datosProyecto[$key]->getCampo7();
            }
            $i++;
        }

        return $this->render('MapasEstadisticosBundle:Default:mapa.html.twig', array('datosProyecto' => $campos,
            'proyecto' => $proyecto,'nombreCampos' => $nombres));
    }


    public function cargarProyectosVentanaAction($id_encuesta)
    {
        $em = $this->getDoctrine()->getManager();
        $encuesta = $em->find('EncuestasBundle:Encuesta', $id_encuesta);
        $this->getRequest()->getSession()->set('encuesta',$encuesta);
        $mun1 = array();
        $mun2 = array();
        $mun3 = array();
        $mun4 = array();
        $mun5 = array();
        $munEje1 = $em->getRepository('EncuestasBundle:Municipio')->findBy(array('eje'=>1,));
        $munEje2 = $em->getRepository('EncuestasBundle:Municipio')->findBy(array('eje'=>2,));
        $munEje3 = $em->getRepository('EncuestasBundle:Municipio')->findBy(array('eje'=>3,));
        $munEje4 = $em->getRepository('EncuestasBundle:Municipio')->findBy(array('eje'=>4,));
        $munEje5 = $em->getRepository('EncuestasBundle:Municipio')->findBy(array('eje'=>5,));
        $candidatos = '';
        $plantilla = '';
        foreach ($munEje1 as $key => $value) {
            //echo '<br> -- '.$value;
            $mun1[]= $value->getId();
        }
        foreach ($munEje2 as $key => $value) {
            //echo '<br> -- '.$value;
            $mun2[]= $value->getId();
        }
        foreach ($munEje3 as $key => $value) {
            //echo '<br> -- '.$value;
            $mun3[]= $value->getId();
        }
        foreach ($munEje4 as $key => $value) {
            //echo '<br> -- '.$value;
            $mun4[]= $value->getId();
        }
        foreach ($munEje5 as $key => $value) {
            //echo '<br> -- '.$value;
            $mun5[]= $value->getId();
        }

        $colores=array();
        if($encuesta->getTipoEncuesta() != "general" and $encuesta->getTipoEncuesta() != "circuito" ){
            $candidatos = $encuesta->getCandidatos();
            $this->getRequest()->getSession()->set('candidatos',$candidatos);
            $plantilla = 'MapasEstadisticosBundle:Default:mapaVentana.html.twig';

            //el for sirve para hacer dinamica la construcción de ldiccionario de colores que se le va a pasar al twig, de 1 a 6 porque son del eje 1 al 5
            for($o = 1 ;$o<6;$o++){
                //inicializo los colores de todos los ejes a verde, esto es por si acaso en algún eje todavia no existan datos
                $colores[$o] = array("eje"=>$o, "color"=>"verde");            
                $votosPsuv = 0;
                $votosMud = 0;
                $votosOtros = 0;
                //busco los cvCandidatos de cada eje correspondiente a la encuesta seleccionada
                $candidatosEje = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_eje'=>$o,'id_encuesta'=>$encuesta->getId(),));

                $this->getRequest()->getSession()->set('votosEje',$candidatosEje);
                //recorro todos los CvCandidatos y verifico a ke partido pertenece el candidato asociado al CvCandidatos y así
                //voy sumando los votos de los candidato en ese eje de cada partido politico
                foreach ($candidatosEje as $key1 => $value1){
                    if($value1->getCandidato()->getPartido() == "psuv" or $value1->getCandidato()->getPartido() == "psuv-gpp"){
                        $votosPsuv = $value1->getVotos() + $votosPsuv;
                    }
                    if($value1->getCandidato()->getPartido() == "mud"){
                        $votosMud = $value1->getVotos() + $votosMud;
                    }
                    if($value1->getCandidato()->getPartido() == "otros"){
                        $votosOtros = $value1->getVotos() + $votosOtros;
                    }
                }
                //despues que tengo los votos de cada partido politico para un eje, verifico que partido politico tiene mas votos
                //y de esa manera construyo un diccionario de datos con el eje y el color para pasarlo al twig
                if($votosPsuv > $votosMud and $votosPsuv >$votosOtros ){
                    //echo '<br> rojo'.$o;
                    $colores[$o] = array("eje"=>$o, "color"=>"rojo"); 
                }

                if($votosMud > $votosPsuv and $votosMud >$votosOtros ){
                    //echo '<br> azul'.$o;
                    $colores[$o] = array("eje"=>$o, "color"=>"azul"); 
                }

                if($votosOtros > $votosMud and $votosOtros >$votosPsuv ){
                    //echo '<br> amarillo'.$o;
                    $colores[$o] = array("eje"=>$o, "color"=>"amarillo"); 
                }
            }

        }
       
       return $this->render($plantilla, array('candidatos' => $candidatos,'encuesta'=>$encuesta,'munEje1'=>$mun1,'munEje2'=>$mun2,
                'munEje3'=>$mun3,'munEje4'=>$mun4,'munEje5'=>$mun5,'colores'=>$colores));
    }

}

<?php

namespace SistemaEncuesta\MapasEstadisticosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  public function indexAction($name)
  {
      return $this->render('MapasEstadisticosBundle:Default:index.html.twig', array('name' => $name));
  }
  
  public function mapaAction()
  {
      return $this->render('MapasEstadisticosBundle:Default:mapa.html.twig');
  }

  public function mapa2VentanaAction($id_eje)
  {

    $em = $this->getDoctrine()->getManager();
    //$encuesta = $this->getRequest()->getSession()->get('encuesta');

    $this->getRequest()->getSession()->set('id_eje',$id_eje);
    $encuesta = $em->find('EncuestasBundle:Encuesta', $this->getRequest()->getSession()->get('encuesta'));
    $candidatos = $encuesta->getCandidatos();
    //$candidatos = $this->getRequest()->getSession()->get('candidatos');
    $votosEje = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_eje'=>$id_eje,'id_encuesta'=>$encuesta->getId(),));
    $this->getRequest()->getSession()->set('votosEje',$votosEje);
    //$votosEje = $this->getRequest()->getSession()->get('votosEje');
    $munEje = $em->getRepository('EncuestasBundle:Municipio')->findBy(array('eje'=>$id_eje,));



    return $this->render('MapasEstadisticosBundle:Default:mapa2Ventana.html.twig', array('id_eje' => $id_eje,'encuesta' => $encuesta,
          'votosEje' => $votosEje,'munEje' => $munEje));
    /*
      $nombresDeCampos = $this->getRequest()->getSession()->get('nombresDeCampos');
      $proyecto = $this->getRequest()->getSession()->get('proyecto');
      $datosProyecto = $this->getRequest()->getSession()->get('datosProyecto');

      $campos= array('','','','','','','');
      $i = 0;
      //debo acomodarlos para que sea mas elegante la programción CARLOS AZUAJE
      foreach ($datosProyecto as $key => $value) {
          if($datosProyecto[$key]->getIdEje() == $id_eje){
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
          }
            $i++;
        }
      return $this->render('MapasEstadisticosBundle:Default:mapa2.html.twig', array('id_eje' => $id_eje,'datosProyecto' => $campos,
            'proyecto' => $proyecto,'nombreCampos' => $nombresDeCampos));
    */
  }

    
  public function mapaCircuito2Action($id_circuito)
  {
    /*
      $em = $this->getDoctrine()->getManager();
      $encuesta = $em->find('EncuestasBundle:Encuesta', $this->getRequest()->getSession()->get('encuesta'));
      $candidatos = '';
      $plantilla = ''; 
      $munEje = $em->getRepository('EncuestasBundle:Municipio')->findBy(array('eje'=>$id_eje,));
      $votosEje = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_eje'=>$id_eje,'id_encuesta'=>$encuesta->getId(),));
      //echo '<br> '.$id_eje.count($votosEje).$encuesta->getId();
      $t=0;
      /*foreach ($votosEje as $key => $value) {
        echo '<br> '. $t = $t + $value->getVotos();
        # code...
      }*/
    /*
      $candidatosEje = $em->getRepository('EncuestasBundle:Candidatos')->findBy(array('encuesta'=>$encuesta,));



      return $this->render('MapasEstadisticosBundle:Default:mapa2Ventana.html.twig', array('encuesta' => $encuesta,'votosEje'=>$votosEje,'id_eje'=>$id_eje));
    */

    $em = $this->getDoctrine()->getManager();
    //$encuesta = $this->getRequest()->getSession()->get('encuesta');

    $this->getRequest()->getSession()->set('id_circuito',$id_circuito);
    $encuesta = $em->find('EncuestasBundle:Encuesta', $this->getRequest()->getSession()->get('encuesta'));
    $candidatos = $encuesta->getCandidatos();
    //$candidatos = $this->getRequest()->getSession()->get('candidatos');
    $votosCircuito = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_circuito'=>$id_circuito,'id_encuesta'=>$encuesta->getId(),));
    $this->getRequest()->getSession()->set('votosCircuito',$votosCircuito);
    //$votosEje = $this->getRequest()->getSession()->get('votosEje');
    $munCircuito = $em->getRepository('EncuestasBundle:Municipio')->findBy(array('circuito'=>$id_circuito,));

    return $this->render('MapasEstadisticosBundle:Default:mapaCircuito2.html.twig', array('id_circuito' => $id_circuito,'encuesta' => $encuesta,
          'votosCircuito' => $votosCircuito,'munCircuito' => $munCircuito));
  }

  public function detalle_municipioVentanaAction($id_municipio)
  {
    $em = $this->getDoctrine()->getManager();
    $id_eje = $this->getRequest()->getSession()->get('id_eje');
    $encuesta = $em->find('EncuestasBundle:Encuesta', $this->getRequest()->getSession()->get('encuesta'));
    //echo 'enc '.$encuesta->getTipoEncuesta();
    $candidatos = $encuesta->getCandidatos();
    //$candidatos = $this->getRequest()->getSession()->get('candidatos');
    $votosEje = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_municipio'=>$id_municipio,'id_encuesta'=>$encuesta->getId(),));
    //$votosEje = $this->getRequest()->getSession()->get('votosEje');
    $parroquiasEje = $em->getRepository('EncuestasBundle:Parroquia')->findBy(array('municipio'=>$id_municipio,));

    return $this->render('MapasEstadisticosBundle:Default:detalle_municipioVentana.html.twig', array('id_eje' => $id_eje,'encuesta' => $encuesta,
          'votosEje' => $votosEje,'parroquiasEje' => $parroquiasEje,'id_municipio' => $id_municipio));
  }

  public function detalle_parroquiaVentanaAction($id_parroquia)
  {

    $em = $this->getDoctrine()->getManager();
    $id_eje = $this->getRequest()->getSession()->get('id_eje');
    $encuesta = $em->find('EncuestasBundle:Encuesta', $this->getRequest()->getSession()->get('encuesta'));
    $parroquia = $em->find('EncuestasBundle:Parroquia', $id_parroquia);
    $candidatos = $encuesta->getCandidatos();
    $totalVotos1 = $totalVotos2 = $totalVotos3 = 0;

    foreach ($candidatos as $candidato) {
      foreach ($candidato->getCvCandidatos() as $cvCandidatos) {
        if($cvCandidatos->getIdParroquia() ==  $id_parroquia){
          if($candidato->getPartido() == "psuv" or $candidato->getPartido() == "psuv-gpp"){
            $totalVotos1 = $cvCandidatos->getVotos();
          }
          if($candidato->getPartido() == "mud"){
            $totalVotos2 = $cvCandidatos->getVotos();
          }
          if($candidato->getPartido() == "otros"){
            $totalVotos3 = $cvCandidatos->getVotos();
          }
        }
      }
    }
    
    $colorParroquia = "verde";
    if ($totalVotos1 > $totalVotos2 and $totalVotos1 > $totalVotos3){
      $colorParroquia = "rojo";
    }
    if ($totalVotos2 > $totalVotos1 and $totalVotos2 > $totalVotos3){
      $colorParroquia = "azul";
    }
    
    if ($totalVotos3 > $totalVotos1 and $totalVotos3 > $totalVotos2) {
      $colorParroquia = "amarillo";
    }

    return $this->render('MapasEstadisticosBundle:Default:detalle_parroquiaVentana.html.twig', array('id_parroquia' => $id_parroquia,
      'encuesta' => $encuesta,'parroquia' => $parroquia,'colorParroquia' => $colorParroquia,));
  }

  public function detalle_municipioAction($id_municipio)
  {

    return $this->render('MapasEstadisticosBundle:Default:detalle_municipio.html.twig', array('id_municipio' => $id_municipio));
  }

  public function cartografiaVentanaAction($id_parroquia)
  {

    return $this->render('MapasEstadisticosBundle:Default:cartografiaVentana.html.twig', array('id_parroquia' => $id_parroquia));
  }

  public function mapaCircuitoAction($id_encuesta)
  {
    $em = $this->getDoctrine()->getManager();
    $encuesta = $em->find('EncuestasBundle:Encuesta', $id_encuesta);

    $candidatos = '';
    $plantilla = '';
    /*if($encuesta->getTipoEncuesta()== "general"){
        $candidatos = $encuesta->getCandidatos();
        $plantilla = 'MapasEstadisticosBundle:Default:mapaVentana.html.twig';
    } 
    */
    if($encuesta->getTipoEncuesta()== "circuito" or $encuesta->getTipoEncuesta()== "voto-lista"){
        $candidatos = $encuesta->getCandidatos();
        $plantilla = 'MapasEstadisticosBundle:Default:mapaCircuito.html.twig';

        for($o = 1 ;$o<5;$o++){
            //inicializo los colores de todos los ejes a verde, esto es por si acaso en algún eje todavia no existan datos
            $colores[$o] = array("eje"=>$o, "color"=>"verde");            
            $votosPsuv = 0;
            $votosMud = 0;
            $votosOtros = 0;
            //busco los cvCandidatos de cada eje correspondiente a la encuesta seleccionada
            $candidatosEje = $em->getRepository('EncuestasBundle:CvCandidatos')->findBy(array('id_circuito'=>$o,'id_encuesta'=>$encuesta->getId(),));
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
    if(isset($encuesta)){
      $this->getRequest()->getSession()->set('encuesta',$encuesta);
    }
    return $this->render($plantilla, array('candidatos' => $candidatos,'encuesta'=>$encuesta,'colores'=>$colores));

    //return $this->render('MapasEstadisticosBundle:Default:mapaCircuito.html.twig');
  }
}
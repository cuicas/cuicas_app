<?php

namespace SistemaEncuesta\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use SistemaEncuesta\UsuarioBundle\Entity\Usuario;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
// esto lo utilizo para instanciar el formulario de la carpeta frontend
use SistemaEncuesta\UsuarioBundle\Form\Frontend\UsuariosType;
use SistemaEncuesta\UsuarioBundle\Form\Frontend\ModificarUsuariosType;
use SistemaEncuesta\UsuarioBundle\Form\Frontend\VerPerfilType;
///
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;	

class DefaultController extends Controller
{
    public function indexAction()
    {
        
		$this->get('session')->getFlashBag()->add('info', 'Bienvenido a Sistemas Encuesta' );			
		$usuario = $this->getUser();
        return $this->render('UsuarioBundle:Default:index.html.twig', array('name' => $usuario->getRol()));
    }

    public function pruebaAction()
    {
    	
    	return $this->render('UsuarioBundle:Default:index.html.twig', array('name' => '$usuario1123'));
    }

    public function verAction($rol)
    {

		return $this->render('UsuarioBundle:Default:ver.html.twig', array('rol' => $rol));
    }


	public function registroAction(Request $request)
	{
		
		$peticion = $this->getRequest();
		$em = $this->getDoctrine()->getManager();
		$usuario = new Usuario();
		$formulario = $this->createForm(new UsuariosType(), $usuario);
		$formulario->handleRequest($peticion);
		//$errores = $this->get('validator')->validate($usuario);

		if ($formulario->isValid()) {
            $nombreUsuario = $formulario->getData()->getNombres();
            $usuario->setNombres(ucwords($nombreUsuario));
            $apellidoUsuario = $formulario->getData()->getApellidos();
            $usuario->setApellidos(ucwords($apellidoUsuario));
		// Validar los datos enviados y guardarlos en la base de datos
			$usuario->setSalt(md5(time()));
			$rol = $formulario->getData()->getRoles();
			//nuevo método de codificar password............ quitar en caso tal
			$encoder = $this->get('security.encoder_factory')->getEncoder($usuario);
			$password = $encoder->encodePassword($formulario->getData()->getPassword(),$usuario->getSalt());
			$usuario->setPassword($password);			
			//echo $rol[0];
			//echo $formulario->getData();
			$usuario->setRoles($rol[0][0]);
			
			//$errores = $this->get('validator')->validate($usuario);
			
			/*echo 'pp'.$errores;
			if (count($errores) > 0) {
				$errorsString = (string) $errores;

        return new Response($errorsString);

	      foreach($errores as $error){
	      	$unError = (string) $error->getMessage();
	      	echo $unError;
	      	exit;
	      	$this->get('session')->getFlashBag()->add('info', $unError );

	      }
	    }*/
			$em->persist($usuario);
      $em->flush();   ///Aqui me sale el error
      /*
			$validator = $this->get('validator');
    	$errores = $validator->validate($usuario);
    	//$errores;
    	foreach($errores as $error){
	      	$unError = (string) $error->getMessage();
	      	echo 'pp',$unError;
	      	exit;
	      	$this->get('session')->getFlashBag()->add('info', $unError );

	      }
			*/
			//try {

       // return $this->redirect($this->generateUrl('ejecucionproducto_show', array('id' => $entity->getId())));
      // }
    	//catch (\Doctrine\DBAL\DBALException $e){
    	//	echo 'pp$errores';
      //  $this->get('session')->getFlashBag()->add('errordelete', "No se puede ingresar, clave compuesta Duplicada.");
       // return $this->redirect($this->getRequest()->getRequestUri());
                    
     	//}



			//$em->flush();

		$this->get('session')->getFlashBag()->add('info', 'El Usuario ha sido registrado exitosamente' );			
			return $this->redirect($this->generateUrl('usuario_totales'));
		}

		return $this->render('UsuarioBundle:Usuario:registro.html.twig', array('formulario' => $formulario->createView()) );
		
	}

	public function totalUsuariosAction()
	{
		
        $em    = $this->get('doctrine.orm.entity_manager');

        $dql   = "SELECT a FROM UsuarioBundle:Usuario a ORDER BY a.nombres ASC";

        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*page number*/,5/*limit per page*/);

		return $this->render('UsuarioBundle:Default:usuarios.html.twig', array('pagination' => $pagination,'buscar' => ""));
	}

	 public function buscarNombreAction()
    {
        $em = $this->getDoctrine()->getManager();
        $peticion = $this->getRequest();
        //almaceno en la variable $form todos los datos del formulario
        $form = $peticion->request->get('form');

        //se crea el formulario con un único elemente que es un campo de texto con nombre "nombreProyecto"
        $formu = $this->createFormBuilder();            
        $formu->add('nombres','text', array('label' => 'Nombre del Usuario','attr'  => array('class'  => 'validate[required] form-line')));
        $formulario = $formu->getForm();

        //verifico sí existe algo escrito en el campo de texto "nombredeEncuesta" ó sí hizo click en el paginador
        if(isset($form['nombres']) || $peticion->query->get('page')>0){
            if($form['nombres'] != "" ){
                
                $em    = $this->get('doctrine.orm.entity_manager');
                $dql   = "SELECT a FROM UsuarioBundle:Usuario a WHERE a.nombres LIKE :name";
                $query = $em->createQuery($dql)->setParameter('name', '%'.$form['nombres'].'%');
                //creo la variable de sesión que contenga el nombre escrito
                $this->getRequest()->getSession()->set('nombres', $form['nombres']);
            }
            else{
                // de lo contrario, es decir, si hace click en el paginador entonces realiza la búsqueda
                $em    = $this->get('doctrine.orm.entity_manager');
                $dql   = "SELECT a FROM UsuarioBundle:Usuario a WHERE a.nombres LIKE :name";
                $query = $em->createQuery($dql)->setParameter('name', '%'. $this->getRequest()->getSession()->get('nombres').'%');
            }
            //se configura el paginador
            $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*numero de pagina*/,1/*limite por pagina*/);    
            // parametros para la plantilla
            return $this->render('UsuarioBundle:Default:resumenUsuarios.html.twig', array('pagination' => $pagination,'buscar' => "nombre",
                                'nombres' => $this->getRequest()->getSession()->get('nombres')));
        }
        
        //$this->get('session')->getFlashBag()->add('info', 'Proyecto eliminado correctamente' );       
        
        return $this->render('UsuarioBundle:Default:buscarNombreUsuarios.html.twig', array('formulario' => $formulario->createView(),
            'pagination' => "nada"));
    }

    public function resumenAction()
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM UsuarioBundle:Usuario a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, $this->get('request')->query->get('page', 1)/*page number*/,5/*limit per page*/);

        // parameters to template
        return $this->render('UsuarioBundle:Default:resumenUsuarios.html.twig', array('pagination' => $pagination,'buscar' => ""));
        
    }

    public function eliminarAction($usuario_id)
    {
        $em = $this->getDoctrine()->getManager();
		$usuario1 = $em->getRepository('UsuarioBundle:Usuario')->findOneById($usuario_id);
		$em->remove($usuario1);
		$em->flush();

		$this->get('session')->getFlashBag()->add('info', 'Usuario eliminado correctamente' );			
		return $this->redirect($this->generateUrl('usuario_totales'));
    }

    public function verPerfilAction()
	{
		$peticion = $this->getRequest();
                $verusuario = $this->get('security.context')->getToken()->getUser();
                $formulario = $this->createForm(new VerPerfilType(), $verusuario);
                $formulario->handleRequest($peticion);
                return $this->render('UsuarioBundle:Usuario:verPerfil.html.twig', array('usuario'=> $verusuario,
                    'formulario' => $formulario->createView()
                ));		
	}

     public function perfilAction()
    {
		$peticion = $this->getRequest();
        $usuario = $this->get('security.context')->getToken()->getUser();
        $formulario = $this->createForm(new ModificarUsuariosType(), $usuario);
        $formulario->handleRequest($peticion);
            
            if ($formulario->isValid()) {
               
                $usuario->setSalt(md5(time()));
         
				$encoder = $this->get('security.encoder_factory')->getEncoder($usuario);
				$password = $encoder->encodePassword( $formulario->getData()->getPassword(),$usuario->getSalt());
				$usuario->setPassword($password);
                
                //metodo para guardar en la base de datos
				$em = $this->getDoctrine()->getManager();
				$em->persist($usuario);
				$em->flush();

                $this->get('session')->getFlashBag()->add('info','Los datos de tu perfil se han actualizado correctamente');
                return $this->redirect($this->generateUrl('usuario_totales'));

            }

        return $this->render('UsuarioBundle:Usuario:perfil.html.twig', array('usuario'=> $usuario,'formulario' => $formulario->createView()));	
                
	}

public function buscarCedulaAction()
  {
    $em = $this->getDoctrine()->getManager();
    $peticion = $this->getRequest();
    $datos = array();
    $arrayToJs = array();

		$validateError= "La cédula ya ha sido registrada";
		$validateSuccess= "Si";
		$idCampo = $peticion->query->get('fieldId');
		$cedula = $peticion->query->get('fieldValue');
		$usuario = $em->getRepository('UsuarioBundle:Usuario')->findOneBy(array('cedula' => $cedula,));
		//echo $usuario;
		//$request = $this->container->get('request');
		//echo '<br>ape',$routeName = $peticion->get('_route');
		//$name = $this->getActionName();
		//echo '<br>ap'.$name = $peticion->attributes->get('_controller');
		//$params = explode('::',$request->attributes->get('_controller'));

    if(isset($usuario)){
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

  public function buscarEmailAction()
  {
    $em = $this->getDoctrine()->getManager();
    $peticion = $this->getRequest();
    $datos = array();
    $arrayToJs = array();

		$validateError= "El correo electrónico ya se encuestra registrado";
		$validateSuccess= "ggg";
		$idCampo = $peticion->query->get('fieldId');
		$email = $peticion->query->get('fieldValue');
		$usuario = $em->getRepository('UsuarioBundle:Usuario')->findOneBy(array('email' => $email,));
		//echo $usuario;
		//$request = $this->container->get('request');
		//echo '<br>ape',$routeName = $peticion->get('_route');
		//$name = $this->getActionName();
		//echo '<br>ap'.$name = $peticion->attributes->get('_controller');
		//$params = explode('::',$request->attributes->get('_controller'));

    if(isset($usuario)){
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

}


<?php

namespace SistemaEncuesta\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//entidad (tabla) en base de datos USUARIO
use SistemaEncuesta\UsuarioBundle\Entity\Usuario;
use Symfony\Component\Security\Core\SecurityContext;
// esto lo utilizo para instanciar el formulario de la carpeta frontend
use SistemaEncuesta\UsuarioBundle\Form\Frontend\LoginType;


class LoginController extends Controller
{
    public function indexAction($name)
    {
        
        $usuario_id = 1;
		$em = $this->getDoctrine()->getManager();
		$usuario1 = $em->getRepository('UsuarioBundle:Usuario')->find(1);
        return $this->render('UsuarioBundle:Default:index.html.twig', array('name' => $usuario1));
    }

    public function loginAction(Request $request)
    {
        
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $contexto = $this->get('security.context');
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        //$error = $peticion->attributes->get( SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR) );
        $formulario = $this->createForm(new LoginType());
        $formulario->handleRequest($peticion);
        //print_r($formulario->getData());
        //echo 'll '.$peticion->query->get('_username');
        //echo 'll'.$peticion->getMethod();


        if($sesion->get(SecurityContext::AUTHENTICATION_ERROR)){

            $this->get('session')->getFlashBag()->add('info', 'Correo electrónico o contraseña inválidos' );         
        }
        return $this->render('UsuarioBundle:Login:login.html.twig', array('formulario' => $formulario->createView(),
            'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),'error' => $error) );
    }

    public function cajaLoginAction()
    {
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $error = $peticion->attributes->get( SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR) );
        return $this->render('UsuarioBundle:Login:cajaLogin.html.twig', array(
        'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
        'error' => $error
        ));
    }
}

<?php

#/ src/Cupon/UsuarioBundle/Listener/LoginListener.php

namespace SistemaEncuesta\UsuarioBundle\Listener;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Security\Core\SecurityContext;


class LoginListener
{
	private $rol = null;

	public function __construct(Router $router)
	{
		$this->router = $router;
	}

	public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
	{
		$token = $event->getAuthenticationToken();
		$this->rol = $token->getUser()->getRoles();
	}
	public function onKernelResponse(FilterResponseEvent $event)
	{
		
		if (null != $this->rol) {
			$usuario_ver = $this->router->generate('usuario_ver', array(
			'rol' => $this->rol
			));
			$event->setResponse(new RedirectResponse($usuario_ver));
		}
	}

}
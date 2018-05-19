<?php

namespace SistemaEncuesta\EncuestasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EncuestasBundle:Default:index.html.twig');
    }
 
}

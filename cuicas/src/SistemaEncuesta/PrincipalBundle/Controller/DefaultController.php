<?php

namespace SistemaEncuesta\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ps\PdfBundle\Annotation\Pdf;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SistemaEncuestaPrincipalBundle:Default:index.html.twig');
    }
    public function mensajeAction()
    {
        return $this->render('SistemaEncuestaPrincipalBundle:Default:mensaje.html.twig');
    }
    public function contactoAction()
    {
        $request = $this->getrequest();
        if ($request->getmethod() == "POST") {
            $subject = $request->get("subject");
            $email = $request->get("email");
            $message = $request->get("message");

            $mailer = $this->container->get('mailer');
            $transport = \Swift_SmtpTransport::newInstance('smtp.mailguardiandelalba.pdvsa.com', 587, 'ssl' )
                        ->setUsername('')
                        ->setPassword('');
            $mailer = \Swift_Mailer::newInstance($transport);            
            $message = \Swift_Message::newInstance('Test')
                        ->setSubject($subject)
                        ->setFrom('token.sisgem@guardiandelalba.pdvsa.com')
                        ->setTo($email)
                        ->setBody($message);
            $this->get('mailer')->send($message);
            $this->get('session')->getFlashBag()->add('info', 'Mensaje enviado correctamente' ); 
            
            } 
        return $this->render('SistemaEncuestaPrincipalBundle:Default:contacto.html.twig');
    }
    public function formulario1Action()
    {
        return $this->render('SistemaEncuestaPrincipalBundle:Default:formulario1.html.twig');
    }

    public function pdfResumenAction()
    {
        $em = $this->getDoctrine()->getManager();
        $encuesta = $em->getRepository('EncuestasBundle:Encuesta')->findAll();

        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('SistemaEncuestaPrincipalBundle:Default:resumenEncuestas.pdf.twig', array('encuesta' => $encuesta,), $response);
        $xml = $response->getContent();
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
    }
}

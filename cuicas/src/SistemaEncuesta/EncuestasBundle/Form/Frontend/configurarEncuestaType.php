<?php
namespace SistemaEncuestas\UsuarioBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
//FormBuilderInterface constructor de formularios
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
// assert, es el manejador de validaciones o restricciones ke debe tener cada campo en BD
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Request;

class ConfigurarEncuestaType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
	  //$this->getRequest()->getSession()->get('cantidad');
	  for($xx= 1 ; $xx<4; $xx++){
	  	$nombre = 'pregunta'.$xx;
	  	$builder->add($nombre,'text', array('max_length' => 15 ));

	  }
	  $builder->add('crearPreguntas','submit');
	  
  	}

  	/*
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
	  $resolver->setDefaults(array( 'data_class' => 'SistemaMapas\UsuarioBundle\Entity\Usuario' ));
	}
	*/

	public function getName()
	{
	  //return 'sistemamapas_usuariobundle_logintype';
		return 'sistemaencuesta_usuariobundle_encuestatype';
	}
}
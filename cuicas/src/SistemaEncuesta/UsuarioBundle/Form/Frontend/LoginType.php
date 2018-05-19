<?php
namespace SistemaEncuesta\UsuarioBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
//FormBuilderInterface constructor de formularios
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
// assert, es el manejador de validaciones o restricciones ke debe tener cada campo en BD
use Symfony\Component\Validator\Constraints as Assert;

class LoginType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
	  $builder
	  ->add('_username','email', array(
	  	'required' => false,
	  	'attr' => array('class' => 'validate[required] inputlogin')))
	  ->add('_password','password', array(
	  	'required' => false,
	  	'attr' => array('class' => 'validate[required] inputlogin')));
  	}
	
	/*
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
	  $resolver->setDefaults(array( 'data_class' => 'SistemaEncuesta\UsuarioBundle\Entity\Usuario' ));
	}
	*/

	public function getName()
	{
	  //return 'sistemaEncuesta_usuariobundle_logintype';
		return "";
	}
}
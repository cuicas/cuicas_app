<?php
namespace SistemaEncuesta\EncuestasBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
//FormBuilderInterface constructor de formularios
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
// assert, es el manejador de validaciones o restricciones ke debe tener cada campo en BD
use Symfony\Component\Validator\Constraints as Assert;

class PreguntasType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
      $builder
	  ->add('pregunta1','text', array('read_only' => true,
	  									  'label'  => 'Pregunta Nro 1', ))
	  ->add('pregunta2','text', array('read_only' => true,
	  									  'label'  => 'Pregunta Nro 2', ))
	  ->add('pregunta3','textarea', array('max_length' => 200,
	  									  'label'  => 'Pregunta Nro 3', 
	  									   'attr'  => array('class'  => 'validate[required]'),
	  									   'required' => false,) )
	  ->add('pregunta4','textarea', array('max_length' => 200,
	  									  'label'  => 'Pregunta Nro 4',
	  									  'attr'  => array('class'  => 'validate[required]'),
	  									  'required' => false,))
      ->add('pregunta5','textarea', array('max_length' => 200,
      									  'label'  => 'Pregunta Nro 5',
      									  'attr'  => array('class'  => 'validate[required]'),
	  									  'required' => false, ))
      ->add('pregunta6','textarea', array('max_length' => 200,
      									  'label'  => 'Pregunta Nro 6', ))
      ->add('pregunta7','textarea', array('max_length' => 200,
      									  'label'  => 'Pregunta Nro 7', ))
      ->add('pregunta8','textarea', array('max_length' => 200,
      									  'label'  => 'Pregunta Nro 8', ))
      ->add('pregunta9','textarea', array('max_length' => 200,
      	 								  'label'  => 'Pregunta Nro 9', ))
      ->add('pregunta10','textarea', array('max_length' => 200,
      									   'label'  => 'Pregunta Nro 10', ));
  	}
	
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
	  $resolver->setDefaults(array( 'data_class' => 'SistemaEncuesta\EncuestasBundle\Entity\Preguntas' ));
	}
	

	public function getName()
	{
		return 'preguntastype';
	}

}
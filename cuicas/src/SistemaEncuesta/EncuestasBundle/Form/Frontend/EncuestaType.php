<?php
namespace SistemaEncuesta\EncuestasBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
//FormBuilderInterface constructor de formularios
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
// assert, es el manejador de validaciones o restricciones ke debe tener cada campo en BD
use Symfony\Component\Validator\Constraints as Assert;
use SistemaEncuesta\UsuarioBundle\Form\DataTransformer\StringToArrayTransformer;

class EncuestaType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
	  
	  //esto se realiza para convertir de array a string la seleccion, ya que roles debe recibir un
		$transformer = new StringToArrayTransformer();

		$builder
		  ->add('nombreEncuesta','text', array(
		  		'max_length' => 60,
		  		'label'  => 'Nombre de la Encuesta',
		  		'label_attr'  => array('id'  => 'nombre_encuesta'), 
		  		'required' => false,
		  		'attr'  => array('class'  => 'validate[required,custom[aealcance][onlyLetterAccentSp], ajax[ajaxNombreCall], input-sm')))
		  ->add('descripcion','text', array(
		  		'label'  => 'Descripción',
		  		'label_attr'  => array('id'  => 'descripcion'),
		  		'required' => false,
		  		'attr'  => array('class'  => 'validate[required],custom[aesubcategoria], input-sm ')))
		  ->add('fechaInicio', 'text',array(
		  	    'label'  => 'Fecha de Inicio',
                'required' => false,
                'attr' => array(
                'class' => 'validate[required,custom[date]] datepicker',
                'placeholder' => 'Pulse clic para mostrar calendario' )))
		  ->add('fechaFin','text',array(
		  	    'label'  => 'Fecha Fin',
		  	    'label_attr'  => array('id'  => 'fecha_fin'), 
                'required' => false,
                'attr' => array(
                'class' => 'validate[required,custom[date]] datepicker1',
                'placeholder' => 'Pulse clic para mostrar calendario' )))

		  /*->add('definitiva', 'choice', array(
		  			'label' => '¿La encuesta es definitiva?',
				    'choices'  => array('true' => 'Si', 'false' => 'No'),
				    'required' => true,
				    'expanded' => true,
            ))*/
		  ->add($builder->create('tipoEncuesta','choice', array(              
				'label' => 'Tipo de Encuesta',
				'label_attr'  => array('id' => 'tipo_encuesta'),
        'mapped' => true,
        'expanded' => false,
        'multiple' => false,
        'preferred_choices' => array('0'),
        'empty_value' => 'Seleccionar',
        'attr'  => array('class'  => 'validate[requiredSelect], input-sm'),
    		'choices' => array(
    			'general' => 'Socio-Política',
					'comando' => 'Comando de campaña', 
					'fase1' => 'Sufragio - 1era Fase', 
					'fase2' => 'Sufragio - 2da Fase', 
					'alcalde' => 'Sufragio - Por Municipio', 
					'circuito' => 'Sufragio - Por Circuito', 
					'estatal' => 'Sufragio - Por Estado'),
				'required'    => false,)
			  )->addModelTransformer($transformer));
	}

	  public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
	  $resolver->setDefaults(array( 'data_class' => 'SistemaEncuesta\EncuestasBundle\Entity\Encuesta' ));
	}
	

	public function getName()
	{
	 
		return 'SistemaEncuesta_EncuestasBundle_encuestatype';
	}
}
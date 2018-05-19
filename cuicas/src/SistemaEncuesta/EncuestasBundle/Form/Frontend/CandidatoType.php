<?php
namespace SistemaEncuesta\EncuestasBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
//FormBuilderInterface constructor de formularios
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
// assert, es el manejador de validaciones o restricciones ke debe tener cada campo en BD
use Symfony\Component\Validator\Constraints as Assert;
use SistemaEncuesta\UsuarioBundle\Form\DataTransformer\StringToArrayTransformer;

class CandidatoType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
	  
	  //esto se realiza para convertir de array a string la seleccion, ya que roles debe recibir un
		$transformer = new StringToArrayTransformer();

		$builder
		  	->add('apellidoNombre','text', array('max_length' => 70,
		  		'label'  => 'Apellido(s) y Nombre(s)',
		  		'attr'  => array('class'  => 'validate[required,custom[aealcance]] ajax[ajaxNombreCandidatoCall]')))
		  	//->add('partido','text', array('label'  => 'Partido que representa',) )validate[requiredSelect]
		  
		  	->add($builder->create('partido','choice', array(                
				//'label' => 'Seleccionar el rol (TOMA EL LABEL DE REGITRO.HTML.TWIG)',
                'label' => 'Partido',
                'mapped' => true,
                'expanded' => false,
                'multiple' => false,
                'attr'  => array('class'  => 'validate[requiredSelect] form-control input-sm'),
                'empty_value' => "Seleccionar",
	    		'choices' => array(
	    			'psuv' => 'PSUV', 
	    			'psuv-gpp' => 'PSUV-GPP', 
	    			'mud' => 'MUD', 
	    			'otros' => 'Otros'))
				  )->addModelTransformer($transformer))
		  	->add('foto','file', array( 
		  		'label' => 'Fotografía',
		  		'label_attr'  => array('id'  => 'label_foto'), 
		  		'required' => true));
	}

	  public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
	  $resolver->setDefaults(array( 'data_class' => 'SistemaEncuesta\EncuestasBundle\Entity\Candidatos' ));
	}
	

	public function getName()
	{
	 
		return 'SistemaEncuesta_candidatotype';
	}
}
<?php
namespace SistemaEncuesta\UsuarioBundle\Form\Frontend;

use Symfony\Component\Form\AbstractType;
//FormBuilderInterface constructor de formularios
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
// assert, es el manejador de validaciones o restricciones ke debe tener cada campo en BD
use Symfony\Component\Validator\Constraints as Assert;
//para poder incorporar en el formulario botones de verificacion, opcion o listas
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceListInterface;
//////////////////////////////////////////////////////////////////////////////////

use SistemaEncuesta\UsuarioBundle\Form\DataTransformer\StringToArrayTransformer;


class UsuariosType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{	
		//esto se realiza para convertir de array a string la seleccion, ya que roles debe recibir un
		$transformer = new StringToArrayTransformer();
		
		$builder
		->add('nombres','text', array(
	  		'max_length' => 60,
	  		'label'  => 'Nombre (s)',
	  		'label_attr'  => array('id'  => 'nombre_usu'),
	  		'required' => false,
		    'attr'  => array('class'  => 'validate[required,custom[onlyLetterSp],maxSize[60]]')))
		->add('cedula','text', array(
	  		'max_length' => 10,
	  		'label'  => 'Cédula',
	  		'label_attr'  => array('id'  => 'cedula_usu'),
	  		'required' => false,
	  		'attr' => array('class' => 'validate[required,custom[cedula],maxSize[10],ajax[ajaxUserCall]]'),))
		->add('apellidos','text', array(
	  		'max_length' => 60,
	  		'label'  => 'Apellido (s)',
	  		'label_attr'  => array('id'  => 'apellido_usu'),
	  		'required' => false,
		    'attr'  => array('class'  => 'validate[required,custom[onlyLetterSp],maxSize[60]]')))
		->add('email','email', array(
	  		'max_length' => 60,
	  		'label'  => 'Correo Electrónico',
	  		'label_attr'  => array('id'  => 'correo_usu'),
	  		'required' => false,
	  		'attr' => array('class' => 'validate[required,custom[email],ajax[ajaxEmailCall]]'),))
		->add('prioridad','checkbox', array('required' => false))
		->add($builder->create('roles','choice', array(                
				'label' => 'Seleccionar Rol',
                'mapped' => true,
                'expanded' => false,
                'multiple' => false,
                'preferred_choices' => array('0'),
                'empty_value' => 'Seleccionar',
                'required' => false,
                'attr' => array('class' => 'validate[requiredSelect]'),
                'choices' => array('0' => '', 'ROLE_USUARIO' => 'Usuario', 'ROLE_ADMIN' => 'Administrador','ROLE_SUPERVISOR' => 'Supervisor'))
			  )->addModelTransformer($transformer))
		//->add('permiteEmail','checkbox', array('required' => false))
		//->add('salt','text', array('required' => false))
		->add('password', 'repeated', array(
	  			'max_length' => 24,
			    'type' => 'password',
			    'invalid_message' => false,
			    'required' => false,
			    'first_options'  => array(
			    	'label' => 'Contraseña',
			    	'label_attr'=> array('control-label'),
			    	'attr' => array('class' => 'validate[required,minSize[6]],maxSize[24]]'),),
			    'second_options' => array('label' => 'Confirmar Contraseña',
			    	'attr' => array('class' => 'validate[required,minSize[6]],maxSize[24]] equals[sistemaEncuesta_usuariobundle_usuariostype_password_first]'),),
			));
  	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
	  $resolver->setDefaults(array( 'data_class' => 'SistemaEncuesta\UsuarioBundle\Entity\Usuario' ));
	}

	public function getName()
	{
	  return 'sistemaEncuesta_usuariobundle_usuariostype';
	}
}

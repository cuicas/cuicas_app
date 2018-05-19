<?php
//se creo una copia de UsuarioType para poder usar un nuevo formulario que permita Modificar el perfil del usuario
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


class VerPerfilType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{	
		//esto se realiza para convertir de array a string la seleccion, ya que roles debe recibir un
		$transformer = new StringToArrayTransformer();
		
		$builder
		->add('nombres', 'text', array('read_only' => true,
			'label'=>"Nombre(s)"))
		->add('cedula', 'text', array('read_only' => true,
			'label'=>"Cédula"))
		->add('apellidos', 'text', array('read_only' => true,
			'label'=>"Apellido(s)"))
		->add('email', 'email', array('read_only' => true,
			'label'=>"Correo Electrónico"));
		
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

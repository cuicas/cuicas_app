<?php

namespace SistemaEncuesta\UsuarioBundle\Entity;

// SE UTILIZA PARA que una entidad se convierta en proveedor de usuarios del sistema completo
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */

class Usuario implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=40)
     * @Assert\NotBlank(message = "Por favor, escribe tu nombre")
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=40)
     * @Assert\NotBlank(message = "Por favor, escribe tu apellido(s)")
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=12)
     * @Assert\NotBlank()
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=40)
     * @Assert\NotBlank(message = "La contraseña debe ser de por lo menos 6 caracteres")
     * @Assert\Length(min = 5)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="permite_email", type="boolean")
     */
    private $permiteEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="datetime")
     */
    private $fechaAlta;


    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $roles;


    /**
     * @var boolean
     *
     * @ORM\Column(name="prioridad", type="boolean")
     */
    private $prioridad;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get prioridad
     *
     * @return boolean 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set prioridad
     *
     * @param string $prioridad
     * @return Usuario
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Usuario
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return Usuario
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set permiteEmail
     *
     * @param boolean $permiteEmail
     * @return Usuario
     */
    public function setPermiteEmail($permiteEmail)
    {
        $this->permiteEmail = $permiteEmail;

        return $this;
    }

    /**
     * Get permiteEmail
     *
     * @return boolean 
     */
    public function getPermiteEmail()
    {
        return $this->permiteEmail;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return Usuario
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set roles
     *
     * @param string $roles
     * @return Usuario
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->roles;
    }    

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return array($this->roles);
    }

    
    public function __construct()
    {
        $this->fecha_alta = new \DateTime();
    }

    
    public function __toString()
    {
        return $this->getNombres().' '.$this->getApellidos();
    }

    /*
    Implementar la interfaz UserInterface requiere definir cinco métodos en la entidad:

    • eraseCredentials(), se invoca cuando la aplicación necesita borrar la información más
    sensible del usuario, como por ejemplo su contraseña. En la mayoría de aplicaciones, puedes
    dejar este método vacío sin problemas.
    • getPassword(), se invoca cada vez que la aplicación necesita obtener la contraseña del
    usuario.
    • getRoles(), cuando se autentica a un usuario, se invoca este método para obtener un array
    con todos los roles que posee.
    • getSalt(), devuelve el valor que se utilizó para aleatorizar la contraseña cuando se creó el
    usuario. Se invoca siempre que la aplicación necesita comprobar la contraseña del usuario.
    • getUsername(), se invoca para obtener el login o nombre de usuario que se utiliza para
    autenticar a los usuarios. De esta forma es muy se
    */

    function eraseCredentials()
    {
    }

    function getUsername()
    {
        return $this->getEmail();
    }
}
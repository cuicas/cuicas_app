<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComandoCamp
 *
 * @ORM\Table(name="comando_camp", indexes={@ORM\Index(name="IDX_919DA288142AA619", columns={"id_cargo_comando"}), @ORM\Index(name="IDX_919DA288E28084D4", columns={"id_encuesta"})})
 * @ORM\Entity
 */
class ComandoCamp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comando_camp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="comando_camp_id_comando_camp_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=10, nullable=false)
     */
    private $area;

    /**
     * @var integer
     *
     * @ORM\Column(name="identificador", type="integer", nullable=false)
     */
    private $identificador;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=15, nullable=false)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos_nombres", type="string", length=100, nullable=false)
     */
    private $apellidosNombres;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_1", type="string", length=15, nullable=false)
     */
    private $telefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=200, nullable=false)
     */
    private $correo;

    /**
     * @var \CargoComando
     *
     * @ORM\ManyToOne(targetEntity="CargoComando", inversedBy="comandoCamp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cargo_comando", referencedColumnName="id_cargo_comando")
     * })
     */
    private $cargoComando;


    /**
     * Get idComandoCamp
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set area
     *
     * @param string $area
     * @return ComandoCamp
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return string 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set identificador
     *
     * @param integer $identificador
     * @return ComandoCamp
     */
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;

        return $this;
    }

    /**
     * Get identificador
     *
     * @return integer 
     */
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return ComandoCamp
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
     * Set apellidosNombres
     *
     * @param string $apellidosNombres
     * @return ComandoCamp
     */
    public function setApellidosNombres($apellidosNombres)
    {
        $this->apellidosNombres = $apellidosNombres;

        return $this;
    }

    /**
     * Get apellidosNombres
     *
     * @return string 
     */
    public function getApellidosNombres()
    {
        return $this->apellidosNombres;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     * @return ComandoCamp
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string 
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return ComandoCamp
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set CargoComando
     *
     * @param SistemaEncuesta\EncuestasBundle\Entity\CargoComando $cargoComando
     * @return ComandoCamp
     */
    public function setCargoComando(\SistemaEncuesta\EncuestasBundle\Entity\CargoComando $cargoComando = null)
    {
        $this->cargoComando = $cargoComando;

        return $this;
    }

    /**
     * Get CargoComando
     *
     * @return SistemaEncuesta\EncuestasBundle\Entity\CargoComando 
     */
    public function getCargoComando()
    {
        return $this->cargoComando;
    }

    public function __toString()
    {
        return (string)$this->apellidosNombres;
    }
}

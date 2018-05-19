<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * Incidencias
 *
 * @ORM\Table(name="incidencias")
 * @ORM\Entity
 */
class Incidencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_incidencias", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cv", type="integer")
     */
    private $cv;

     /**
     * @var string
     *
     * @ORM\Column(name="tipo_incidencia", type="string", length=30)
     */
    private $tipoIncidencia;
 
    /** 
    * @ORM\OneToOne(targetEntity="Encuesta", inversedBy="incidencia")
    * @ORM\JoinColumn(name="id_encuesta", referencedColumnName="id_encuesta")
    */
    protected $encuesta;

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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Incidencias
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set cv
     *
     * @param string $cv
     * @return Incidencias
     */
    public function setCentroVotacion($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return string 
     */
    public function getCentroVotacion()
    {
        return $this->cv;
    }

    /**
     * Set tipoIncidencia
     *
     * @param string $tipoIncidencia
     * @return Incidencias
     */
    public function setTipoIncidencia($tipoIncidencia)
    {
        $this->tipoIncidencia = $tipoIncidencia;

        return $this;
    }

    /**
     * Get tipoIncidencia
     *
     * @return string 
     */
    public function getTipoIncidencia()
    {
        return $this->tipoIncidencia;
    }


    /**
     * Get Encuesta
     *
     * @return object 
     */
    public function setEncuesta(\SistemaEncuesta\EncuestasBundle\Entity\Encuesta $encuestas)
    {
        $this->encuesta = $encuestas;
        return $this;
    }

    /**
     * Get Encuesta
     *
     * @return object 
     */
    public function getEncuesta()
    {
        return $this->encuesta;
    }

    public function __toString()
    {
        return (string)$this->getId();
    }
}
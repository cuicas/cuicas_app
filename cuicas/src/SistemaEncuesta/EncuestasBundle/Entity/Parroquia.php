<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * Parroquia
 *
 * @ORM\Table(name="parroquia")
 * @ORM\Entity
 */
class Parroquia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_parroquia", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_parroquia", type="string", length=60)
     */
    private $nombreParroquia;

    /**
     * @var integer
     *
     * @ORM\Column(name="padron_parroquia", type="integer")
     */
    private $padronParroquia;

    /** 
    * @ORM\ManyToOne(targetEntity="SistemaEncuesta\EncuestasBundle\Entity\Municipio", inversedBy="parroquia")
    * @ORM\JoinColumn(name="id_municipio", referencedColumnName="id_municipio")
    */
    protected $municipio;

    /**
     * @ORM\OneToMany(targetEntity="SistemaEncuesta\EncuestasBundle\Entity\CentroVotacion", mappedBy="parroquia", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="id_cv", referencedColumnName="id_cv")
     **/
    protected $centroVotacion;




    public function __construct() {
        $this->centroVotacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nombreParroquia
     *
     * @param string $nombreParroquia
     * @return Parroquia
     */
    public function setNombreParroquia($nombreParroquia)
    {
        $this->nombreParroquia = $nombreParroquia;

        return $this;
    }

    /**
     * Get nombreParroquia
     *
     * @return string 
     */
    public function getNombreParroquia()
    {
        return $this->nombreParroquia;
    }

    /**
     * Set padronParroquia
     *
     * @param integer $padronParroquia
     * @return Parroquia
     */
    public function setPadronParroquia($padronParroquia)
    {
        $this->padronParroquia = $padronParroquia;

        return $this;
    }

    /**
     * Get padronParroquia
     *
     * @return integer 
     */
    public function getPadronParroquia()
    {
        return $this->padronParroquia;
    }

    /**
     * Set municipio
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Municipio $municipio
     * @return Municipio
     */
    public function setMunicipio(\SistemaEncuesta\EncuestasBundle\Entity\Municipio $municipio = null)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\Municipio 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }


    /**
     * Get CentroVotacion
     *
     * @return object 
     */
    public function getCentroVotacion()
    {
        return $this->centroVotacion;
    }


    /**
     * Set CentroVotacion
     *
     * @param string $CentroVotacion
     * @return CentroVotacion
     */
    public function setCentroVotacion(\SistemaEncuesta\EncuestasBundle\Entity\CentroVotacion $centroVotacionNuevo)
    {
        $this->centroVotacion[] = $centroVotacionNuevo;
        return $this;
    }


    public function __toString()
    {
        return (string)$this->getId();
    }

}
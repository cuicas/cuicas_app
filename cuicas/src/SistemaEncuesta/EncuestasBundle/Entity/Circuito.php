<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * Circuito
 *
 * @ORM\Table(name="circuito")
 * @ORM\Entity
 */
class Circuito
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_circuito", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_circuito", type="string", length=60)
     */
    private $nombreCircuito;

    /**
     * @var string
     *
     * @ORM\Column(name="padron_circuito", type="string", length=60)
     */
    private $padronCircuito;

    /**
     * @ORM\OneToMany(targetEntity="\SistemaEncuesta\EncuestasBundle\Entity\Municipio", mappedBy="circuito", cascade={"persist","remove"})
     **/
    protected $municipio;

    public function __construct() {
        $this->municipio = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreCircuito
     *
     * @param string $nombreCircuito
     * @return Circuito
     */
    public function setNombreCircuito($nombreCircuito)
    {
        $this->nombreCircuito = $nombreCircuito;

        return $this;
    }

    /**
     * Get nombreCircuito
     *
     * @return string 
     */
    public function getNombreCircuito()
    {
        return $this->nombreCircuito;
    }
    
    /**
     * Set padronCircuito
     *
     * @param string $padronCircuito
     * @return Circuito
     */
    
    public function setPadronCircuito($padronCircuito)
    {
        $this->padronCircuito = $padronCircuito;

        return $this;
    }

    /**
     * Get padronCircuito
     *
     * @return string 
     */
    public function getPadronCircuito()
    {
        return $this->padronCircuito;
    }

    /**
     * Set municipio
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Municipio $municipio
     * @return Municipio
     */
    public function setMunicipio(\SistemaEncuesta\EncuestasBundle\Entity\Municipio $municipio = null)
    {
        $this->municipio[] = $municipio;

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
    
    public function __toString()
    {
        return (string)$this->getId();
    }

}
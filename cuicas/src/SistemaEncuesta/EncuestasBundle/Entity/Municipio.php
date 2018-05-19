<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

// SE UTILIZA PARA que una entidad se convierta en proveedor de usuarios del sistema completo
//use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;
/**
 * Municipio
 *
 * @ORM\Table(name="municipio")
 * @ORM\Entity
 */
class Municipio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_municipio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_municipio", type="string", length=60)
     */
    private $nombreMunicipio;

    /**
     * @var integer
     *
     * @ORM\Column(name="padron_municipio", type="integer")
     */
    private $padronMunicipio;

    /** 
    * @ORM\ManyToOne(targetEntity="SistemaEncuesta\EncuestasBundle\Entity\Eje", inversedBy="municipio")
    * @ORM\JoinColumn(name="id_eje", referencedColumnName="id_eje")
    */
    protected $eje;

     /** 
    * @ORM\ManyToOne(targetEntity="SistemaEncuesta\EncuestasBundle\Entity\Circuito", inversedBy="municipio")
    * @ORM\JoinColumn(name="id_circuito", referencedColumnName="id_circuito")
    */
    protected $circuito;

    /**
     * @ORM\OneToMany(targetEntity="SistemaEncuesta\EncuestasBundle\Entity\Parroquia", mappedBy="municipio")
     **/
    protected $parroquia;



    public function __construct() {
        $this->parroquia = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreMunicipio
     *
     * @param string $nombreMunicipio
     * @return Municipio
     */
    public function setNombreMunicipio($nombreMunicipio)
    {
        $this->nombreMunicipio = $nombreMunicipio;

        return $this;
    }

    /**
     * Get nombreMunicipio
     *
     * @return string 
     */
    public function getNombreMunicipio()
    {
        return $this->nombreMunicipio;
    }

    /**
     * Set padronMunicipio
     *
     * @param integer $padronMunicipio
     * @return Municipio
     */
    public function setPadronMunicipio($padronMunicipio)
    {
        $this->padronMunicipio = $padronMunicipio;

        return $this;
    }

    /**
     * Get padronMunicipio
     *
     * @return integer 
     */
    public function getPadronMunicipio()
    {
        return $this->padronMunicipio;
    }

    public function __toString()
    {
        return $this->getNombreMunicipio();
    }

    /**
     * Set eje
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Eje $eje
     * @return Municipio
     */
    public function setEje(\SistemaEncuesta\EncuestasBundle\Entity\Eje $eje = null)
    {
        $this->eje = $eje;

        return $this;
    }

    /**
     * Get eje
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\Eje 
     */
    public function getEje()
    {
        return $this->eje;
    }

    /**
     * Set circuito
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Circuito $circuito
     * @return Municipio
     */
    public function setCircuito(\SistemaEncuesta\EncuestasBundle\Entity\Circuito $circuito = null)
    {
        $this->circuito = $circuito;

        return $this;
    }

    /**
     * Get circuito
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\Circuito 
     */
    public function getCircuito()
    {
        return $this->circuito;
    }

    /**
     * Set parroquia
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Parroquia $parroquia
     * @return Municipio
     */
    public function setParroquia(\SistemaEncuesta\EncuestasBundle\Entity\Parroquia $parroquia = null)
    {
        $this->parroquia[] = $parroquia;

        return $this;
    }

    /**
     * Get parroquia
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\Parroquia 
     */
    public function getParroquia()
    {
        return $this->parroquia;
    }

}

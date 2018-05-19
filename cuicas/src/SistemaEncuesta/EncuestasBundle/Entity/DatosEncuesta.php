<?php
namespace SistemaEncuesta\EncuestasBundle\Entity;

//use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

use SistemaEncuesta\EncuestasBundle\Entity\Encuesta;

/**
 * DatosEncuesta 
 *
 * @ORM\Table(name="datos_encuesta")
 * @ORM\Entity
 */
class DatosEncuesta 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_datos_encuesta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta_1", type="string", length=200)
     */
    private $pregunta1;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta_2", type="string", length=200)
     */
    private $pregunta2;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta_3", type="string", length=200)
     */
    private $pregunta3;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta_4", type="string", length=200)
     */
    private $pregunta4;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta_5", type="string", length=200)
     */
    private $pregunta5;

    /** 
    * @ORM\OneToOne(targetEntity="Encuesta", inversedBy="Preguntas")
    * @ORM\JoinColumn(name="id_encuesta", referencedColumnName="id_encuesta")
    */
    protected $encuesta;

    /** 
    * @ORM\ManyToOne(targetEntity="SistemaEncuesta\EncuestasBundle\Entity\Parroquia", inversedBy="datosProyecto")
    * @ORM\JoinColumn(name="id_parroquia", referencedColumnName="id_parroquia")    
    * 
    */
    protected $parroquia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_eje", type="integer")
     */
    private $id_eje;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_municipio", type="integer")
     */
    private $id_municipio;


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
     * Set pregunta1
     *
     * @param string $pregunta1
     * @return Preguntas
     */
    public function setPregunta1($pregunta1)
    {
        $this->pregunta1 = $pregunta1;

        return $this;
    }

    /**
     * Get pregunta1
     *
     * @return string 
     */
    public function getPregunta1()
    {
        return $this->pregunta1;
    }
    
    /**
     * Set pregunta2
     *
     * @param string $pregunta1
     * @return Preguntas
     */
    public function setPregunta2($pregunta2)
    {
        $this->pregunta2 = $pregunta2;

        return $this;
    }

    /**
     * Get pregunta2
     *
     * @return string 
     */
    public function getPregunta2()
    {
        return $this->pregunta2;
    }
    
    /**
     * Set pregunta3
     *
     * @param string $pregunta3
     * @return Preguntas
     */
    public function setPregunta3($pregunta3)
    {
        $this->pregunta3 = $pregunta3;

        return $this;
    }

    /**
     * Get pregunta1
     *
     * @return string 
     */
    public function getPregunta3()
    {
        return $this->pregunta3;
    }
    
    /**
     * Set pregunta4
     *
     * @param string $pregunta4
     * @return Preguntas
     */
    public function setPregunta4($pregunta4)
    {
        $this->pregunta4 = $pregunta4;

        return $this;
    }

    /**
     * Get pregunta4
     *
     * @return string 
     */
    public function getPregunta4()
    {
        return $this->pregunta4;
    }

    /**
     * Set pregunta5
     *
     * @param string $pregunta5
     * @return Preguntas
     */
    public function setPregunta5($pregunta5)
    {
        $this->pregunta5 = $pregunta5;

        return $this;
    }

    /**
     * Get pregunta5
     *
     * @return string 
     */
    public function getPregunta5()
    {
        return $this->pregunta5;
    }


    public function setParroquia(\SistemaEncuesta\EncuestasBundle\Entity\Parroquia $parroquiaNueva)
    {
        $this->parroquia = $parroquiaNueva;
        return $this;
    }

    /**
     * Get Parroquia
     *
     * @return object 
     */
    public function getParroquia()
    {
        return $this->parroquia;
    }

    /*
    *@param \SistemaEncuesta\EncuestasBundle\Entity\Municipio $municipioNueva
    */
    //public function setMunicipio(\SistemaEncuesta\EncuestasBundle\Entity\Municipio $municipioNueva)

    public function setMunicipio($municipioNueva)
    {
       // $this->id_municipio = $this->getParroquia()->getMunicipio()->getId();
        $this->id_municipio = $municipioNueva;
        return $this;
    }

    /*
    *@param \SistemaEncuesta\EncuestasBundle\Entity\Eje $ejeNueva
    */
    //public function setEje(\SistemaEncuesta\EncuestasBundle\Entity\Eje $ejeNueva)
    public function setEje($ejeNueva)
    {
        //$this->id_eje = $this->getParroquia()->getMunicipio()->getEje()->getId();
        $this->id_eje = $ejeNueva;
        return $this;
    }

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
        return $this->Encuesta;
    }


    /**
     * Get id_eje
     *
     * @return integer 
     */
    public function getIdEje()
    {
        return $this->id_eje;
    }
    

    /**
     * Get id_municipio
     *
     * @return integer 
     */
    public function getIdMunicipio()
    {
        return $this->id_municipio;
    }
    

    public function __toString()
    {
        return $this->getEncuesta()->getNombreEncuesta();
    }


}

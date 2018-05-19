<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

use SistemaEncuesta\EncuestasBundle\Entity\Encuesta;
/**
 * Preguntas
 *
 * @ORM\Table(name="configurar_encuesta")
 * @ORM\Entity
 */
class Preguntas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_confi_encuesta", type="integer")
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
     * @var string
     *
     * @ORM\Column(name="pregunta_6", type="string", length=200)
     */
    private $pregunta6;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta_7", type="string", length=200)
     */
    private $pregunta7;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta_8", type="string", length=200)
     */
    private $pregunta8;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta_9", type="string", length=200)
     */
    private $pregunta9;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta_10", type="string", length=200)
     */
    private $pregunta10;

    /** 
    * @ORM\OneToOne(targetEntity="Encuesta", inversedBy="preguntas")
    * @ORM\JoinColumn(name="id_encuesta", referencedColumnName="id_encuesta")
    */
    protected $encuesta;

    // ...
    /**
     * @ORM\OneToMany(targetEntity="EncuestaTipoRespuesta", mappedBy="Preguntas", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="id_encuesta_tipo_respuesta", referencedColumnName="id_encuesta_tipo_respuesta")
     **/
    protected $EncuestaTipoRespuesta;


    public function __construct() {
        $this->EncuestaTipoRespuesta = new \Doctrine\Common\Collections\ArrayCollection();
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
        $this->pregunta1; return $this->pregunta1;
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

    /**
     * Set pregunta6
     *
     * @param string $pregunta6
     * @return Preguntas
     */
    public function setPregunta6($pregunta6)
    {
        $this->pregunta6 = $pregunta6;

        return $this;
    }

    /**
     * Get pregunta6
     *
     * @return string 
     */
    public function getPregunta6()
    {
        return $this->pregunta6;
    }


    /**
     * Set pregunta7
     *
     * @param string $pregunta7
     * @return Preguntas
     */
    public function setPregunta7($pregunta7)
    {
        $this->pregunta7 = $pregunta7;

        return $this;
    }

    /**
     * Get pregunta7
     *
     * @return string 
     */
    public function getPregunta7()
    {
        return $this->pregunta7;
    }

    /**
     * Set pregunta8
     *
     * @param string $pregunta8
     * @return Preguntas
     */
    public function setPregunta8($pregunta8)
    {
        $this->pregunta8 = $pregunta8;

        return $this;
    }

    /**
     * Get pregunta8
     *
     * @return string 
     */
    public function getPregunta8()
    {
        return $this->pregunta8;
    }

    /**
     * Set pregunta9
     *
     * @param string $pregunta9
     * @return Preguntas
     */
    public function setPregunta9($pregunta9)
    {
        $this->pregunta9 = $pregunta9;

        return $this;
    }

    
    /**
     * Get pregunta9
     *
     * @return string 
     */
    public function getPregunta9()
    {
        return $this->pregunta9;
    }

    /**
     * Set pregunta10
     *
     * @param string $pregunta10
     * @return Preguntas
     */
    public function setPregunta10($pregunta10)
    {
        $this->pregunta10 = $pregunta10;

        return $this;
    }

    
    /**
     * Get pregunta10
     *
     * @return string 
     */
    public function getPregunta10()
    {
        return $this->pregunta10;
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
        return $this->encuesta;
    }

    /**
     * Get EncuestaTipoRespuesta
     *
     * @return object 
     */
    public function getEncuestaTipoRespuesta()
    {
        return $this->EncuestaTipoRespuesta;
    }

   /**
     * Set EncuestaTipoRespuesta
     *
     * @param string $EncuestaTipoRespuesta
     * @return EncuestaTipoRespuesta
     */
    public function setEncuestaTipoRespuesta(\SistemaEncuesta\EncuestasBundle\Entity\EncuestaTipoRespuesta $EncuestaTipoRespuestaNuevo)
    {
        $this->EncuestaTipoRespuesta[] = $EncuestaTipoRespuestaNuevo;
        return $this;
    }

    public function __toString()
    {
        return (string)$this->getId();
    }
}

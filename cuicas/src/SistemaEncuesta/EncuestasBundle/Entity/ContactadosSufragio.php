<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * ContactadosSufragio
 *
 * @ORM\Table(name="contactados_sufragio")
 * @ORM\Entity
 */
class ContactadosSufragio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contactados_sufragio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_pregunta", type="string", length=60)
     */
    private $numeroPregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_mesa", type="string", length=60)
     */
    private $numeroMesa;

    /**
     * @var string
     *
     * @ORM\Column(name="respuesta", type="string", length=60)
     */
    private $respuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=60)
     */
    private $cedula;   

    /**
     * @var string
     *
     * @ORM\Column(name="equipo", type="string", length=15)
     */
    private $equipo;
   
    /**
     * @var integer
     *
     * @ORM\Column(name="id_eje", type="integer")
     */
    private $id_eje;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_circuito", type="integer")
     */
    private $id_circuito;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_municipio", type="integer")
     */
    private $id_municipio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_parroquia", type="integer")
     */
    private $id_parroquia;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
      *@ORM\ManyToOne(targetEntity="CentroVotacion", inversedBy="contactadosSufragio", cascade={"persist"})        
      *@ORM\JoinColumn(name="id_cv", referencedColumnName="id_cv")
     **/
    protected $centroVotacion;

    /**
      *@ORM\ManyToOne(targetEntity="Encuesta", inversedBy="contactadosSufragio")        
      *@ORM\JoinColumn(name="id_encuesta", referencedColumnName="id_encuesta")
     **/
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
     * Set numeroPregunta
     *
     * @param string $numeroPregunta
     * @return ContactadosSufragio
     */
    public function setNumeroPregunta($numeroPregunta)
    {
        $this->numeroPregunta = $numeroPregunta;

        return $this;
    }

    /**
     * Get numeroPregunta
     *
     * @return string 
     */
    public function getNumeroPregunta()
    {
        return $this->numeroPregunta;
    }

    /**
     * Set numeroMesa
     *
     * @param string $numeroMesa
     * @return ContactadosSufragio
     */
    public function setNumeroMesa($numeroMesa)
    {
        $this->numeroMesa = $numeroMesa;

        return $this;
    }

    /**
     * Get numeroMesa
     *
     * @return string 
     */
    public function getNumeroMesa()
    {
        return $this->numeroMesa;
    }

    /**
     * Set respuesta
     *
     * @param string $respuesta
     * @return ContactadosSufragio
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    /**
     * Get respuesta
     *
     * @return string 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return ContactadosSufragio
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
     * Set Fecha
     *
     * @param date $fecha
     * @return ContactadosSufragio
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }


    /**
     * Get Fecha
     *
     * @return string 
     */
    public function getFecha()
    {
        return $this->fecha;
    } 

    /**
     * Set equipo
     *
     * @param string $equipo
     * @return Contactados
     */
    public function setEquipo($equipo)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo
     *
     * @return string 
     */
    public function getEquipo()
    {
        return $this->equipo;
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
    public function setCentroVotacion(\SistemaEncuesta\EncuestasBundle\Entity\CentroVotacion $CentroVotacionNuevo,$eje,$circuito,$municipio,$parroquia)
    {
        $this->centroVotacion = $CentroVotacionNuevo;
        //echo 'pppp'.$CentroVotacionNuevo->getParroquia()->getNombreParroquia();
        $this->id_circuito = $circuito;
        $this->id_eje = $eje;
        $this->id_municipio = $municipio;
        $this->id_parroquia = $parroquia;
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
        return $this->encuesta;
    }

    public function getRepuestaEncuesta($numPreg,$numMesa)
    {
        if($this->numeroPregunta == $numPreg and $this->numeroMesa == $numMesa){
            return $this->respuesta;
        }

        ///return $resp;
    }

    public function __toString()
    {
        return (string)$this->getId()." ".$this->getEncuesta();
    }

    public function __construct() {
        $this->fecha = new \DateTime('now');
    }
}
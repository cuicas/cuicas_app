<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;
use Doctrine\Common\Collections\ArrayCollection;


use SistemaEncuesta\EncuestasBundle\Entity\Contactados;
use SistemaEncuesta\EncuestasBundle\Entity\ContactadosSufragio;
use SistemaEncuesta\EncuestasBundle\Entity\Candidatos;
use SistemaEncuesta\EncuestasBundle\Entity\Incidencias;


/**
 * Encuesta
 *
 * @ORM\Table(name="encuesta")
 * @ORM\Entity
 */
class Encuesta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_encuesta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_encuesta", type="string", length=255)
     */
    private $nombreEncuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_encuesta", type="string", length=15)
     */
    private $tipoEncuesta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var \Boolean
     *
     * @ORM\Column(name="definitiva", type="boolean", nullable=false)
     */
    private $definitiva;

    /**
     * @var \integer
     *
     * @ORM\Column(name="encuesta_fase2", type="integer", nullable=false)
     */
    private $encuestaFase2;
    
    /**
     * @ORM\OneToOne(targetEntity="Preguntas", mappedBy="encuesta")
     **/
    private $preguntas;

    /**
     * @ORM\OneToMany(targetEntity="Contactados", mappedBy="encuesta", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="id_contactados", referencedColumnName="id_contactados")
     **/
    protected $contactados;

     /**
     * @ORM\OneToMany(targetEntity="ContactadosSufragio", mappedBy="encuesta", cascade={"persist","remove"})
     **/
    protected $contactadosSufragio;

    /**
     * @ORM\OneToMany(targetEntity="Candidatos", mappedBy="encuesta", cascade={"persist","remove"})
     **/
    protected $candidatos;

    /**
     * @ORM\OneToOne(targetEntity="Incidencias", mappedBy="encuesta", cascade={"persist","remove"})
     **/
    private $incidencia;

    /**
     * @ORM\OneToMany(targetEntity="ContactadoComando", mappedBy="encuesta", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="id_contactado_comando", referencedColumnName="id_contactado_comando")
     **/
    protected $contactadoComando;


    public function __construct() {
        $this->contactados = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contactadosSufragio = new \Doctrine\Common\Collections\ArrayCollection();
        $this->candidatos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contactadoComando = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreEncuesta
     *
     * @param string $nombreEncuesta
     * @return Encuesta
     */
    public function setNombreEncuesta($nombreEncuesta)
    {
        $this->nombreEncuesta= $nombreEncuesta;

        return $this;
    }

    /**
     * Get nombreEncuesta
     *
     * @return string 
     */
    public function getNombreEncuesta()
    {
        return $this->nombreEncuesta;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Encuesta
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
     * Set TipoEncuesta
     *
     * @param string $tipoEncuesta
     * @return Encuesta
     */
    public function setTipoEncuesta($tipoEncuesta)
    {
        $this->tipoEncuesta = $tipoEncuesta;

        return $this;
    }

    /**
     * Get tipoEncuesta
     *
     * @return string 
     */
    public function getTipoEncuesta()
    {
        return $this->tipoEncuesta;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Encuesta
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Encuesta
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

     /**
     * Get Encuesta
     *
     * @return object 
     */
    public function getPreguntas()
    {
        return $this->preguntas;
    }

    /**
     * Set definitiva
     *
     * @param boolean $descripcion
     * @return Encuesta
     */
    public function setDefinitiva($definitiva)
    {
        $this->definitiva = $definitiva;

        return $this;
    }

    /**
     * Get definitiva
     *
     * @return boolean 
     */
    public function getDefinitiva()
    {
        return $this->definitiva;
    }

    /**
     * Set encuestaFase2
     *
     * @param integer $encuestaFase2
     * @return Encuesta
     */
    public function setEncuestaFase2($encuestaFase2)
    {
        $this->encuestaFase2 = $encuestaFase2;

        return $this;
    }

    /**
     * Get encuestaFase2
     *
     * @return integer 
     */
    public function getEncuestaFase2()
    {
        return $this->encuestaFase2;
    }

    /**
     * Set contactados
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Contactados $contactados
     * @return Contactados
     */
    public function setContactados(\SistemaEncuesta\EncuestasBundle\Entity\Contactados $contactados = null)
    {
        $this->contactados[] = $contactados;

        return $this;
    }

    /**
     * Get contactados
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\Contactados 
     */
     public function getContactados()
    {
        return $this->contactados;
    }

    /**
     * Set contactadosSufragio
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\ContactadosSufragio $contactadosSufragio
     * @return ContactadosSufragio
     */
    public function setContactadosSufragio(\SistemaEncuesta\EncuestasBundle\Entity\ContactadosSufragio $contactadosSufragio = null)
    {
        $this->contactadosSufragio[] = $contactadosSufragio;

        return $this;
    }

    /**
     * Get contactadosSufragio
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\ContactadosSufragio 
     */
     public function getContactadosSufragio()
    {
        return $this->contactadosSufragio;
    }

    /**
     * Set candidatos
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Candidatos $candidatos
     * @return Candidatos
     */
    public function setCandidatos(\SistemaEncuesta\EncuestasBundle\Entity\Candidatos $candidatos = null)
    {
        $this->candidatos[] = $candidatos;

        return $this;
    }

    /**
     * Get candidatos
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\Candidatos
     */
     public function getCandidatos()
    {
        return $this->candidatos;
    }

    /**
     * Set contactadoComando
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\ContactadoComando $contactadoComando
     * @return contactadoComando
     */
    public function setContactadoComando(\SistemaEncuesta\EncuestasBundle\Entity\ContactadoComando $contactadoComando = null)
    {
        $this->contactadoComando[] = $contactadoComando;

        return $this;
    }

    /**
     * Get contactadoComando
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\ContactadoComando 
     */
     public function getContactadoComando()
    {
        return $this->contactadoComando;
    }

     public function __toString()
    {
        return $this->getNombreEncuesta();
    }

    public function totalContactadosSi($repuesta){
        $total = 0;
        foreach($this->contactados as $contactadoX){            
            if($contactadoX->getResp1() == $repuesta){
                $total++;
            }
        }
        return $total;
    }

    public function totalContactadosSiPregunta($repuesta,$numPregunta){
        $total = 0;
        foreach($this->contactados as $contactadoX){
            $preg = "getResp".$numPregunta;
            if($contactadoX->$preg() == $repuesta and $contactadoX->$preg() != ""){
                $total++;
            }
        }
        return $total;
    }

    public function totalContactadosEmpresaPregunta($repuesta,$numPregunta, $empresa){
        $total = 0;
        foreach($this->contactados as $contactadoX){
            $preg = "getResp".$numPregunta;
            if($contactadoX->$preg() == $repuesta and $contactadoX->$preg() != "" and $empresa == $contactadoX->getEquipo()){


                $total++;
            }
        }
        return $total;
    }

    public function totalContactadosEmpresaPreguntaEstado($repuesta,$numPregunta, $estado_id, $empresa){
        $total = 0;
        foreach($this->contactados as $contactadoX){
            $preg = "getResp".$numPregunta;
            $preg6 = "getResp6";
            if($contactadoX->$preg() == $repuesta and $contactadoX->$preg() != "" and $estado_id == $contactadoX->getResp6()){


                $total++;
            }
        }
        return $total;
    }

    public function totalContactadosSufragioSi($repuesta){
        $total = 0;
        foreach($this->contactadosSufragio as $contactadoX){            
            if($contactadoX->getRespuesta() == $repuesta){
                $total++;
            }
        }
        return $total;
    }

    public function totalContactadosSufragioSiPregunta($repuesta,$numPregunta){
        $total = 0;
        foreach($this->contactadosSufragio as $contactadoX){            
            if($contactadoX->getRespuesta() == $repuesta and $contactadoX->getNumeroPregunta() == $numPregunta){
                $total++;
            }
        }
        return $total;
    }

    public function totalContactadoComandoSi($repuesta){
        $total = 0;
        foreach($this->contactadoComando as $contactadoX){            
            if($contactadoX->getResp1() == $repuesta){
                $total++;
            }
        }
        return $total;
    }

    public function totalContactadoComandoSiPregunta($repuesta,$numPregunta){
        $total = 0;
        foreach($this->contactadoComando as $contactadoX){
            $preg = "getResp".$numPregunta;
            if($contactadoX->$preg() == $repuesta and $contactadoX->$preg() != ""){
                $total++;
            }
        }
        return $total;
    }

    /**
     * Set incidencia
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Incidencias $incidencias
     * @return Incidencias
     */
    public function setIncidencia(\SistemaEncuesta\EncuestasBundle\Entity\Incidencias $incidencias)
    {
        $this->incidencia = $incidencias;

        return $this;
    }

    /**
     * Get incidencia
     *
     * @return string 
     */
    public function getIncidencia()
    {
        return $this->incidencia;
    }

    public function totalContactadosSufragio()
    {
        $total = array();
        //recorro todos los candidatos de esta  si es de fase 3
        if($this->tipoEncuesta == "circuito" or $this->tipoEncuesta == "estatal" or $this->tipoEncuesta == "alcalde" or $this->tipoEncuesta == "voto-lista"){
            foreach ($this->candidatos as $key => $value) {                
                foreach ($value->getCvCandidatos() as $key1 => $value1) {
                    //echo '<br>.. '.$value1->getCentroVotacion(); 
                    $total[] = $value1->getCentroVotacion(); 
                }
            }
        } //de lo contrario cuento todos los contactados sufragio y agrupo por cv
        else{
            foreach ($this->contactadosSufragio as $key => $value) { 
                $total[] = $value->getCentroVotacion()->getId(); 
            }
        }

        $c = array_unique($total);  
        //echo 'en la funcion '. count($c);
        return count($c);

    }

    public function totalContactados($mun,$resp)
    {
        $total = 0;
        //recorro todos los contactados de esta encuesta
        foreach ($this->contactados as $key => $value) {
            if($value->getIdMunicipio() == $mun and $value->getResp1() == $resp){
                $total++;
            }            
        }
        
        return $total;
    }

    public function totalContactadosParroquia($paq,$resp)
    {
        $total = 0;
        //recorro todos los contactados de esta encuesta
        foreach ($this->contactados as $key => $value) {
            if($value->getParroquia()->getId() == $paq and $value->getResp1() == $resp){
                $total++;
            }            
        }
        
        return $total;
    }

    public function totalContactadosCircuito($circuito,$resp)
    {
        $total = 0;
        //recorro todos los contactados de esta encuesta
        foreach ($this->contactados as $key => $value) {
            if($value->getIdCircuito() == $circuito and $value->getResp1() == $resp){
                $total++;
            }            
        }
        
        return (integer)$total;
    }

     public function totalContactadoComando($mun,$resp)
    {
        $total = 0;
        //recorro todos los contactados de esta encuesta
        foreach ($this->contactadoComando as $key => $value) {
            if($value->getIdMunicipio() == $mun and $value->getResp1() == $resp){
                $total++;
            }            
        }
        
        return $total;
    }
}

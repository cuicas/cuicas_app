<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * CvCandidatos
 *
 * @ORM\Table(name="cv_candidatos")
 * @ORM\Entity
 */
class CvCandidatos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cv_candidatos", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


   /**
     * @var integer
     *
     * @ORM\Column(name="votos", type="integer")
     */
    private $votos;


   /**
     * @var integer
     *
     * @ORM\Column(name="votos_lista", type="integer")
     */
    private $votosLista;


    /**
     * @var datetime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;
   
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
     * @var integer
     *
     * @ORM\Column(name="id_encuesta", type="integer")
     */
    private $id_encuesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="nro_mesa", type="integer")
     */
    private $nroMesa;

    /**
     * @ORM\ManyToOne(targetEntity="Candidatos", inversedBy="cvCandidatos", cascade={"persist","remove"})       
     * @ORM\JoinColumn(name="id_candidato", referencedColumnName="id_candidato")
     **/
    protected $candidatos;

    /**
      *@ORM\ManyToOne(targetEntity="CentroVotacion", inversedBy="cvCandidatos")        
      *@ORM\JoinColumn(name="id_cv", referencedColumnName="id_cv")
     **/
    protected $centroVotacion;


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
     * Set votos
     *
     * @param integer $votos
     * @return CvCandidatos
     */
    public function setVotos($votos)
    {
        $this->votos = $votos;

        return $this;
    }

    /**
     * Get votos
     *
     * @return integer 
     */
    public function getVotos()
    {
        return $this->votos;
    }


    /**
     * Set votosLista
     *
     * @param integer $votos
     * @return CvCandidatos
     */
    public function setVotosLista($votosLista)
    {
        $this->votosLista = $votosLista;

        return $this;
    }

    /**
     * Get votosLista
     *
     * @return integer 
     */
    public function getVotosLista()
    {
        return $this->votosLista;
    }

    /**
     * Get nroMesa
     *
     * @return integer 
     */
    public function getNroMesa()
    {
        return $this->nroMesa;
    }

    /**
     * Set nroMesa
     *
     * @param integer $nroMesa
     * @return CvCandidatos
     */
    public function setNroMesa($nroMesa)
    {
        $this->nroMesa = $nroMesa;

        return $this;
    }
    
    /**
     * Set candidatos
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Candidatos $candidatos
     * @return Candidatos
     */
    public function setCandidato(\SistemaEncuesta\EncuestasBundle\Entity\Candidatos $candidato = null)
    {
        $this->candidatos = $candidato;

        return $this;
    }

    /**
     * Get candidatos
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\Candidatos
     */
     public function getCandidato()
    {
        return $this->candidatos;
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
     * Get getCircuito
     *
     * @return integer 
     */
    public function getCircuito()
    {
        return $this->id_circuito;
    }

    /**
     * Get getMunicipio
     *
     * @return integer 
     */
    public function getMunicipio()
    {
        return $this->id_municipio;
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
        $this->id_circuito = $circuito;
        $this->id_eje = $eje;
        $this->id_municipio = $municipio;
        $this->id_parroquia = $parroquia;
        $this->id_encuesta = $this->candidatos->getEncuesta()->getId();
        return $this;
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
     * Get id_parroquia
     *
     * @return integer 
     */
    public function getIdParroquia()
    {
        return $this->id_parroquia;
    }
    /**
     * Get id_parroquia
     *
     * @return integer 
     */
    public function getIdEncuesta()
    {
        return $this->id_encuesta;
    }

    public function __construct() {
        $this->fecha = new \DateTime('now');
        //$this->cvCandidatos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return (string)$this->getId();
    }
}
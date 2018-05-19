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
 * Candidatos
 *
 * @ORM\Table(name="candidatos")
 * @ORM\Entity
 */
class Candidatos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_candidato", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos_nombres", type="string", length=60)
     */
    private $apellidoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="partido", type="string", length=60)
     */
    private $partido;

    /**
     * @var string
     *
     * @ORM\Column(name="cant_votos_total", type="string", length=60)
     */
    private $cantidadVotosTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="cant_votos_total_lista", type="integer", length=60)
     */
    private $cantidadVotosTotalLista;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_eleccion", type="string", length=10)
     */
    private $tipoEleccion;

    /**
     * @var string
     *
     * @ORM\Column(name="identificador", type="string", length=10)
     */
    private $identificador;

    /**
    * @ORM\Column(name="ruta_foto",type="string", length=255)
    */
    protected $rutaFoto;


    /**
    * @Assert\Image(maxSize = "500000k")
    */
    protected $foto;

    /**
     * @ORM\ManyToOne(targetEntity="Encuesta", inversedBy="candidatos")        
     * @ORM\JoinColumn(name="id_encuesta", referencedColumnName="id_encuesta")
     **/
    protected $encuesta;

    /**
     * @ORM\OneToMany(targetEntity="CvCandidatos", mappedBy="candidatos", cascade={"persist","remove"})        
     * @ORM\JoinColumn(name="id_cv_candidatos", referencedColumnName="id_cv_candidatos")
     **/
    protected $cvCandidatos;

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
     * Set apellidoNombre
     *
     * @param string $apellidoNombre
     * @return Candidatos
     */
    public function setApellidoNombre($apellidoNombre)
    {
        $this->apellidoNombre = $apellidoNombre;

        return $this;
    }

    /**
     * Get apellidoNombre
     *
     * @return string 
     */
    public function getApellidoNombre()
    {
        return $this->apellidoNombre;
    }
    
    
    /**
     * Set partido
     *
     * @param string $partido
     * @return Candidatos
     */
    public function setPartido($partido)
    {
        $this->partido = $partido;

        return $this;
    }

    /**
     * Get partido
     *
     * @return string 
     */
    public function getPartido()
    {
        return $this->partido;
    }

    /**
     * Set cantidadVotos
     *
     * @param string $cantidadVotosTotal
     * @return Candidatos
     */
    public function setCantidadVotosTotal($cantidadVotosTotal)
    {
        $this->cantidadVotosTotal = $cantidadVotosTotal;

        return $this;
    }

    /**
     * Get cantidadVotosTotal
     *
     * @return string 
     */
    public function getCantidadVotosTotal()
    {
        return $this->cantidadVotosTotal;
    }

    /**
     * Set cantidadVotosTotalLista
     *
     * @param integer $cantidadVotosTotalLista
     * @return Candidatos
     */
    public function setCantidadVotosTotalLista($cantidadVotosTotalLista)
    {
        $this->cantidadVotosTotalLista = $cantidadVotosTotalLista;

        return $this;
    }

    /**
     * Get cantidadVotosTotalLista
     *
     * @return integer 
     */
    public function getCantidadVotosTotalLista()
    {
        return $this->cantidadVotosTotalLista;
    }

    
    /**
     * Set tipoEleccion
     *
     * @param string $tipoEleccion
     * @return Candidatos
     */
    public function setTipoEleccion($tipoEleccion)
    {
        $this->tipoEleccion = $tipoEleccion;

        return $this;
    }

    /**
     * Get TipoEleccion
     *
     * @return string 
     */
    public function getTipoEleccion()
    {
        return $this->tipoEleccion;
    }

    /**
     * Set rutaFoto
     *
     * @param string $rutaFoto
     * @return Candidatos
     */
    public function setRutaFoto($rutaFoto)
    {
        $this->rutaFoto = $rutaFoto;

        return $this;
    }

    /**
     * Get RutaFoto
     *
     * @return string 
     */
    public function getRutaFoto()
    {
        return $this->rutaFoto;
    }

    /**
     * Set identificador
     *
     * @param string $identificador
     * @return Candidatos
     */
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;

        return $this;
    }

    /**
     * Get identificador
     *
     * @return string 
     */
    public function getIdentificador()
    {
        return $this->identificador;
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
    * @param UploadedFile $foto
    */    
    public function setFoto(UploadedFile $foto = null)
    {
        $this->foto = $foto;
    }

    /**
    * @return UploadedFile
    */
    public function getFoto()
    {
        return $this->foto;
    }

    public function subirFoto($directorioDestino)
    {

        if (null === $this->foto) {
            return;
        }

        $nombreArchivoFoto = uniqid('candidato-').'-foto.jpg';
        $this->foto->move($directorioDestino, $nombreArchivoFoto);
        $this->setRutaFoto($nombreArchivoFoto);
    }

    /**
     * Set encuestas
     *
     * @param string $encuestas
     * @return Candidatos
     */
    public function setEncuesta(\SistemaEncuesta\EncuestasBundle\Entity\Encuesta $encuestas)
    {
        $this->encuesta = $encuestas;
        return $this;
    }

    /**
     * Get encuesta
     *
     * @return object 
     */
    public function getEncuesta()
    {
        return $this->encuesta;
    }


    public function setCvCandidatos(\SistemaEncuesta\EncuestasBundle\Entity\CvCandidatos $cvCandidatos)
    {
        $this->cvCandidatos[] = $cvCandidatos;
        return $this;
    }

    /**
     * Get CvCandidatos
     *
     * @return object 
     */
    public function getCvCandidatos()
    {
        return $this->cvCandidatos;
    }


    public function __toString()
    {
        return (string)$this->getId();
    }

    public function __construct() {

        //$this->fecha = new \DateTime('now');
        $this->cvCandidatos = new \Doctrine\Common\Collections\ArrayCollection();
    }


}
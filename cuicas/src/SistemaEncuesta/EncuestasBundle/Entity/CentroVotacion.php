<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

use SistemaEncuesta\EncuestasBundle\Entity\Parroquia;
use SistemaEncuesta\EncuestasBundle\Entity\ContactadosSufragio;

/**
 * CentroVotacion
 *
 * @ORM\Table(name="centro_votacion")
 * @ORM\Entity
 */
class CentroVotacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cv", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad_mesas", type="string", length=60)
     */
    private $cantidadMesas;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_centro", type="string", length=60)
     */
    private $nombreCentro;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer")
     */
    private $idUsuario;

    /**
      *@ORM\ManyToOne(targetEntity="Parroquia", inversedBy="centroVotacion")        
      *@ORM\JoinColumn(name="id_parroquia", referencedColumnName="id_parroquia")
     **/
    protected $parroquia;

    /**
     * @ORM\OneToMany(targetEntity="ContactadosSufragio", mappedBy="centroVotacion")
     **/
    protected $contactadosSufragio;

    /**
     * @ORM\OneToMany(targetEntity="CvCandidatos", mappedBy="centroVotacion", cascade={"persist","remove"})        
     * @ORM\JoinColumn(name="id_cv_candidatos", referencedColumnName="id_cv_candidatos")
     **/
    protected $cvCandidatos;


    public function __construct() {
        $this->contactadosSufragio = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cvCandidatos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set cantidadMesas
     *
     * @param string $cantidadMesas
     * @return CentroVotacion
     */
    public function setCantidadMesas($cantidadMesas)
    {
        $this->cantidadMesas = $cantidadMesas;

        return $this;
    }

    /**
     * Get cantidadMesas
     *
     * @return string 
     */
    public function getCantidadMesas()
    {
        return $this->cantidadMesas;
    }
    
    /**
     * Set nombreCentro
     *
     * @param string $nombreCentro
     * @return CentroVotacion
     */
    
    public function setNombreCentro($nombreCentro)
    {
        $this->nombreCentro = $nombreCentro;

        return $this;
    }

    /**
     * Get nombreCentro
     *
     * @return string 
     */
    public function getNombreCentro()
    {
        return $this->nombreCentro;
    }

    /**
     * Set parroquia
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Parroquia $parroquia
     * @return Parroquia
     */
    public function setParroquia(\SistemaEncuesta\EncuestasBundle\Entity\Parroquia $parroquia = null)
    {
        $this->parroquia = $parroquia;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
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



    public function getContactadosSufragioEncuesta(\SistemaEncuesta\EncuestasBundle\Entity\Encuesta $encuesta)
    {
        $totalContactados = array();//new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($this->contactadosSufragio as $key => $value) { 
            if( $value->getEncuesta()->getId() == $encuesta->getId()){
                $totalContactados[] =$value;
                //echo '<br>'.$value->getEncuesta()->getId().'-'.$encuesta->getId();
            }
        }
        return $totalContactados;
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

}
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
 * Contactados
 *
 * @ORM\Table(name="contactados")
 * @ORM\Entity
 */
class Contactados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contactados", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=15)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;


    /**
     * @var string
     *
     * @ORM\Column(name="equipo", type="string", length=20)
     */
    private $equipo;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_1", type="string", length=20)
     */
    private $resp1;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_2", type="string", length=20)
     */
    private $resp2;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_3", type="string", length=20)
     */
    private $resp3;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_4", type="string", length=20)
     */
    private $resp4;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_5", type="string", length=20)
     */
    private $resp5;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_6", type="string", length=200)
     */
    private $resp6;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_7", type="string", length=200)
     */
    private $resp7;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_8", type="string", length=200)
     */
    private $resp8;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_9", type="string", length=200)
     */
    private $resp9;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_10", type="string", length=200)
     */
    private $resp10;
   
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
     * @ORM\ManyToOne(targetEntity="Encuesta")
     * @ORM\JoinColumn(name="id_encuesta", referencedColumnName="id_encuesta")
     **/
    protected $encuesta;

     /**
     * @ORM\ManyToOne(targetEntity="Parroquia")
     * @ORM\JoinColumn(name="id_parroquia", referencedColumnName="id_parroquia")
     **/
    protected $parroquia;

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
     * Set cedula
     *
     * @param string $cedula
     * @return Contactados
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
     * Set Fecha
     *
     * @param date $fecha
     * @return Contactados
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
     * Set resp1
     *
     * @param string $resp1
     * @return Contactados
     */
    public function setResp1($resp1)
    {
        $this->resp1 = $resp1;

        return $this;
    }


    /**
     * Get resp1
     *
     * @return string 
     */
    public function getResp1()
    {
        return $this->resp1;
    } 

 
   /**
     * Set resp2
     *
     * @param string $resp2
     * @return Contactados
     */
    public function setResp2($resp2)
    {
        $this->resp2 = $resp2;

        return $this;
    }


    /**
     * Get resp2
     *
     * @return string 
     */
    public function getResp2()
    {
        return $this->resp2;
    } 
 
   /**
     * Set resp3
     *
     * @param string $resp3
     * @return Contactados
     */
    public function setResp3($resp3)
    {
        $this->resp3 = $resp3;

        return $this;
    }


    /**
     * Get resp3
     *
     * @return string 
     */
    public function getResp3()
    {
        return $this->resp3;
    } 
 
   /**
     * Set resp4
     *
     * @param string $resp4
     * @return Contactados
     */
    public function setResp4($resp4)
    {
        $this->resp4 = $resp4;

        return $this;
    }


    /**
     * Get resp4
     *
     * @return string 
     */
    public function getResp4()
    {
        return $this->resp4;
    } 
 
   /**
     * Set resp5
     *
     * @param string $resp5
     * @return Contactados
     */
    public function setResp5($resp5)
    {
        $this->resp5 = $resp5;

        return $this;
    }


    /**
     * Get resp5
     *
     * @return string 
     */
    public function getResp5()
    {
        return $this->resp5;
    } 

    public function setEncuesta(\SistemaEncuesta\EncuestasBundle\Entity\Encuesta $encuestaNueva)
    {
        $this->encuesta = $encuestaNueva;
        return $this;
    }

         /**
     * Set resp6
     *
     * @param string $resp6
     * @return RespuestaEncuesta
     */
    public function setResp6($resp6)
    {
        $this->resp6 = $resp6;

        return $this;
    }

    /**
     * Get resp6
     *
     * @return string 
     */
    public function getResp6()
    {
        return $this->resp6;
    }

     /**
     * Set resp7
     *
     * @param string $resp7
     * @return RespuestaEncuesta
     */
    public function setResp7($resp7)
    {
        $this->resp7 = $resp7;

        return $this;
    }

    /**
     * Get resp7
     *
     * @return string 
     */
    public function getResp7()
    {
        return $this->resp7;
    }

     /**
     * Set resp8
     *
     * @param string $resp8
     * @return RespuestaEncuesta
     */
    public function setResp8($resp8)
    {
        $this->resp8 = $resp8;

        return $this;
    }

    /**
     * Get resp8
     *
     * @return string 
     */
    public function getResp8()
    {
        return $this->resp8;
    }

     /**
     * Set resp9
     *
     * @param string $resp9
     * @return RespuestaEncuesta
     */
    public function setResp9($resp9)
    {
        $this->resp9 = $resp9;

        return $this;
    }

    /**
     * Get resp9
     *
     * @return string 
     */
    public function getResp9()
    {
        return $this->resp9;
    }

    /**
     * Set resp10
     *
     * @param string $resp10
     * @return RespuestaEncuesta
     */
    public function setResp10($resp10)
    {
        $this->resp10 = $resp10;

        return $this;
    }

    /**
     * Get resp10
     *
     * @return string 
     */
    public function getResp10()
    {
        return $this->resp10;
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
     * Set parroquia
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Parroquia $parroquia
     * @return parroquia
     */
    public function setParroquia(\SistemaEncuesta\EncuestasBundle\Entity\Parroquia $parroquia = null)
    {
        $this->parroquia = $parroquia;
        $this->id_circuito = $parroquia->getMunicipio()->getCircuito()->getId();
        $this->id_eje = $parroquia->getMunicipio()->getEje()->getId();
        $this->id_municipio = $parroquia->getMunicipio()->getId();

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

    /**
     * Get id_municipio
     *
     * @return integer 
     */
    public function getIdMunicipio()
    {
        return $this->id_municipio;
    }

    /**
     * Get id_circuito
     *
     * @return integer 
     */
    public function getIdCircuito()
    {
        return $this->id_circuito;
    }

    public function __toString()
    {
        return (string)$this->getId();
    }

    public function __construct() {
        $this->fecha = new \DateTime('now');
    }

}
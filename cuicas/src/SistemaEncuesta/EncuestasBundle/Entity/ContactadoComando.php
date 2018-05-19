<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactadoComando
 *
 * @ORM\Table(name="contactado_comando", indexes={@ORM\Index(name="IDX_B6EEA6C3E28084D4", columns={"id_encuesta"}), @ORM\Index(name="IDX_B6EEA6C3B25CD7FA", columns={"id_comando_camp"})})
 * @ORM\Entity
 */
class ContactadoComando
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contactado_comando", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="contactado_comando_id_contactado_comando_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=15, nullable=false)
     */
    private $cedula;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_1", type="string", length=20, nullable=false)
     */
    private $resp1;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_2", type="string", length=20, nullable=true)
     */
    private $resp2;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_3", type="string", length=20, nullable=true)
     */
    private $resp3;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_4", type="string", length=20, nullable=true)
     */
    private $resp4;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_5", type="string", length=20, nullable=true)
     */
    private $resp5;

    /**
     * @var \Encuesta
     *
     * @ORM\ManyToOne(targetEntity="Encuesta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_encuesta", referencedColumnName="id_encuesta")
     * })
     */
    private $encuesta;

    /**
     * @var \ComandoCamp
     *
     * @ORM\ManyToOne(targetEntity="ComandoCamp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_comando_camp", referencedColumnName="id_comando_camp")
     * })
     */
    private $comandoCamp;



    /**
     * Get idContactadoComando
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
     * @return ContactadoComando
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ContactadoComando
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set resp1
     *
     * @param string $resp1
     * @return ContactadoComando
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
     * @return ContactadoComando
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
     * @return ContactadoComando
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
     * @return ContactadoComando
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
     * @return ContactadoComando
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

    /**
     * Set Encuesta
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Encuesta $encuesta
     * @return ContactadoComando
     */
    public function setEncuesta(\SistemaEncuesta\EncuestasBundle\Entity\Encuesta $encuesta = null)
    {
        $this->encuesta = $encuesta;

        return $this;
    }

    /**
     * Get encuesta
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\Encuesta 
     */
    public function getEncuesta()
    {
        return $this->encuesta;
    }

    /**
     * Set ComandoCamp
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\ComandoCamp $comandoCamp
     * @return ContactadoComando
     */
    public function setComandoCamp(\SistemaEncuesta\EncuestasBundle\Entity\ComandoCamp $comandoCamp = null)
    {
        $this->comandoCamp = $comandoCamp;

        return $this;
    }

    /**
     * Get ComandoCamp
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\ComandoCamp 
     */
    public function getComandoCamp()
    {
        return $this->comandoCamp;
    }

    public function __toString()
    {
        return (string)$this->id;
    }
}

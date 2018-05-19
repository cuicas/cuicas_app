<?php
namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

use SistemaEncuesta\EncuestasBundle\Entity\Contactados;
/**
 * RespuestaEncuesta
 *
 * @ORM\Table(name="repuesta_encuesta")
 * @ORM\Entity
 */
class RespuestaEncuesta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_respuesta_encuesta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="resp_1", type="string", length=200)
     */
    private $resp1;

     /**
     * @var string
     *
     * @ORM\Column(name="resp_2", type="string", length=200)
     */
    private $resp2;

     /**
     * @var string
     *
     * @ORM\Column(name="resp_3", type="string", length=200)
     */
    private $resp3;

     /**
     * @var string
     *
     * @ORM\Column(name="resp_4", type="string", length=200)
     */
    private $resp4;

     /**
     * @var string
     *
     * @ORM\Column(name="resp_5", type="string", length=200)
     */
    private $resp5;

     /** 
    * @ORM\OneToOne(targetEntity="Contactados", inversedBy="respuestaencuesta")
    * @ORM\JoinColumn(name="id_contactados", referencedColumnName="id_contactados") 
    */
    protected $Contactados;

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
     * Set resp1
     *
     * @param string $resp1
     * @return RespuestaEncuesta
     */
    public function setresp1($resp1)
    {
        $this->resp1 = $resp1;

        return $this;
    }

    /**
     * Get resp1
     *
     * @return string 
     */
    public function getresp1()
    {
        return $this->resp1;
    }
    
    /**
     * Set resp2
     *
     * @param string $resp2
     * @return RespuestaEncuesta
     */
    public function setresp2($resp2)
    {
        $this->resp2 = $resp2;

        return $this;
    }

    /**
     * Get resp2
     *
     * @return string 
     */
    public function getresp2()
    {
        return $this->resp2;
    }

    /**
     * Set resp3
     *
     * @param string $resp3
     * @return RespuestaEncuesta
     */
    public function setresp3($resp3)
    {
        $this->resp3 = $resp3;

        return $this;
    }

    /**
     * Get resp3
     *
     * @return string 
     */
    public function getresp3()
    {
        return $this->resp3;
    }

    /**
     * Set resp4
     *
     * @param string $resp4
     * @return RespuestaEncuesta
     */
    public function setresp4($resp4)
    {
        $this->resp4 = $resp4;

        return $this;
    }

    /**
     * Get resp4
     *
     * @return string 
     */
    public function getresp4()
    {
        return $this->resp4;
    }

    /**
     * Set resp5
     *
     * @param string $resp5
     * @return RespuestaEncuesta
     */
    public function setresp5($resp5)
    {
        $this->resp5 = $resp5;

        return $this;
    }

    /**
     * Get resp5
     *
     * @return string 
     */
    public function getresp5()
    {
        return $this->resp5;
    }

    public function setContactados(\SistemaEncuesta\EncuestasBundle\Entity\Contactados $contactados)
    {
        $this->contactados = $contactados;
        return $this;
    }

    /**
     * Get Contactados
     *
     * @return object 
     */
    public function getContatados()
    {
        return $this->contactados;
    }

    public function __toString()
    {
        return (string)$this->getId();
    }
}



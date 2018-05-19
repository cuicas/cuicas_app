<?php
namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

use SistemaEncuesta\EncuestasBundle\Entity\EncuestaTipoRespuesta;
/**
 * TipoRespuesta
 *
 * @ORM\Table(name="tipo_respuesta")
 * @ORM\Entity
 */
class TipoRespuesta
 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_respuesta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="resp", type="string", length=200)
     */
    private $resp;

     /**
     * @ORM\ManyToMany(targetEntity="EncuestaTipoRespuesta", mappedBy="TipoRespuesta")
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
     * Set resp
     *
     * @param string $resp
     * @return Resp
     */
    public function setResp($resp)
    {
        $this->resp = $resp;

        return $this;
    }

    /**
     * Get resp
     *
     * @return string 
     */
    public function getResp()
    {
        return $this->resp;
    }

    
   /**
     * Set encuestatiporespuesta
     *
     * @param string $encuestatiporespuesta
     * @return resp
     */
    public function setEncuestaTipoRespuesta(\SistemaEncuesta\EncuestasBundle\Entity\EncuestaTipoRespuesta $encuestarespuesta)
    {
        $this->EncuestaTipoRespuesta[] = $encuestarespuesta;
        return $this;
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

    public function __toString()
    {
        return (string)$this->getId();
    }
}
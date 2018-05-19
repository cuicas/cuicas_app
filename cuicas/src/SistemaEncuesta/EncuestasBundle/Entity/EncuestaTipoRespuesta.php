<?php
namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

use SistemaEncuesta\EncuestasBundle\Entity\TipoRespuesta;
use SistemaEncuesta\EncuestasBundle\Entity\Encuesta;
use SistemaEncuesta\EncuestasBundle\Entity\Preguntas;

/**
 * EncuestaTipoRespuesta
 *
 * @ORM\Table(name="encuesta_tipo_respuesta")
 * @ORM\Entity
 * @ORM\Table(name="encuesta_tipo_respuesta",uniqueConstraints={@ORM\UniqueConstraint(name="encuesta_encuesta_tipo_respuesta_fk", columns={"id_encuesta", "id_confi_encuesta", "id_encuesta_tipo_respuesta"})})
 */

class EncuestaTipoRespuesta

{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_encuesta_tipo_respuesta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="n_pregunta", type="string", length=200)
     */
    private $npregunta;

     /**
     * @ORM\ManyToMany(targetEntity="TipoRespuesta", inversedBy="EncuestaTipoRespuesta")
     * @ORM\JoinTable(name="respuestas_preguntas", 
     * joinColumns={@ORM\JoinColumn(name="id_encuesta_tipo_respuesta", referencedColumnName="id_encuesta_tipo_respuesta")},
     * inverseJoinColumns={@ORM\JoinColumn(name="id_tipo_respuesta", referencedColumnName="id_tipo_respuesta")})
     **/

    protected $TipoRespuesta;

    /**
      *@ORM\ManyToOne(targetEntity="Preguntas", inversedBy="EncuestaTipoRespuesta")        
      *@ORM\JoinColumn(name="id_confi_encuesta", referencedColumnName="id_confi_encuesta")
     **/
    protected $Preguntas;

    /**
      * @var integer     
      * @ORM\Column(name="id_encuesta", type="integer")
      */
    private $id_encuesta;
  

     public function __construct() {
        $this->TipoRespuesta = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set npregunta
     *
     * @param string $npregunta
     * @return TipoRespuestas
     */
    public function setNpregunta($numerodepregunta)
    {
        $this->npregunta = $numerodepregunta;

        return $this;
    }

    /**
     * Get npregunta
     *
     * @return string 
     */
    public function getNpregunta()
    {
        return $this->npregunta;
    }

    
   /**
     * Set TipoRespuesta
     *
     * @param string $tiporespuesta
     * @return npregunta
     */
    public function setTipoRespuesta(\SistemaEncuesta\EncuestasBundle\Entity\TipoRespuesta $tipoderespuesta)
    {
        $this->TipoRespuesta[] = $tipoderespuesta;
        return $this;
    }

    /**
     * Get TipoRespuesta
     *
     * @return object 
     */
    public function getTipoRespuesta()
    {
        return $this->TipoRespuesta;
    }

    
    public function setPreguntas(\SistemaEncuesta\EncuestasBundle\Entity\Preguntas $preguntaNueva)
    {
        $this->Preguntas= $preguntaNueva;
        return $this;

    }

    /**
     * Get Preguntas
     *
     * @return object 
     */
    public function getPreguntas()
    {
        return $this->Preguntas;
    }

    /*
    *@param \SistemaEncuesta\EncuestasBundle\Entity\Preguntas $encuestaNueva
    */
    public function setIdEncuesta($encuestaNueva)
    {
        $this->id_encuesta = $encuestaNueva->getEncuesta()->getId();
        return $this;
    }


    public function removeTipoRespuesta($tRepuesta)
    {
        $pos = 0;
        foreach($this->TipoRespuesta as $t){
            if($t->getId() == $tRepuesta->getId()){
                unset($this->TipoRespuesta[$pos]);

            }
            $pos++;
        }
    }


    public function varificarRepuesta($repuesta)
    {
        $resp = false;
        foreach($this->TipoRespuesta as $t){
            if($t->getResp() == $repuesta){
                $resp = true;
            }
        }
        return $resp;
    }


    public function __toString()
    {
        return (string)$this->getId().' '.$this->npregunta;
    }
}
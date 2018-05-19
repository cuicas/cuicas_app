<?php
namespace SistemaEncuesta\EncuestasBundle\Entity;

//use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
// ASSERT sirve para añadir restricciones o validaciones
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="eje")
 * @ORM\Entity
 */

class Eje //implements UserInterface

{
	/**
	* @var integer
	*
	* @ORM\Column(name="id_eje", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_eje", type="string", length=100)
     * @Assert\NotBlank(message = "Por favor, escribe tu nombre")
     */
	private $nombre_eje;

    /**
     * @var string
     *
     * @ORM\Column(name="padron_eje", type="string", length=100)
     * @Assert\NotBlank(message = "Por favor, escribe tu nombre")
     */
	private $padron_eje;


    /**
     * @ORM\OneToMany(targetEntity="\SistemaEncuesta\EncuestasBundle\Entity\Municipio", mappedBy="eje", cascade={"persist","remove"})
     **/
    protected $municipio;


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
     * Set nombre_eje
     *
     * @param string $nombreEje
     * @return Eje
     */
    public function setNombreEje($nombreEje)
    {
        $this->nombre_eje = $nombreEje;

        return $this;
    }

    /**
     * Get nombre_eje
     *
     * @return string 
     */
    public function getNombreEje()
    {
        return $this->nombre_eje;
    }

    /**
     * Set padron_eje
     *
     * @param string $padronEje
     * @return Eje
     */
    public function setPadronEje($padronEje)
    {
        $this->padron_eje = $padronEje;

        return $this;
    }

    /**
     * Get padron_eje
     *
     * @return string 
     */
    public function getPadronEje()
    {
        return $this->padron_eje;
    }

    /**
     * Set municipio
     *
     * @param \SistemaEncuesta\EncuestasBundle\Entity\Municipio $municipio
     * @return Municipio
     */
    public function setMunicipio(\SistemaEncuesta\EncuestasBundle\Entity\Municipio $municipio = null)
    {
        $this->municipio[] = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return \SistemaEncuesta\EncuestasBundle\Entity\Municipio 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    public function __toString()
    {
        return $this->getNombreEje();
    }

}
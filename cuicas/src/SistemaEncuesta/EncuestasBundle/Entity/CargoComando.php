<?php

namespace SistemaEncuesta\EncuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CargoComando
 *
 * @ORM\Table(name="cargo_comando")
 * @ORM\Entity
 */
class CargoComando
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cargo_comando", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cargo_comando_id_cargo_comando_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="ComandoCamp", mappedBy="cargoComando")        
     * @ORM\JoinColumn(name="id_comando_camp", referencedColumnName="id_comando_camp")
     **/
    protected $comandoCamp;



    /**
     * Get idCargoComando
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return CargoComando
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function __toString()
    {
        return (string)$this->nombre;
    }
}

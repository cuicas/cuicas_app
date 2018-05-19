<?php

namespace SistemaEncuestaUsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datos
 *
 * @ORM\Table(name="datos", indexes={@ORM\Index(name="IDX_519B21943F09EE2C", columns={"id_proyecto"})})
 * @ORM\Entity
 */
class Datos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_datos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDatos;

    /**
     * @var string
     *
     * @ORM\Column(name="descripccion", type="string", length=100, nullable=false)
     */
    private $descripccion;

    /**
     * @var \Proyecto
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id_proyecto")
     * })
     */
    private $idProyecto;



    /**
     * Set idDatos
     *
     * @param integer $idDatos
     * @return Datos
     */
    public function setIdDatos($idDatos)
    {
        $this->idDatos = $idDatos;

        return $this;
    }

    /**
     * Get idDatos
     *
     * @return integer 
     */
    public function getIdDatos()
    {
        return $this->idDatos;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Datos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set idProyecto
     *
     * @param \SistemaEncuesta\UsuarioBundle\Entity\Proyecto $idProyecto
     * @return Datos
     */
    public function setIdProyecto(\SistemaEncuesta\UsuarioBundle\Entity\Proyecto $idProyecto)
    {
        $this->idProyecto = $idProyecto;

        return $this;
    }

    /**
     * Get idProyecto
     *
     * @return \SistemaEncuesta\UsuarioBundle\Entity\Proyecto 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }
    
    public function __toString()
    {
        return $this->descripccion();
    }
}

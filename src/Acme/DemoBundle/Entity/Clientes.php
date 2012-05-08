<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\HelloBundle\Entity\Clientes
 *
 * @ORM\Table(name="clientes")
 * @ORM\Entity
 */
class Clientes
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="clienteid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string $tlf
     *
     * @ORM\Column(name="tlf", type="string", length=20, nullable=false)
     */
    private $tlf;

    /**
     * @var string $web
     *
     * @ORM\Column(name="web", type="string", length=255, nullable=false)
     */
    private $web;

    /**
     * @var string $image
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var string $dir
     *
     * @ORM\Column(name="dir", type="string", length=255, nullable=false)
     */
    private $dir;



    /**
     * Get clienteid
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
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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

    /**
     * Set tlf
     *
     * @param string $tlf
     */
    public function setTlf($tlf)
    {
        $this->tlf = $tlf;
    }

    /**
     * Get tlf
     *
     * @return string 
     */
    public function getTlf()
    {
        return $this->tlf;
    }

    /**
     * Set web
     *
     * @param string $web
     */
    public function setWeb($web)
    {
        $this->web = $web;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set image
     *
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set dir
     *
     * @param string $dir
     */
    public function setDir($dir)
    {
        $this->dir = $dir;
    }

    /**
     * Get dir
     *
     * @return string 
     */
    public function getDir()
    {
        return $this->dir;
    }
}
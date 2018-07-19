<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="text", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $releaseOn;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getReleaseOn()
    {
        return $this->releaseOn;
    }

    /**
     * @param mixed $releaseOn
     */
    public function setReleaseOn($releaseOn): void
    {
        $this->releaseOn = $releaseOn;
    }

}

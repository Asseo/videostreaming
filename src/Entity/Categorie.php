<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Categorie - Entity
 *
 * @package App\Entity
 */
class Categorie
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string.
     */
    private $name;

    /**
     * @var ArrayCollection
     */
    private $videoCollection = [];

    /**
     * Get id.
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id.
     *
     * @return Categorie
     */
    public function setId()
    {
        $this->id = preg_replace("![^a-z0-9]+!i", "-",$this->name);

        return $this;
    }

    /**
     * Get name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name.
     *
     * @param mixed $name
     *
     * @return Categorie
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * get videoCollection.
     *
     * @return ArrayCollection
     */
    public function getVideoCollection()
    {
        return $this->videoCollection;
    }

    /**
     * Add videoCollection.
     *
     * @param Video $videoCollection
     *
     * @return Categorie
     */
    public function addVideoCollection(Video $videoCollection)
    {
        $this->videoCollection[] = $videoCollection;

        return $this;
    }
}
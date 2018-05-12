<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Actor
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
     * @return Actor
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
     * @return Actor
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
     * @return Actor
     */
    public function addVideoCollection(Video $videoCollection)
    {
        $this->videoCollection[] = $videoCollection;

        return $this;
    }


}
<?php

namespace App\Entity;


class Video
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $nbView;

    /**
     * @var int
     */
    private $nbShare;

    /**
     * @var array
     */
    private $linkCollection = [];

    /**
     * @var array
     */
    private $categorieCollection = [];

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Video
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Video
     */
    public function setId()
    {
        $this->id = preg_replace("![^a-z0-9]+!i", "-",$this->name);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNbView()
    {
        return $this->nbView;
    }

    /**
     * @param mixed $nbView
     * @return Video
     */
    public function setNbView($nbView)
    {
        $this->nbView = $nbView;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNbShare()
    {
        return $this->nbShare;
    }

    /**
     * @param mixed $nbShare
     *
     * @return Video
     */
    public function setNbShare($nbShare)
    {
        $this->nbShare = $nbShare;

        return $this;
    }

    /**
     * @return array
     */
    public function getLinkCollection()
    {
        return $this->linkCollection;
    }

    /**
     * @param $linkCollection
     *
     * @return Video
     */
    public function setLinkCollection($linkCollection)
    {
        $this->linkCollection = $linkCollection;

        return $this;
    }

    /**
     * @return array
     */
    public function getCategorieCollection()
    {
        return $this->categorieCollection;
    }

    /**
     * @param $categorieCollection
     *
     * @return Video
     */
    public function setCategorieCollection($categorieCollection)
    {
        $this->categorieCollection = $categorieCollection;

        return $this;
    }


}
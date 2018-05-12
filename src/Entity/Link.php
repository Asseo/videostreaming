<?php

namespace App\Entity;

class Link
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $namePlayer;

    /**
     * @var string
     */
    private $url;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return Link
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNamePlayer()
    {
        return $this->namePlayer;
    }

    /**
     * @param mixed $namePlayer
     *
     * @return Link
     */
    public function setNamePlayer($namePlayer)
    {
        $this->namePlayer = $namePlayer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return Link
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


}
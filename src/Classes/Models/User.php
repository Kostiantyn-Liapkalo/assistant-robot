<?php

namespace App\Models;

class User 
{
    private $name;
    private $fire;
    private $muve;

    public function __construct($name = null, $fire = null, $muve = null)
    {
        $this->name = $name;
        $this->fire = $fire;
        $this->muve = $muve;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getFire()
    {
        return $this->fire;
    }

    public function setFire($fire)
    {
        return $this->set;
    }

    public function getMuve()
    {
        return $this->muve;
    }

    public function setMuve($muve)
    {
        return $this->set;
    }


}
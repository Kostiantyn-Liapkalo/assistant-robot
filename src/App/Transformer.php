<?php 

namespace App;

class Transformer
{
    private $state;

    public function __construct()
    {
        $this->state = new Car(); 
    }

    public function transform($state)
    {
        $this->state = $state;
    }

    public function fire()
    {
        return $this->state->fire();

    }

    public function muve()
    {
        
        return $this->state->muve();
        
    }
    

}
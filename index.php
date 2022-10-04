<?php

interface TransformerState
{
    public function fire();

    public function muve();


}

class Car implements TransformerState
{
    public function fire()
    {

            return "dratatatata\n";

    }
    public function muve()
    {
      
            return "dyrdyrdyr\n";

    }
}

class Airplane implements TransformerState
{
    public function fire()
    {

            return "puvpuvpuv\n";

    }
    public function muve()
    {
      
            return "gggggggg\n";

    }
}

class Robot implements TransformerState
{
    public function fire()
    {

            return "tratatata\n";

    }
    public function muve()
    {
      
            return "dgdgdgdgdd\n";

    }
}

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

$bumblbee = new Transformer();
echo $bumblbee->fire();
echo $bumblbee->muve();
$robot = new Robot();
$bumblbee->transform($robot);
echo $bumblbee->fire();
echo $bumblbee->muve();




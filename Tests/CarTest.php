<?php

require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\Car;

class CarTest extends TestCase
{
    public function testFire(){
        $audi = new Car();
        $this->assertEquals($audi->fire(), "dratatatata\n");
    }
    public function testMuve(){
        $audi = new Car();
        $this->assertEquals($audi->muve(), "dyrdyrdyr\n");
    }


}
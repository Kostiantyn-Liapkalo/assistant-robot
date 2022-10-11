<?php

require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\Airplane;

class AirplaneTest extends TestCase
{
    public function testFire(){
        $fOne = new Airplane();
        $this->assertEquals($fOne->fire(), "puvpuvpuv\n");
    }
    public function testMuve(){
        $fOne = new Airplane();
        $this->assertEquals($fOne->muve(), "gggggggg\n");
    }
}
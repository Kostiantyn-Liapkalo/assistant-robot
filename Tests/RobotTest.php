<?php

require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\Robot;
class RobotTest extends TestCase
{
    public function testFire(){
        $roboBee = new Robot();
        $this->assertEquals($roboBee->fire(), "tratatata\n");
    }
    public function testMuve(){
        $roboBee = new Robot();
        $this->assertEquals($roboBee->muve(), "dgdgdgdgdd\n");
    }

}

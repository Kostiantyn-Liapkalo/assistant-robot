<?php

require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use App\Transformer;

class TransformerTest extends TestCase
{
    public function testState(){
        $bee = new Transformer();
        $this->assertEquals($bee->fire(), "dratatatata\n");
        $this->assertEquals($bee->muve(), "dyrdyrdyr\n");
    }

}
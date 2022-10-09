<?php

require "vendor/autoload.php";

use App\Transformer;
use App\Airplane;
use App\Car;
use App\Robot;


$bumblbee = new Transformer();
echo $bumblbee->fire();
echo $bumblbee->muve();
$robot = new Robot();
$bumblbee->transform($robot);
echo $bumblbee->fire();
echo $bumblbee->muve();



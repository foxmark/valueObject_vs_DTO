<?php

require_once( __DIR__ . '/vendor/autoload.php');

$calc = new \App\Service\BillableWeightCalculatorService();

var_dump($calc->calculate(9,15,7,5,139));
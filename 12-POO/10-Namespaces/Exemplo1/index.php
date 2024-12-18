<?php

require_once('namespace1.php');
require_once('namespace2.php');

$calculadora = new Matematica\Calculadora();
echo $calculadora->adicionar(10,20) . PHP_EOL;
$calculadora2 = new Trigonometria\Calculadora();
echo $calculadora2->area_quadrado(2) . PHP_EOL;
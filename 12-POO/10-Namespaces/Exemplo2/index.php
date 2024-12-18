<?php

//Usando o 'use' para simplificar a instânciação

require_once('script1.php');

use Estruturas_principais\Loja;
use Estruturas_principais\Armazem;

$loja = new Loja();
$armazem = new Armazem();
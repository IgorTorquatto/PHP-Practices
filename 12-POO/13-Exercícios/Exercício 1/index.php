<?php

require_once('Numero.php');

$numero5 = new Numero(5);
$numero7 = new Numero(7);
$numero16 = new Numero(16);
$numero123 = new Numero(123);

echo "Número : " . PHP_EOL;
echo $numero5->get_numero() . PHP_EOL;
echo $numero5->par_ou_impar(). PHP_EOL;
echo $numero5->raiz_quadrada(). PHP_EOL;
$aux = 0;
foreach($numero5->tabuada() as $numero){
    echo $numero5->get_numero() . " X ". $aux ." = " . $numero . PHP_EOL;
    $aux+=1;
}

echo PHP_EOL;

echo "Número : " . PHP_EOL;
echo $numero7->get_numero() . PHP_EOL;
echo $numero7->par_ou_impar(). PHP_EOL;
echo $numero7->raiz_quadrada(). PHP_EOL;
$aux = 0;
foreach($numero7->tabuada() as $numero){
    echo $numero7->get_numero() . " X ". $aux ." = " . $numero . PHP_EOL;
    $aux+=1;
}

echo PHP_EOL;

echo "Número : " . PHP_EOL;
echo $numero16->get_numero() . PHP_EOL;
echo $numero16->par_ou_impar(). PHP_EOL;
echo $numero16->raiz_quadrada(). PHP_EOL;
$aux = 0;
foreach($numero16->tabuada() as $numero){
    echo $numero16->get_numero() . " X ". $aux ." = " . $numero . PHP_EOL;
    $aux+=1;
}

echo PHP_EOL;

echo "Número : " . PHP_EOL;
echo $numero123->get_numero() . PHP_EOL;
echo $numero123->par_ou_impar(). PHP_EOL;
echo $numero123->raiz_quadrada(). PHP_EOL;
$aux = 0;
foreach($numero123->tabuada() as $numero){
    echo $numero123->get_numero() . " X ". $aux ." = " . $numero . PHP_EOL;
    $aux+=1;
}
<?php
$exemplo = scandir(__DIR__);
print_r($exemplo);
// . -> atual 
// ..-> anterior
// outros indices -> arquivos

$anterior = scandir('../');
print_r($anterior);

foreach($anterior as $indice => $item){
    echo (is_file($item) ? $indice . ' é file': $indice . ' é pasta') . PHP_EOL;
}
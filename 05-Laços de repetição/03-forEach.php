<?php
$nomes = ['ana','bob','carlos'];

foreach($nomes as $nome){
    echo $nome . PHP_EOL;
}

//array associativo
$funcoes = [
    "gerente" => 'ana',
    "coordenador" => 'bob',
    "secretário" => 'carlos'
];

foreach($funcoes as $chave => $valor){
    echo $chave . ': ' . $valor . PHP_EOL;
}
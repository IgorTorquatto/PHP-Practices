<?php
$cidades = [
    'Rio de janeiro' => [
        'telefone' => 1245,
        'abreviação' => 'rj'
    ],
    'São Paulo' => [
        'telefone'=> 6789,
        'abreviação'=> 'sp'
    ]
];

echo $cidades['Rio de janeiro']['abreviação'];

$numeros = [
    [1,2,3,4,5],
    [6,7,8,9,10]
];

echo $numeros[1][2];
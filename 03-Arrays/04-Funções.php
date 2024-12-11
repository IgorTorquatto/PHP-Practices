<?php
$array=[
    "nome"=> "Igor",
    "idade"=> 22,
    "exemplo"=> "teste"
];

echo $array["nome"];

//verificar se o array contém determinada chave
echo key_exists("nome",$array);

//transformar valores do array em string
$string_array = implode(",",$array);
echo $string_array;

//criar novo array a partir de um array e do índice de ínicio
$array_numerico = [1,2,3,4,5];
$novo_array = array_slice($array_numerico,2);
print_r($novo_array);
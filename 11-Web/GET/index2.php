<?php

//podemos separa parâmetros pelo caractere '&' e podemos usar o operador ternário para associar o valor
// correto para cada variável o qual recebe o valor do parâmetro.
// ex: localhost/index.php?id=3&valor=1000

$id = isset($_GET['id']) ? $_GET['id'] : null;
$valor = isset($_GET['valor']) ? $_GET['valor'] : null;

echo $id . PHP_EOL;
echo $valor;
<?php

//o finally sempre será executado independente 

$valor1 = 10;
$valor2 = 0;

try{
    $resultado = $valor1 / $valor2;
    echo $resultado;
}catch(Throwable $e){
    echo 'Erro: '. $e->getMessage() . PHP_EOL;
}finally{
    echo 'Sempre serei executado' . PHP_EOL;
}

echo ' fim';
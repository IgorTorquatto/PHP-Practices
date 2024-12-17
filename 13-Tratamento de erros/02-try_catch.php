<?php

//com o bloco try catch tentamos executar algum código que pode dar erro 
// capturamos esse erro/Exception e apresentamos a mensagem associada a ele
// a excução do script permanece após a captura do erro e apresentação da mensagem

function adicionar($a,$b){
    if( !is_numeric($a) || !is_numeric($b)){
        throw new Exception("Um dos valores não é numérico");
    }
    return $a + $b;
}

try{
    echo adicionar("string",10);
}catch(Exception $erro){
    echo $erro->getMessage() . PHP_EOL;
}

echo "Serei executado";
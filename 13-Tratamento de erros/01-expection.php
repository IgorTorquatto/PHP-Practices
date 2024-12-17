<?php

//Podemos lançar uma Exception / erro e definirmos a mensagem que queremos que seja apresentada
//Na excução do seguinte script além de ser apresentado o erro a execução do código para

function adicionar($a,$b){
    if( !is_numeric($a) || !is_numeric($b)){
        throw new Exception("Um dos valores não é numérico");
    }
    return $a + $b;
}

echo adicionar("joao",5);

echo "Não serei executado";
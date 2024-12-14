<?php

$numeros = [1,2,3,4,5,6];

foreach($numeros as $indice => $numero){
    if($indice == 2){
        continue;
    }
    if($indice == 4){
        break;
    }
    echo $numero;
}

//expected : [1,2,4]

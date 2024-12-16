<?php
$valor = 3;
$array = [];

for($i=0 ; $i <=10 ; $i++){
    array_push($array,$valor * $i);
}

foreach($array as $indice => $number){
    file_put_contents('tabuada.txt',$valor. ' X '. $indice . ' = '. $number . PHP_EOL,FILE_APPEND);
}
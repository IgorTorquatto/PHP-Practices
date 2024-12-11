<?php
$array = [1,2,3,4];

//checa se é array
echo is_array($array);

//número de elementos do array
echo count($array);

//adiciona elemento no inicio
array_unshift($array,0);
print_r($array);

//adiciona elemento no final
array_push($array,5);
print_r($array);

//remove elemento do final
$last_element = array_pop($array);
print_r($array);

//remove elemento do início
$first_element = array_shift($array);
print_r($array);

//remove elemento pelo índice
unset($array[0]);
print_r($array);
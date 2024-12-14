<?php
$nota = 4;

if($nota >= 7){
    echo "Aprovado!";
}
elseif ($nota >= 0 && $nota < 4){
    echo "Reprovado";
}
elseif ( $nota>=4 && $nota < 7){
    echo "Recuperação";
}
else{
    echo "Nota inválida";
}
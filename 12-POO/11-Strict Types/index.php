<?php

//Podemos tipar os dados ao acionar o strict_types
//Linguagens fortemente tipadas são mais confiáveis

declare(strict_types=1);

function apresentar(String $msg){
    echo $msg;
}

apresentar("olá");
//apresentar(10);
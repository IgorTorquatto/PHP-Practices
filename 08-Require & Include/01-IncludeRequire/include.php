<?php
//include - inclui um arquivo e caso não exista mostra um warning , mas continua a execução do script atual
//require - requer um arquivo e caso não exista apresenta um erro e não continua a execução do script atual

include 'script.php';
include 'nãoExiste.php';
require 'script.php';
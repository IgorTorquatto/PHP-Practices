<?php

// ao executarmos esse script e colocarmos na url do nosso localhost a query string: '?id=3' printaremos '3'
//sempre devemos verificar se existe de fato aquela chave/parâmetro valor na query string

$valor = null;
if(isset($_GET['id'])){
    $valor = $_GET['id'];
}

echo $valor;
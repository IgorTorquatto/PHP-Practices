<?php

$database = 'udemy_loja_online'; //nome do database importado
$username = 'user_loja_web'; //username do banco
$password = 'YpTfx!!.vR3O[!w]';//password escolhido

//Devemos criar ums instância da classe PDO

$ligacao = new PDO("mysql:host=localhost;dbname=$database",$username,$password);

$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_NUM);
echo '<pre>';
print_r($resultados);

//Destruir
$ligacao = null;
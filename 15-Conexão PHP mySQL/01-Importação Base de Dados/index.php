<?php

$database = 'udemy_loja_online'; //nome do database importado
$username = 'user_loja_web'; //username do banco
$password = 'YpTfx!!.vR3O[!w]';//password escolhido

//Devemos criar ums instância da classe PDO

$ligacao = new PDO("mysql:host=localhost;dbname=$database",$username,$password);

$estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo $estado;
// Se printar : localhost via TCP/IP a conexão ocorreu com sucesso

//A ligação fica aberta até a destruição do objeto PDO

//Destruir

$ligacao = null;
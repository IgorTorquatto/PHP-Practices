<?php

class Produto{
    public $id;
    public $produto;
    public $preco_unidade;
}

$database = 'udemy_loja_online'; //nome do database importado
$username = 'user_loja_web'; //username do banco
$password = 'YpTfx!!.vR3O[!w]';//password escolhido

//Devemos criar ums instância da classe PDO

$ligacao = new PDO("mysql:host=localhost;dbname=$database",$username,$password);

//Essa forma cria um objeto para dado de produto encontrado 
$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_CLASS,'Produto');
echo '<pre>';
print_r($resultados);

//Destruir
$ligacao = null;
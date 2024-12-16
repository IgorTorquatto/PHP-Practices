<?php

//Pela superglobal $_SERVER temos acesso a qual método foi utilizado na action do form
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso inválido');
}

//conseguimos capturar o username e o password e colocar seus valores dentro de uma variável
//lembrando que o campo dentro da superglobal POST deve ter o mesmo valor que o campo 'name' no respectivo input do form
$username = isset($_POST['text_username']) ? $_POST['text_username'] : 'vazio';
$password = isset($_POST['text_password']) ? $_POST['text_password'] : 'vazio';

//vamos criar um usuário qualquer:
//array associativo
$user = [
    "username" => "igor",
    "password" => "123456"
];

if($username == $user['username'] && $password == $user['password']){
    echo '<h1>LOGIN válido</h1>';
}else{
    echo '<h1>LOGIN inválido</h1>';
}

echo '<a href="index.html">Voltar</a>';
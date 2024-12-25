<?php

$host = 'localhost';
$dbname = 'meus_clientes';
$username = 'usuario_meus_clientes';
$password = 'iLP*zZ17ZT/_.Bc7';

try{
    //conectar com o banco
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //capturar dados do formulário
    $email = $_POST['inputEmail'] ?? null;
    $senha = $_POST['inputPassword'] ?? null;

    //Aqui podemos chamar outro arquivo php para fazer 
    //a validação do formulário na parte do servidor
    //Validação simples
    if(!$email || !$senha){
        throw new Exception("Preencha todos os campos");
    }

    //Inserir no banco de dados
    $queryInsert = "INSERT INTO clientes (email,password,created_at) VALUES (:email,:password,NOW())";
    $prepareQueryInsert = $pdo->prepare($queryInsert);

    //Criptografar senha
    $senhaCriptografada = password_hash($senha,PASSWORD_DEFAULT);

    $prepareQueryInsert->execute([
        ':email' => $email,
        ':password' => $senhaCriptografada,
    ]);

    $pdo = null;

    header("Location: exibir_dados.php");
}catch (PDOException $e){
    echo "Erro no banco de dados: " . htmlspecialchars($e->getMessage());
}catch (Exception $e){
    echo "Erro: " . htmlspecialchars($e->getMessage());
}
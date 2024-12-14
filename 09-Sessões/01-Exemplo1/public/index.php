<?php 
    session_start();
    $nome = !empty($_SESSION['nome']) ? $_SESSION['nome'] : 'vazio';
    $apelido = !empty($_SESSION['apelido']) ? $_SESSION['apelido'] : 'vazio';
    //Se temos as váriaveis nome e apelidos já guardadas na sessão usamos os seus valores nas varíaveis 
    //correspondentes, mas senão fazemos com que essas variáveis ( nome e apelido) recebam o valor 'vazio'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Sessão</title>
</head>
<body>
    <?php require_once('../components/nav.php')?>

    <hr>
    <h2>Exercício com sessões de PHP</h2>
    
    <h3>Valor da variável 'nome':</h3>
    <h1><?= $nome ?></strong></h1>

    <h3>Valor da variável 'apelido':</h3> 
    <h1><?= $apelido ?></h1>
</body>
</html>
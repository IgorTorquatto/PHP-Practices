<?php
session_start();
$_SESSION['nome'] = 'teste';
$_SESSION['apelido'] = 'teste';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php require_once '../components/nav.php' ?>

    <hr>
    <h2>Valor de 'teste' adicionados à sessão, volte para a página de início para verificar.</h2>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define('NOME_CONSTANTE', 10);
        $valor = 10;
        $valor_final = $valor + NOME_CONSTANTE ;
    ?>
    <h1>O valor final é <?= $valor_final?></h1>
</body>
</html>
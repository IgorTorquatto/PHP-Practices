<?php

$dados = file_get_contents('exemplo.txt');
$dados = explode("/",$dados);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($dados as $dado):?>
        <p><?= $dado?></p>
    <?php endforeach;?>
</body>
</html>

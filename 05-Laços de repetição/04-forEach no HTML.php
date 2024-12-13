<?php 
$valores = [1,2,3,4,5];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($valores as $valor):?>
        <p><?= $valor ?></p>
    <?php endforeach;?>
</body>
</html>
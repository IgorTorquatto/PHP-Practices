<?php 
$valor = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php while($valor != 11):?>
        <h1><?php echo $valor;?></h1>
        <?php ++$valor;?>
    <?php endwhile;?>
</body>
</html>
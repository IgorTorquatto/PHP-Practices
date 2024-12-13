<?php
    /* 
    1. Constrói um array com todos os resultados da tabuáda dos 327.
    2. Apresenta os dados do array com um ciclo foreach (apenas os valores)
    */
    $array = [];
    for($i= 0 ; $i <= 10;$i++){
        $valor = 327 * $i;
        array_push($array,$valor);
    }
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
    <?php foreach($array as $indice => $resultado):?>
            <p>327 X <?= $indice?> = <?= $resultado?></p>
    <?php endforeach;?>
</body>
</html>
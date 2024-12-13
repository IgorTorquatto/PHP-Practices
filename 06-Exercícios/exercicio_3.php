<?php

    /* 
    Dada a coleção de nomes, apresenta toda a coleção excepto o nome cujo índice = 4 (maria)
    */

    $nomes = ['joao', 'ana', 'carlos', 'marco', 'maria', 'silvia', 'helena', 'ricardo'];

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
    <?php foreach( $nomes as $indice => $nome): ?>
        <?php if($indice == 4) continue;?>
        <p><?= $nome ?></p>
    <?php endforeach ?>
</body>
</html>
<?php

    /* 
    Dada a coleção de nomes, devem ser todos apresentados,
    mas a partir de maria (inclusive) devem ser com texto a vermelho
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
    <style>
        .vermelho {
            color: red;
        }
    </style>
</head>
<body>
    <?php foreach($nomes as $indice => $nome){
        if($indice >= 4){
            echo '<p class= "vermelho">' . $nome .  '</p>';
        }
        else{
            echo '<p>' . $nome .'</p>';
        }
    }
    ?>
</body>
</html>
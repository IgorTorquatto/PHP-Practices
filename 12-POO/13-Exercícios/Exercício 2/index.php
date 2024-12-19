<?php

require_once('Humanos.php');

$dados = [
    ['m', 'João Ribeiro'],
    ['f', 'Ana Silva'],
    ['M', 'Carlos Martins'],
    ['m', 'Joaquim Santos'],
    ['f', 'Marta Rodrigues'],
    ['M', 'Rui Fernandes'],
    ['F', 'Márcia Antunes'],
    ['g', 'Pantufa'],
    ['f', 'Carla Maria'],
    ['M', 'Fernando Joaquim'],
    ['m', 'Ricardo Moita'],
    ['c', 'Lassie'],
    ['F', 'Daniela Cardoso'],
    ['F', 'Susana Dinis'],
];

$sexos = ['masculino','feminino','desconhecidos'];
$humanos = new Humanos();
$length = count($dados);
for($i=0; $i < $length ; $i++){
    $humanos->definir($dados[$i][0],$dados[$i][1]);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomes</title>
</head>
<body>
    <?php for($i=0;$i<3;$i++): ?>
        <h1 style="text-transform: capitalize;"><?= $sexos[$i]?></h1>
        <?php 
         $metodo = "get_" . $sexos[$i];
        ?>
        <ul>
            <?php foreach($humanos->$metodo() as $nome):?>
                <li><?= $nome?></li>
            <?php endforeach; ?>
        </ul>
        <hr>
    <?php endfor;?>
</body>
</html>
<?php
    $theme = !empty($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
    //se não for vazio o campo "theme" que está em cookie a variável theme recebe o valor que está no cookie
    // mas senão , se o campo estiver vazio a varáivel theme é por padrão light
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Cookie</title>
    <style>
        body{
            margin: 0; 
            padding: 0;
        }
        .light {
            background-color: white;
            color: black;
        }
        .dark {
            background-color: black;
            color: white;
        }
        a {
            color: red;
        }
    </style>
</head>
<body class="<?= $theme?>">
    <a href="theme_dark.php">Dark mode</a> | <a href="theme_light.php">Light mode</a>
    <h1>Exemplo simples de tema com cookie</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat atque temporibus ullam odit fuga rerum perferendis a similique perspiciatis, adipisci, deserunt dicta maiores, provident dolore! Iure quasi ducimus nemo dolores.</p>
</body>
</html>
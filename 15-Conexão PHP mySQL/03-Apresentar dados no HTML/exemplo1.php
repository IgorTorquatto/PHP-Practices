<?php

//Dados do BD
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'YpTfx!!.vR3O[!w]';

//Ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8",$username,$password);

//consulta dados
$resultados = $ligacao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_OBJ);

//fecha a ligação
$ligacao = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentação de dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <?php if (count($resultados)==0): ?>
                    <p>Não foram encontrados nenhum dados</p>
                <?php else:?>
                    <?php foreach($resultados as $produto): ?>
                        <div class="card p-3 mb-2 bg-light text-center">
                            <h5><?= $produto->produto ?></h5>
                            <h3 class="text-primary"><?= $produto->preco_unidade ?> $</h5>
                        </div>
                    <?php endforeach; ?>
                <?php endif;?>
            </div>
        </div>
    </div>
</body>
</html>
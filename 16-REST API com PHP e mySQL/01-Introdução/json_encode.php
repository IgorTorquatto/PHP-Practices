<?php

//array associativo
$dados = [
    "adm" => "Igor",
    "financeiro" => 'josé',
    'artistico' => 'Darwin'
];

echo '<pre>';
echo json_encode($dados,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);


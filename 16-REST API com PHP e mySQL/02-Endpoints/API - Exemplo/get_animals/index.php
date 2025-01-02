<?php

header("Content-Type:application/json; charset=utf-8");

$data = require_once('../data/data.php');

// Verifica se existe um query param do tipo GET com valor 'max' válido
// se não existir retorna mensagens de erro
if (!isset($_GET['max']) || $_GET['max'] < 1 || $_GET['max'] > count($data)) {
    $response['status'] = 'error';
    $response['message'] = 'Max animals is not correctly defined.';
    $response['time_response'] = time();
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    exit();
}

// Se existe um query param do tipo GET com valor 'max' e esse valor é válido nós o capturamos para que possamos passar
// esse valor na resposta de animals com os animais do índice inicial até o valor fornecido
$max = $_GET['max'];

$response['status'] = 'success';
$response['animals'] = array_slice($data, 0, $max);
$response['time_response'] = time();

echo json_encode($response, JSON_UNESCAPED_UNICODE);

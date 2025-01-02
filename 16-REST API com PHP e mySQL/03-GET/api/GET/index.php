<?php

header("Content-Type:application/json; charset=utf-8");

//Verificação se os query params estão válidos, nesse caso dentro do if
//como não há valores em 'valor1' nem em 'valor2' apresentamos a mensagem de erro
if(!isset($_GET['valor1']) || !isset($_GET['valor2'])){
    $response['status'] = 'error';
    $response['message'] = "Não existem os parâmetros necessários";
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    exit;
}

//Se chegou aqui os valores existem
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];

//Em php a superglobal get é um array que armazena os query params que vem na requisição
//Cada chave desse array contém um valor com o respectivo dado

$response['status'] = 'success';
$response['valor_1'] = $valor1;
$response['valor_2'] = $valor2;
$response['multiplicacao'] =  $valor1 * $valor2;

echo json_encode($response,JSON_UNESCAPED_UNICODE);

//Em $response montamos nossa reposta e em $_GET temos os valores query da requisição
<?php

//Precisamos informar qual será o conteúdo da resposta da API
header("Content-Type:application/json; charset=utf-8");

//Criamos um array com 3 campos 
$response['status'] = 'success';
$response['animals'] = require_once('../data/data.php');
$response['time_response'] = 'time';

//Apresentamos esse array em formto JSON
echo json_encode($response, JSON_UNESCAPED_UNICODE);

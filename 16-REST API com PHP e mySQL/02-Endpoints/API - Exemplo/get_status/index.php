<?php

header("Content-Type:application/json; charset=utf-8");

$response['status'] = 'Animals API is running!';
$response['time_response'] = time();

echo json_encode($response, JSON_UNESCAPED_UNICODE);

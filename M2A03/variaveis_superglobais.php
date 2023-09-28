<?php 
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");


$method = $_SERVER[ 'REQUEST_METHOD'];

if($method === 'GET'){ 

echo  json_encode(['message' => 'Recebi um GET']) ;
}

if($method === 'POST'){ 

    echo  json_encode(['message' => 'Recebi um POST']) ;
    }
    

?>
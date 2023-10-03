<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {

    $body = json_decode(file_get_contents("php://input")); 
    
    $guiche = filter_var($body->guiche , FILTER_VALIDATE_INT );
   
    
    if (!$guiche) {
        http_response_code(400);
        echo json_encode(['error'=>'Não foi enviado o número do Guichê']);
        exit;
    }
    $fila = json_decode(file_get_contents('filaAtendimento.txt')); 
    //pega o primeiro item do array
    // exclui a pessoa do array de fila
    // identifico qual é o guichê
    // faz um push do item retirado do array 

}
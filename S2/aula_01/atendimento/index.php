<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {

    $body = json_decode(file_get_contents("php://input")); 
    
    $name = filter_var($body->name , FILTER_SANITIZE_SPECIAL_CHARS );
    $cpf = filter_var($body->cpf , FILTER_SANITIZE_SPECIAL_CHARS );
    $type = filter_var($body->type, FILTER_VALIDATE_INT );

    if ((!$name) || (!$cpf) || (!$type)) {
        http_response_code(400);
        echo json_encode(['error'=>'Faltam dados para iniciar o atendimento!']);
        exit;
    }
    $filaAtendimento = json_decode(file_get_contents('filaAtendimento.txt'));
    if($type === 1){
    array_push($filaAtendimento, ['name' => $name, 'cpf'=> $cpf]);
    }
    else{
        array_unshift($filaAtendimento, ['name' => $name , 'cpf'=> $cpf]);
    }
    file_put_contents('filaAtendimento.txt',json_encode($filaAtendimento));
    var_dump($filaAtendimento) ;

    http_response_code(201);
    echo json_encode([
        'message' =>'Aguarde Sua Vez'
    ]);

     
   }
?>
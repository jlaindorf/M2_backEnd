<?php
require_once'config.php';
require_once'utils.php';
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {

  $body = getBody();
    
    $name = filter_var($body->name , FILTER_SANITIZE_SPECIAL_CHARS );
    $cpf = filter_var($body->cpf , FILTER_SANITIZE_SPECIAL_CHARS );
    $type = filter_var($body->type, FILTER_VALIDATE_INT );

    if ((!$name) || (!$cpf) || (!$type)) {
        http_response_code(400);
        echo json_encode(['error'=>'Faltam dados para iniciar o atendimento!']);
        exit;
    }
    $filaAtendimento = json_decode(file_get_contents(ARQUIVO_FILA_ATENDIMENTO));
    if($type === 1){
    array_push($filaAtendimento, ['name' => $name, 'cpf'=> $cpf]);
    }
    else{
        array_unshift($filaAtendimento, ['name' => $name , 'cpf'=> $cpf]);
    }
    file_put_contents(ARQUIVO_FILA_ATENDIMENTO,json_encode($filaAtendimento));
    var_dump($filaAtendimento) ;

    http_response_code(201);
    echo json_encode([
        'message' =>'Aguarde Sua Vez'
    ]);

     
   }
?>
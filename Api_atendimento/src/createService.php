<?php
require_once'config.php';
require_once'utils.php';
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {

    $body = getBody();
    
    $guiche = filter_var($body->guiche , FILTER_VALIDATE_INT );
   
    
    if (!$guiche) {
        http_response_code(400);
        echo json_encode(['error'=>'Não foi enviado o número do Guichê']);
        exit;
    }

    $fila =  readFileContent(ARQUIVO_FILA_ATENDIMENTO);

    
    // exclui a pessoa do array de fila
    $primeiroItem = array_shift($fila);
    file_put_contents(ARQUIVO_FILA_ATENDIMENTO, json_encode($fila));
       saveFileContent(ARQUIVO_FILA_ATENDIMENTO, $fila);
    // identifico qual é o guichê
    //fazer um push do item retirado do array fila

    
    if ($guiche === 1) {
        $listaGuiche1 = readFileContent(GUICHE_1);
        array_push($listaGuiche1, $primeiroItem);
        saveFileContent(GUICHE_1, $listaGuiche1);
    } else if ($guiche === 2) {
        $listaGuiche2 = readFileContent(GUICHE_2);
        array_push($listaGuiche2, $primeiroItem);
        saveFileContent(GUICHE_2, $listaGuiche2);
    } else if ($guiche === 3) {
        $listaGuiche3 = readFileContent(GUICHE_3);
        array_push($listaGuiche3, $primeiroItem);
        saveFileContent(GUICHE_3, $listaGuiche3);
    }

        http_response_code(201);
        echo json_encode(['message' => 'Atendimento Criado com Sucesso!']);
    


}
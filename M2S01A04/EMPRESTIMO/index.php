<?php

define('TAXA', 1.5);


header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {

    $body = file_get_contents("php://input"); //body em formato de string
    $data = json_decode($body);
    
    $nome = filter_var($data->nome , FILTER_SANITIZE_SPECIAL_CHARS );
    $idade = filter_var($data->idade , FILTER_VALIDATE_INT);
    $curso = filter_var($data->curso , FILTER_SANITIZE_SPECIAL_CHARS);
    $valor = filter_var($data->valor , FILTER_VALIDATE_FLOAT );
    $prazo = filter_var($data->prazo , FILTER_VALIDATE_INT);

    if ((!$nome) || (!$idade) || (!$curso)) {
        http_response_code(400);
        echo json_encode(['error'=>'Falta dado obrigatório']);
        exit;

    };

    $taxa = TAXA / 100;
    $juros = $valor * $taxa * $prazo; //juros 

    $montante = $valor + $juros;

    $parcela = $montante / $prazo;

    echo json_encode(['juros' => $juros,
                     'montante' => $montante,
                     'parcela' =>number_format($parcela, 2)

                ]);
}



?>
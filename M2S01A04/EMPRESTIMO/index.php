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
    if ($idade < 18) {
        http_response_code(403);
     echo json_encode(['error' => 'Não é permitido empréstimo para menor de idade']);
     exit; // nao continuar o código
    }



    $taxa = $idade < 25 ? 0.01 : TAXA / 100;
    $juros = $valor * $taxa * $prazo; //juros 

    $montante = $valor + $juros;

    $parcela = $montante / $prazo;
    if(file_exists("$nome.txt")){
        http_response_code(409);
        echo json_encode(['error' => 'Já existe um Empréstimo em seu nome']);
        exit;
    }
    file_put_contents("$nome.txt","Nome: $nome \nIdade: $idade\nCurso: $curso\nValor: $valor\nPrazo Para Pagar: $prazo\n");
    http_response_code(201);
    echo json_encode(['juros' => number_format($juros,2),
                     'montante' => number_format($montante,2),
                     'parcela' =>number_format($parcela, 2)

                ]);
            }

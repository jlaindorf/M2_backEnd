<?php
require_once 'config.php';
require_once './models/Pessoa.php';
require_once 'utils.php';
require_once  './models/Funcionario.php';
require_once  './models/Empresa.php';

/*

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {

    $body = getBody();

    $maria = new Pessoa("Maria Joaquina","72");
   
    $maria->setCpf("11111111111");

   

    echo $maria->getNome();

    echo $maria->getCpf();
    echo $maria->getIdade();

*/
  
    $funcionario1 = new Funcionario("João Frango", "045.022.780-30", 3000);
    $funcionario2 = new Funcionario("Julio", "055.022.780-30", 4000);

    debug($funcionario1) ;

   // echo $funcionario1->getCpf();


$empresa = new Empresa('Hai Toyota', '05.481.897.0001/40');

$empresa->contratar($funcionario1);
$empresa->contratar($funcionario2);


debug($empresa->listarFuncionarios())






?>

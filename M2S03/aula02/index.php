<?php
require_once 'config.php';
require_once 'Pessoa.php';
require_once 'utils.php';

$method = $_SERVER['REQUEST_METHOD'];
echo 'cheguei aqui';
if ($method === 'POST') {
  
    $body = getBody();

    $maria = new Pessoa();
    $maria->setNome("Maria Joaquina");

    echo $maria->getNome(); // Usando o método getNome() para acessar o nome
    var_dump($maria);

}
?>

<?php
require_once 'Funcionario.php';


    class Empresa {

        private $nome;
        private $cnpj;
        private $endereco;

        public function __construct($nome, $cnpj) {
            $this->nome = $nome;
            $this->cnpj = $cnpj;
        }

        public function contratar(Funcionario $funcionario){
          
            $data=[
                'nome' => $funcionario->getNome(),
                'idade' => $funcionario->getIdade(),
                'cpf' => $funcionario->getCpf(),
                'salario' => $funcionario->getSalario(),
            ];

        $allData = readFileContent('files/funcionarios.txt');
        array_push($allData,$data);
         saveFileContent('files/funcionarios.txt',$allData);
       
        }

        public function demitir($id){

        }

        public function listarFuncionarios(){
          $data =  readFileContent('files/funcionarios.txt');
          return $data;
        }


    }
?>
<?php
// 1- criar classe
// 2- criar os atributos da classe
// 3- criar os métodos
    
class Pessoa
{
    public $nome;
    public $idade;
    public $cpf;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){

        $this->nome = $nome;
    }



    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){

        $this->idade = $idade;
    }
    
    
        
    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){

        $this->cpf = $cpf;
    }
    










    }
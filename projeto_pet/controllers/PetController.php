<?php
require_once '../utils.php';
require_once '../models/Pet.php';
class PetController{

    public function createOne(){

       $body= getBody();
       $name = sanitizeInput($body, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
       $age = sanitizeInput($body, 'age', FILTER_VALIDATE_INT);
       $race_id= sanitizeInput($body, 'race_id', FILTER_VALIDATE_INT);
       $weight = sanitizeInput($body, 'weight', FILTER_VALIDATE_FLOAT);
       $size = strtolower(sanitizeInput($body,  'size', FILTER_SANITIZE_SPECIAL_CHARS));

       if(!$name) responseError("Nome do Pet é obrigatório",400);
       if(!$race_id) responseError("ID da raça do Pet é obrigatória",400);
    
       
       if (
        $size &&
        !($size === 'pequeno' ||
            $size === 'medio' ||
            $size === 'grande' ||
            $size === 'gigante')
    ) {
        responseError("O tamanho é inválido", 400);
    }
    
       $pet = new Pet($name, $race_id);
 
       if($age) $pet->setAge($age);
       if ($weight) $pet->setWeight($weight);
       if ($size) $pet->setSize($size);


       $result= $pet->insert();
         
       if($result['success'] === true) {
        response(["message" => "Cadastrado com sucesso"], 201);
    } else {
        responseError("Não foi possível realizar o cadastro", 400);
    }

    }

    public function listAll(){
        $pet = new Pet();
        $pets = $pet->findMany();
        response($pets, 200);
    }
}
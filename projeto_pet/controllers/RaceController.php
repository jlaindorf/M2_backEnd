<?php  
require_once '../utils.php';
require_once '../models/Race.php';
 class RaceController{

 public function createOne(){
        $body = getBody();

        $name = sanitizeInput($body, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

        if(!$name) responseError('O nome é obrigatório',400 );


        $race= new Race($name);
        $result = $race->insert();

        
        if($result['success'] === true) {
              response(["message" => "Cadastrado com sucesso"], 201);
          } else {
              responseError("Não foi possível realizar o cadastro", 400);
          }
 }
       public function listAll(){
              $races = new Race();
              $races = $races->findMany();
              response($races, 200);
       }

 }


?>
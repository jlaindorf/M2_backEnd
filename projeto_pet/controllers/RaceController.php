<?php  
require_once '../utils.php';
require_once '../models/Race.php';
 class RaceController{

 public function createOne(){
        $body = getBody();

        $name = sanitizeInput($body, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

        if(!$name) responseError('O nome é obrigatório',400 );


        $race= new Race($name);
 }


 }


?>
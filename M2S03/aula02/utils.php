<?php
function getBody() {
    return file_get_contents("php://input");
}

function sanitizeString($value){
    return filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
}

function responseError($message, $status){
    http_response_code($status);
    echo json_encode(['error' => $message]);
    exit;
}

 
function saveFileContent($fileName, $content) {
    file_put_contents($fileName, json_encode($content));
  }
  function readFileContent($fileName){
    return json_decode(file_get_contents($fileName));
 }

 function response($data, $status){
    http_response_code($status);
    echo json_encode($data);
    exit;
}

function debug($content){
   // echo '<pre>';
    echo var_dump($content) ;
  //  echo '</pre>';

}
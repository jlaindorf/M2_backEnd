<?php 
require_once'config';
require_once'utils';
$method = $server['REQUEST_METHOD'];

if ($method === 'GET'){

   $guiche1 = readFileContent(GUICHE_1);

    if(count($guiche1) < 0){

        echo json_encode(['current' => $guiche1[0]]);
    }
}



?>
<?php

    //MANIPULAÇÃO DE STRINGS

    $text = 'A java é a linguagem mais rápida do mundo!';

    echo str_replace('java', '[EDITADO]', $text);
    echo'<br/>';
    if(str_contains($text, 'rápida')){

        echo 'existe a palavra rápida';
    }
    echo'<br/>';
    // transformando string em array

    $lista = 'pão, leite , café';

    $novaLista=explode(',' , $lista);
    echo'<br/>';

    echo $novaLista[1];


    echo'<br/>';
 //data e horário como objeto 
    date_default_timezone_set('America/Sao_Paulo');
    $agora = new DateTime();
    echo "<pre>";
    var_dump($agora);
    echo "</pre>";
 //data e horário 
 echo $agora->format("d-m-y H:m");



//diferença entre duas datas
$finalDoMes= new DateTime('23-10-31');

echo'<br/>';

echo $agora->diff($finalDoMes)->days;




?>
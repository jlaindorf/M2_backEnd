<?php 

$primeira = filter_var($_POST['primeira'], FILTER_VALIDATE_FLOAT);

$segunda = filter_var($_POST['segunda'], FILTER_VALIDATE_FLOAT);

$terceira = filter_var($_POST['terceira'], FILTER_VALIDATE_FLOAT);

$quarta = filter_var($_POST['quarta'], FILTER_VALIDATE_FLOAT);

$total = $primeira + $segunda + $terceira + $quarta;
$media = $total / 4 ; 
if(!$primeira || !$segunda || !$terceira || !$quarta ){
    echo "Todas as notas são necessárias";
    exit;
}
else{

   
    echo "O sua nota total é : " .number_format($total , 2)."<br>";
    echo "O sua média é :  " .number_format($media , 2)."<br>";

   
}

?>
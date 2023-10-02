<?php 

$peso = filter_var($_POST['peso'], FILTER_VALIDATE_FLOAT);

$altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);

if(!$peso || !$altura ){
    echo "O peso e a altura são necessários";
    exit;
}
else{

    $imc = $peso / ($altura * $altura);
    echo "O seu imc é " .number_format($imc , 2)."<br>";

    if($imc <18.5){
      echo "Abaixo do peso" ;

    }
    else if($imc> 18.5 && $imc < 25){
        echo "Peso ideal, Parabéns!!" ;

    }
    else if($imc = 25 && $imc < 30){
        echo "Levemente acima do peso" ;

    }
    else if($imc = 30 && $imc < 35 ){
        echo "Obesidade Grau I" ;

    }
    else if($imc = 35 && $imc < 40 ){
        echo "Obesidade Grau II (severa)" ;

    }
    else {
        echo "Obesidade III (mórbida)" ;

    }
}

?>
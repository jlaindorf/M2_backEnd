<?php



$codigo = filter_var($_POST['codigo'], FILTER_VALIDATE_FLOAT);

$quantidade = filter_var($_POST['quantidade'], FILTER_VALIDATE_FLOAT);

if(!$codigo || !$quantidade ){
    echo "O código e a quantidade são necessários";
    exit;
}
else{
    switch($codigo) {
        case 1 : {
            $valor = $quantidade * 5;
            echo "Você pediu $quantidade torrada(s) e vai pagar R$" .number_format($valor,2);
            break;
        }
        case 2 : {
            $valor = $quantidade * 6 ;
            echo "Você pediu $quantidade pastel(is) e vai pagar R$" .number_format($valor,2);
            break;
        }
        case 3: {
            $valor = $quantidade * 8;
            echo "Você pediu $quantidade folhado(s) e vai pagar R$" .number_format($valor,2);
            break;
        }
        case 4: {
            $valor = $quantidade * 15;
            echo "Você pediu $quantidade xis e vai pagar R$" .number_format($valor,2);
            break;
        }
        default: {
            echo "Código não localizado";
            break;
        }

    }
  
}

?>
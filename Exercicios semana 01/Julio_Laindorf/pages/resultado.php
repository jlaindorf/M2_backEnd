<?php
$primeiro = filter_var($_POST['primeiro'], FILTER_VALIDATE_FLOAT);
$segundo = filter_var($_POST['segundo'], FILTER_VALIDATE_FLOAT);

if (!$primeiro || !$segundo) {
    echo "Os números são necessários";
    exit;
} else {
    if (isset($_POST['soma'])) {
        $resultado = $primeiro + $segundo;
        echo "Operação selecionada: Soma<br>";
        echo "Resultado da soma: $resultado";
    } elseif (isset($_POST['sub'])) {
        $resultado = $primeiro - $segundo;
        echo "Operação selecionada: Subtração<br>";
        echo "Resultado da subtração: $resultado";
    } elseif (isset($_POST['multi'])) {
        $resultado = $primeiro * $segundo;
        echo "Operação selecionada: Multiplicação<br>";
        echo "Resultado da multiplicação: $resultado";
    } elseif (isset($_POST['div'])) {
        if ($segundo == 0) {
            echo "Não é possível dividir por zero.";
        } else {
            $resultado = $primeiro / $segundo;
            echo "Operação selecionada: Divisão<br>";
            echo "Resultado da divisão: $resultado";
        }
    } 
}
?>

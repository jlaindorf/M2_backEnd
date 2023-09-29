<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Frete</title>
</head>
<body>
    <h1>Resultado do Frete</h1>
  
<?php

$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT);
$distancia = filter_input(INPUT_POST, 'distancia', FILTER_VALIDATE_FLOAT);

if(!$peso || !$distancia) {
  header('Location: frete.php?error=true');
}

// var_dump($peso);

$distancia = $_POST['distancia'];

$resultado = $peso * 0.8 + $distancia * 0.2;

echo "O valor do frete é $resultado";
?>

</body>
</html>


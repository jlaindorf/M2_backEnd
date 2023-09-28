
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form class="container" method="post" action="carta_ferias.php">
    <label for="">Insira o nome do Funcionáro</label>
    <input type="text" placeholder="Nome do Funcionáro" name='name'><br>
    <label for="">Insira Data de Início das Férias:</label>
    <input type="date" name='start_Date'><br>
    <label for="">Insira Data de Fim das Férias: </label>
    <input type="date" name='end_Date' ><br>

    <button type="submit">Gerar</button>


  





    </form>
  <!--   <?php
    $nome = 'Julio';
    $idade = 32;
    var_dump($nome)

    ?>


    olá mundo!
    <?php echo "meu nome é" . $nome . " e tenho" . $idade ?>
    <?php echo "meu nome é $nome" ?>
    <?= "....." ?> -->
</body>
</html>
<style>

    .container{
        display: flex;
        flex-direction: column;
        width: 80%;
        margin: 0 auto;
    }
</style>
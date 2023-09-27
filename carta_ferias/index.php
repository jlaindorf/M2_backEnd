
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php echo $_SERVER['PHP_SELF']?>
    <form class="container" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    <label for="">Insira o nome do Funcionáro</label>
    <input type="text" placeholder="Nome do Funcionáro" name='name'><br>
    <label for="">Insira Data de Início das Férias:</label>
    <input type="date" name='start_Date'><br>
    <label for="">Insira Data de Fim das Férias: </label>
    <input type="date" name='end_Date' ><br>

    <button type="submit">Gerar</button>


    <?php 
        if( isset ($_POST['name']) && isset($_POST['start_Date']) && isset($_POST['end_Date'])){
            $nome = $_POST["name"];
            $dataInicio = $_POST["start_Date"];
            $dataTermino = $_POST["end_Date"];
            
            echo "<h2>Dados do Formulário:</h2>";
            echo "<p><strong>Nome do Funcionário:</strong> $nome</p>";
            echo "<p><strong>Data de Início das Férias:</strong> $dataInicio</p>";

       }
        else{
            echo "Aguardando preenchimento das informações";
        }
    
    
    ?>






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
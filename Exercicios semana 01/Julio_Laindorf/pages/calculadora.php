<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
</head>
<body>
<h1>Calculadora</h1>
<form class="fomulario" method="post" action="calculo_calculadora.php">
  <label for="peso">Digite o Primeiro número</label>
  <input type="number" name="primeiro">
  <label for="altura">Digite o Segundo número</label>
  <input type="number" name="segundo">
  <label class="btn" >Selecione a operação</label>
  <button class="btn" name="soma" type="submit">Soma</button>
  <button class="btn" name="sub" type="submit">Subtração</button>
  <button class="btn" name="multi" type="submit">Multiplicação</button>
  <button class="btn" name="div" type="submit">Divisão</button>

</form>

</body>
</html>

<style>

.fomulario{
    display: flex;
    flex-direction: column;
    width: 80%;
    margin: 0auto;
  }
  .btn{
    display: flex;
    flex-direction: column;
    width: 20%;
    margin: 0 auto;
   
  }
</style>
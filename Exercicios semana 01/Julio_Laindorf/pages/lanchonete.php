<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lanchonete</title>
</head>
<h1>Lanchonete</h1>
<body>
<H2> 1 = Torrada R$5,00<h2>
<H2> 2 = Pastel R$6,00<h2>
<H2> 3 = Folhado R$8,00<h2>
<H2> 4 = Xis R$15,00<h2>
</Table>
<form method="post" action="calcula_preco.php">
  <label for="codigo">Digite o código do Produto</label>
  <input type="number" name="codigo">
  <label for="quantidade">Digite a quantidade</label>
  <input type="number" name="quantidade">

  <button type="submit">Solicitar</button>

</form>

</body>
</html>
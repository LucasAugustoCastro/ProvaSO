<?php

$disciplina = "Avaliação SOCPS II";
$estudante = "Lucas Augusto de Castro Coelho";

$dia = date("d/m/Y");
$hora = date("h:i:sa");
echo "Mostrando com echo<br>";
echo "Atividade: {$nomeAtividade} <br>";
echo "Nome Estudande: {$nomeUsuario} <br>";
echo "Data: {$dia} e hora: {$hora} <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Atividade: <?=$disciplina?></h1>
  <h3>Nome Estudante: <?=$estudante?></h3>
  <p>Data: <?=$dia?> e hora: <?=$hora?></p>

</body>
</html>
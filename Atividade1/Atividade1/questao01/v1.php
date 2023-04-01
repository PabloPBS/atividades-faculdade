<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <h1 style="text-align: center;">Atividade de fixação</h1>
    <p>1. Escreva um código em PHP que calcula a média de três números e imprime o resultado.
</p>
<?php 
    $n1 = 7;
    $n2 = 9;
    $n3 = 4;
    $m = ($n1+$n2+$n3)/3;
    echo "Primeira nota do aluno: $n1 <br> Segunda nota do aluno: $n2 <br> Terceira nota do aluno: $n3 <br>";
    echo "Média final do aluno: " . number_format($m, 2)
?>
</body>
</html>
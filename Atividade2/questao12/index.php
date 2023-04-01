<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 12</title>
</head>
<body>
<p>
    12. Escreva um código em PHP que calcula os 10 primeiros números da sequência de <strong>Fibonacci</strong> e
    imprime cada número em uma linha separada.
</p>
<?php 
    $n1 = 1;
    $n2 = 1;
    $n3 = 1;
    echo "$n1 <br> $n2 <br>";
    for ($c = 0; $c <= 7; $c++) {
        $n1 = $n2;
        $n2 = $n3;
        $n3 = $n1+$n2;
        echo $n3 . "<br>"; }
?>
</body>
</html>
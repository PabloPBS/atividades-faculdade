<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11</title>
</head>
<body>
<p>
    11. Escreva um código em PHP que cria um vetor com 10 números inteiros e imprime apenas os
    números ímpares utilizando um loop for
</p>
<?php 
    $vetor = array(1,2,3,4,5,6,7,8,9,10);
    for ($c = 0; $c <= 10; $c++)
        if ($vetor[$c] % 2 != 0)
            echo $vetor[$c] . ' '
?>
</body>
</html>
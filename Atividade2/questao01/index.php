<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 01</title>
</head>
<body>
    <p>1. Escreva um código em PHP que define uma constante para armazenar o valor de Pi e calcule a 
área de um círculo com raio 5 utilizando essa constante.</p>
<?php
    #M_PI já é uma constante
    define("PI", 3.14159);
    $r = 5;
    echo "O valor da área do círculo é igual a: " . $r * PI;
?>
</body>
</html>
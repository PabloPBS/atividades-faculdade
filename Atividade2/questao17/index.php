<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 17</title>
</head>
<body>
    <p>17. Escreva um código em PHP que recebe um número inteiro como entrada e verifica se esse 
número é um número perfeito (ou seja, a soma de seus divisores é igual ao próprio número) 
utilizando um loop for.</p>
<form action="" method="post">
    <input type="number" name="num">
    <input type="submit" value="Confirmar">
</form>
<?php 
    $num = $_POST["num"];
    $soma = 0;
    if ($_POST)
        echo "Divisores de [$num]: <Br>";
        for ($c = 1; $c < $num; $c++) {
            if ($num % $c == 0) {
                echo "$c <br>";
                $soma += $c;
            }
        }
        echo "Valor da soma dos divisores de [$num]: $soma <br>";
    if ($soma == $num) {
        echo ("O número [$num] é um número perfeito!"); 
    }
    else {
        echo ("O número [$num] não é um número perfeito.");
    }
?>
</body>
</html>
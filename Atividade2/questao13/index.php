<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13</title>
</head>
<body>
<p>
    13. Escreva um código em PHP que recebe três números (a, b e c) como entrada e calcula as raízes
    da equação quadrática utilizando a fórmula de Bhaskara.
</p>
<form action="" method="post">
    <input type="number" name="a">
    <input type="number" name="b">
    <input type="number" name="c">
    <input type="submit" value="Confirmar">
</form>
<?php 
    //b² - 4ac
    //-b +- rdelta/2a
    if ($_POST)
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $delta = $b**2 - 4*$a*$c;
        echo "Valor de delta: " . $delta . "<Br>";
        if ($delta < 0) {
            echo "O valor de delta é negativo, logo suas duas raízes não existem.";
        }
        elseif ($delta == 0) {
            echo "Devido o valor de delta ser igual a zero, suas duas raízes são iguais. <br>";
            echo "Valor das raízes: " . (-$b + $delta**0.5)/2*$a;
        }
        else {
            echo "Valor de x¹: " . (-$b + $delta**0.5)/2*$a;
            echo "<br> Valor de x²: " . (-$b - $delta**0.5)/2*$a;
        }
?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 15</title>
</head>
<body>
<p>
    15. Escreva um código em PHP que verifica se um número é primo ou não utilizando um loop for
    e imprime o resultado.
</p>
<form action="" method="post">
    <input type="number" name="num">
    <input type="submit" value="Confirmar">
</form>
<?php 
    if ($_POST) {
        $tot = 0;
        $num = $_POST["num"];
        for ($c = 1; $c < $num+1; $c++) {
            if ($num % $c == 0) {
                $tot ++;
            }
        }
        if ($tot <= 2) {
            echo "O número [$num] é primo!";
        }
        else {
            echo "O número [$num] não é primo!";
        }
    }
?>
</body>
</html>
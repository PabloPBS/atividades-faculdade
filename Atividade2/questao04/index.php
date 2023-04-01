<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 04</title>
</head>
<body>
    <p>4. Escreva um código em PHP que verifica se um número é divisível por 3 e 5 ao mesmo tempo 
utilizando operadores lógicos e imprime o resultado</p>
<form action="" method="post">
    Valor: <input type="number" name="num">
    <input type="submit" value="Confirmar">
<?php 
    $num = $_POST["num"];
    if ($num % 3 == 0 and $num % 5 ==0)
        echo "O número $num é divisível por 5 e por 3!";
    else
        echo "O número $num não é divisível por 5 e por 3."
?>
</form>
</body>
</html>
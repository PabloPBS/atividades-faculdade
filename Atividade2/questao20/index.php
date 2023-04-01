<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 20</title>
</head>
<body>
<p>
    20. Escreva um código em PHP que recebe um número inteiro como entrada e utiliza a função
    intval() para converter esse número em um número decimal.
</p>
<form action="" method="post">
    <input type="text" name="num">
    <input type="submit" value="Confirmar">
</form>
<?php 
    if ($_POST) {
        $num = $_POST["num"];
        $num2 = intval($num);
        echo "Número digitado: $num <br> Como pode perceber com o comando abixo, ele está em formato de string: <Br>";
        var_dump ($num);
        echo "<bR>";
        echo "Número convertido em decimal: $num2 <br> E agora ele etá no formato inteiro: <br>";
        var_dump ($num2);
    }
?>
</body>
</html>
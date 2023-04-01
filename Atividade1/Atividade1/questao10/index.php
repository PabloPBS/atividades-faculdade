<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10</title>
</head>
<body>
    <p>10. Escreva um código em PHP que cria uma função para calcular a área de um triângulo dado 
base e altura.</p>
<form action="" method="post">
    Valor da base: <input type="number" name="b" style="margin: 10px 8px;"> <br>
    Valor da altura: <input type="number" name="h"> <br>
    <input type="submit" value="Confirmar" style="margin: 10px;">
</form>
<?php 
    function areaT($b, $h) {
        $a = ($b * $h)/2;
        return $a;
    }
    if ($_POST)
        $b = $_POST["b"];
        $h = $_POST["h"];
        $a = areaT($b, $h);
        echo "O valor da área do triângulo é igual a: " . $a;
?>
</body>
</html>
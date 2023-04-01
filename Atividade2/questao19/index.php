<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 19</title>
</head>
<body>
<p>
    19. Escreva um código em PHP que recebe uma string como entrada e utiliza a função strrev() para
    inverter a ordem dos caracteres na string.
</p>
<form action="" method="post">
    <input type="text" name="txt">
    <input type="submit" value="Confirmar">
</form>
<?php 
    if ($_POST) {
        $txt = $_POST["txt"];
        $inv = strrev($txt);
        echo "Texto inserido: <br> $txt <br>";
        echo "Texto invertido: <br> $inv";
    }
?>
</body>
</html>
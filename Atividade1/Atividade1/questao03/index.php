<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <p>3. Escreva um código em PHP que verifica se uma string contém a palavra "PHP" e imprime o 
resultado</p>
<form method="post" action="">
    <input type="text" name="texto">
    <input type="submit" value="Confirmar">
</form>
<?php 
    if ($_POST)
        $str = $_POST["texto"];
        if (strpos($str, "PHP") == True) 
            echo "A palavra [PHP] está presente na string";
        else 
            echo "A palavra [PHP] não está presente na string";
?>
</body>
</html>
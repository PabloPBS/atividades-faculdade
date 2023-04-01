<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 08</title>
</head>
<body>
    <p>8. Escreva um código em PHP que verifica se uma string é palíndroma (ou seja, pode ser lida da 
mesma forma de trás para frente) utilizando funções de manipulação de strings e imprime o 
resultado</p>
<form action="" method="post">
    <input type="text" name="str">
</form>
<?php 
    if ($_POST)
        $str = strtolower($_POST["str"]);
        $invstr = strtolower(strrev($str));
        echo "$invstr <br> $str <br> ";
        if ($str == $invstr)
            echo "A string digitada é um palíndromo!";
        else
            echo "A string digitada não é um palíndromo."
?>
</body>
</html>
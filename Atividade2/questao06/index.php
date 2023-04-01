<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 06</title>
</head>
<body>
    <p>6. Escreva um código em PHP que verifica se uma string contém pelo menos uma letra maiúscula 
utilizando a função ctype_upper() e imprime o resultado.
</p>
<!-- A função cyte_upper() apenas retorna True se todas as letras estiverem em maiúsculo -->
<form action="" method="post">
    <input type="text" name="str">
    <input type="submit" value="Confirmar">
</form>
<?php 
    $str = $_POST["str"];
    if (preg_match("/[A-Z]/", $str))
        echo "A string [$str] possui ao menos uma letra em maiúsculo.";
    else
        echo "A string [$str] não possui letras em maiúsculo."

    /* if (ctype_upper($str) == True)
        echo "A string [$str] possui ao menos uma letra em maiúsculo.";
    else
        echo "A string [$str] não possui letras em maiúsculo." */
?>
</body>
</html>
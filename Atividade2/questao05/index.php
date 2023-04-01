<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 05</title>
</head>
<body>
    <p>5. Escreva um código em PHP que cria um vetor com os nomes de 5 países e imprime cada nome 
em uma linha separada utilizando um loop foreach.</p>
<?php 
    $paises = array("Brasil", "Estados Unidos", "Canadá", "Alemanha", "China", "Rússia");
    foreach ($paises as $c)
        echo $c . "<br>"
    ?>
</body>
</html>
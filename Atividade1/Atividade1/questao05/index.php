<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>
    <p>5. Escreva um código em PHP que cria um array com os números de 1 a 5 e imprime cada número 
na tela.</p>
<?php 
    $array = array(1,2,3,4,5);
    for ($c = 0; $c < count($array); $c++) 
        echo $array[$c] . " > ";
    echo "FIM!"
?>
</body>
</html>
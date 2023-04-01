<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 09</title>
</head>
<body>
<p>
    Escreva um código em PHP que cria um vetor com os números de 1 a 20 e imprime apenas os
    números pares utilizando um loop for.
</p>
<?php 
    $vetor = array(); 
    for ($c = 1; $c <= 20; $c++) {
        if ($c == 21) {
            break; 
        }
        array_push($vetor, $c);
        if ($vetor[$c-1] % 2 == 0) {
            echo $vetor[$c-1] . " > "; 
        } 
    }
    echo "FIM!"
?>
</body>
</html>
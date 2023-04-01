<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 07</title>
</head>
<body>
    <p>7. Escreva um código em PHP que cria um vetor com 10 números aleatórios entre 1 e 100 e 
imprime o maior valor encontrado.</p>
<?php 
    $vetor = array(rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100));
    print_r($vetor);
    
    echo "<br> O maior valor do vetor acima é: " .  max($vetor)
?>
</body>
</html>
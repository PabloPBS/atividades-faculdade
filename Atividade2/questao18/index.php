<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 18</title>
</head>
<body>
    <p>18. Escreva um código em PHP que cria um vetor com os números de 1 a 10 e utiliza a função 
array_map() para calcular o quadrado de cada número.</p>
<?php 
    $vetor = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    echo "Vetor: <br>";
    print_r ($vetor);
    echo "<br>";
    echo "Vetor com valores após a raiz quadrada: <br>";
    $sqrt = array_map(function($n) {
        return $n * $n;
    }, $vetor);
    for ($c = 0; $c < 10; $c++)
        echo "$sqrt[$c] <br>"
?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 14</title>
</head>
<body>
<p>
    14. Escreva um código em PHP que cria um vetor com 20 números aleatórios entre 1 e 100 e
    ordena esses números em ordem crescente utilizando a função sort()
</p>
<?php 
    $vetor = array();
    for ($c =0; $c <20; $c++) {
        array_push($vetor, rand(1, 100));
    }
    echo "Vetor: <br>";
    sort($vetor);
    for ($c = 0; $c <20; $c++) {
        echo $vetor[$c] . "<br>";
    }
    //print_r ($vetor) . "<br>"
?>
</body>
</html>
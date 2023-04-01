<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10</title>
</head>
<body>
<p>
    10. Escreva um código em PHP que cria uma função que recebe um vetor de números inteiros
    como parâmetro e retorna a média dos valores contidos no vetor
</p>
<?php 
    function mediaVetor ($vetor) {
        $soma = 0;
        $media = (float) 0;
        $vet = count($vetor);
        for ($c = 0; $c < $vet; $c++)
            $soma += $vetor[$c];
            $media = $soma/$vet;
            return($media);
    }
$vetor = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
print_r ($vetor);
echo " <Br> A média dos valores do vetor é: " . mediaVetor($vetor)
?>
</body>
</html>
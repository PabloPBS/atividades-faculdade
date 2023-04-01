<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <style>
        input {
            margin: 5px;
        }
    </style>
</head>
<body>
    <p>3. Escreva um código em PHP que cria um vetor com 5 números inteiros e calcule a soma desses 
número</p>
<form action="" method="post">
    Primeiro valor: <input type="number" name="n1"> <br>
    Segundo valor: <input type="number" name="n2"> <br>
    Terceiro valor: <input type="number" name="n3"> <br>
    Quarto valor: <input type="number" name="n4"> <br>
    Quinto valor: <input type="number" name="n5"> <br>
    <input type="submit" value="Confirmar"> <br>
</form>
<?php 
    if ($_POST)
        $soma = 0;
        $vetor = array();
        array_push($vetor, $_POST["n1"],  $_POST["n2"], $_POST["n3"], $_POST["n4"], $_POST["n5"],);
        for ($c=0; $c<5; $c++)
            $soma += $vetor[$c];
        echo "Valor da soma: " . $soma
        
    /* $soma = 0;
    $vetor = array(1,2,3,4,5);
    for ($c=0; $c <5; $c++)
        $soma += $vetor[$c];
    echo "Valor da soma: " . $soma */
?>
</body>
</html>
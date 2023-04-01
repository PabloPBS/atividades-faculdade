<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 16</title>
    <style>
        form {
            margin: 10px;
        }
    </style>
</head>
<body>
    <p>6. Escreva um código em PHP que cria um vetor com 5 nomes de frutas e utiliza a função 
array_push() para adicionar mais 3 frutas ao final do vetor.</p>
<?php 
    $vetor = array ("Manga", "Banana", "Morango", "Uva", "Laranja");
    echo "Frutas dentro do vetor: <br>";
    for ($c = 0; $c < 5; $c++)
        echo "$vetor[$c] <br>"
?>
<h4>Adicione mais frutas ao vetor!</h4>
<form action="" method="post">
    <input type="text" name="frut1">
    <input type="text" name="frut2">
    <input type="text" name="frut3">
    <input type="submit" value="Confirmar">
</form>
<?php 
    if ($_POST) {
        $frut1 = $_POST["frut1"];
        $frut2 = $_POST["frut2"];
        $frut3 = $_POST["frut3"];
        array_push($vetor, $frut1);
        array_push($vetor, $frut2);
        array_push($vetor, $frut3);
        echo "Observe como o vetor está agora: <br>";
        for ($c = 0; $c < 7; $c++) {
            echo "$vetor[$c] <br>";
        }
    }
?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 7</title>
</head>
<body>
    <p>7. Escreva um código em PHP que calcula a raiz quadrada de um número e imprime o resultado.</p>
    <form action="" method="post">
        <input type="number" name="num">
        <input type="submit" value="Confirmar">
    </form>
    <?php 
        if ($_POST)
            $num = $_POST["num"];
            echo "A raiz quadrada de [$num] é igual a: " . $num ** 0.5
    ?>
</body>
</html>
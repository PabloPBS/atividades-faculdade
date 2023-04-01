<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8</title>
</head>
<body>
    <p>8. Escreva um código em PHP que converte um número em binário e imprime o resultado.</p>
    <form action="" method="post">
        <input type="number" name="num">
        <input type="submit" value="Confirmar">
    </form>
    <?php 
        if ($_POST);
            $num = $_POST["num"];
            echo "O número [$num] em binário é: " . decbin($num)
    ?>
</body>
</html>
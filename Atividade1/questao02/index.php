<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
    <p>2. Escreva um código em PHP que verifica se um número é par ou ímpar e imprime o resultado</p>
    <form method="post" action="">
        Valor: <input type="number" name="n1">
        <input type="submit" value="Confirmar">
    </form>
    <?php 
        if ($_POST)
            $val = $_POST["n1"];
                if ($val % 2 == 0)
                    echo "O número [$val] é par!";
                else
                    echo "O número [$val] é impar!"
    ?>
</body>
</html>
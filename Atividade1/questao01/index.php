<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <form method="post" action="">
        <p>Primeiro valor: </p>
        <input type="number" name="n1">
        <p>Segundo valor: </p>
        <input type="number" name ="n2">
        <p>Terceiro valor: </p>
        <input type="number" name="n3">
        <br>
        <input type="submit" value="Confirmar" style="margin: 10px 0px;">
    </form>
    <?php 
        if ($_POST) {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            $n3 = $_POST["n3"];
            echo "A média entre [$n1], [$n2] e [$n3] é: " . ($n1 + $n2 + $n3)/3;
        }
    ?>
</body>
</html>
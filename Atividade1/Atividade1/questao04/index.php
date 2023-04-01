<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queestão 5</title>
</head>
<body>
    <p>4. Escreva um código em PHP que define uma chamada constante "PI" com o valor 3.14159 e 
calcula a área de um círculo com raio 5.</p>
<?php 
    define("PI", 3.14159);
    echo "Área de um círculo com raio 5 = " . PI*5**2;
?>
</body>
</html>
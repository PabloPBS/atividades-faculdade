<?php
    include("conexao.php");
    $cnh_Motora = $_POST['cnhMotora'];
    $sal_Motora = $_POST['salMotora'];
    $id_Funcionario = $_POST['idFuncionario'];

    $sql = "INSERT INTO motorista (cnh_Motorista, salario_Motorista, id_Funcionario)
    VALUES ($cnh_Motora, $sal_Motora, $id_Funcionario)";

    if (mysqli_query($conn, $sql)) {
        echo "Cadastro inserido com sucesso!";
    } else {
        echo "Erro ao inserir o cadastro: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>
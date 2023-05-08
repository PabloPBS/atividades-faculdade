<?php
    include("conexao.php");
    $nome_Funcionario = $_POST['nomeFuncionario'];
    $cpf_Funcionario = $_POST['cpfFuncionario'];
    $endereco_Funcionario = $_POST['enderecoFuncionario'];
    $telefone_Funcionario = $_POST['telefoneFuncionario'];
    $dataAD_Funcionario = $_POST['dataADFuncionario'];

    //echo "$nome_Funcionario - $cpf_Funcionario - $endereco_Funcionario - $telefone_Funcionario - $dataAD_Funcionario";

    $sql = "INSERT INTO funcionario (nome_Funcionario, cpf_Funcionario, endereco_Funcionario, telefone_Funcionario, dataAD_Funcionario)
    VALUES ('$nome_Funcionario', '$cpf_Funcionario', '$endereco_Funcionario', '$telefone_Funcionario', '$dataAD_Funcionario')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Cadastro inserido com sucesso!";
    } else {
        echo "Erro ao inserir o cadastro: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>
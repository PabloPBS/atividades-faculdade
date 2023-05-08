<?php
include("conexao.php");
// Dados do cadastro a ser inserido na tabela rota
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$horaS = $_POST['horaS'];
$horaC = $_POST['horaC'];
$idMotorista = $_POST['idMotorista'];

// Montando a query SQL para inserir o novo cadastro na tabela rota
$sql = "INSERT INTO rota (Longitude, Latitude, horaS_Rota, horaC_Rota, id_Motorista)
        VALUES ($longitude, $latitude, '$horaS', '$horaC', $idMotorista)";

// Executando a query SQL
if (mysqli_query($conn, $sql)) {
  echo "Cadastro inserido com sucesso!";
} else {
  echo "Erro ao inserir o cadastro: " . mysqli_error($conn);
}

// Fechando a conexão com o banco de dados
mysqli_close($conn);
?>

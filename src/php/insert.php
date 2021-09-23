<?php

include("connect.php");

$pd = mysqli_real_escape_string($connect, $_POST['pd']);
$chegada = mysqli_real_escape_string($connect, $_POST['chegada']);
$origem = mysqli_real_escape_string($connect, $_POST['origem']);
$processo = mysqli_real_escape_string($connect, $_POST['processo']);
$descricao = mysqli_real_escape_string($connect, $_POST['descricao']);
$analista = mysqli_real_escape_string($connect, $_POST['analista']);
$encaminhado = mysqli_real_escape_string($connect, $_POST['ecaminhado']);
$data_ecaminhado = mysqli_real_escape_string($connect, $_POST['data_ecaminhado']);
$status = mysqli_real_escape_string($connect, $_POST['status']);
$total_dias = mysqli_real_escape_string($connect, $_POST['total_dias']);


$sql = "INSERT INTO usuario (pd, data_chegada, origem, tipo_processo, descricao, analista_setor, encaminhado, data_encaminhado, status, total_dias) 
VALUES ('$pd', '$chegada', '$origem', '$processo', '$descricao', '$analista', '$encaminhado', '$data_encaminhado', '$status', '$total_dias')";

if ($connect -> query($sql) === TRUE) {
    echo "sucesso";
  } else {
    echo "Error: " . $sql . "<br>" . $connect -> error;
  }

$connect -> close();

header('location: ../pages/index.php');
?>
<?php

include("connect.php");

$pd = $_POST['pd'];
$chegada = $_POST['chegada'];
$origem = $_POST['origem'];
$processo = $_POST['processo'];
$descricao = $_POST['descricao'];
$analista = $_POST['analista'];
$encaminhado = $_POST['encaminhado'];
$data_encaminhado = $_POST['data_encaminhado'];
$status = $_POST['status'];
$total_dias = $_POST['total_dias'];


$sql = "INSERT INTO pd (pd, data_chegada, origem, tipo_processo, descricao, analista_setor, encaminhado, data_encaminhado, status, total_dias) 
VALUES ('$pd', '$chegada', '$origem', '$processo', '$descricao', '$analista', '$encaminhado', '$data_encaminhado', '$status', '$total_dias')";

if ($connect -> query($sql) === TRUE) {
    echo "sucesso";
  } else {
    echo "Error: " . $sql . "<br>" . $connect -> error;
  }

$connect -> close();

header('location: ../pages/index.php');
?>
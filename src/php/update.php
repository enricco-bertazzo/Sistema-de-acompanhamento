<?php

include("connect.php");

$cadastro = $_POST['cadastro'];
$comunidade = $_POST['comunidade'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$quadra = $_POST['quadra'];
$lote = $_POST['lote'];
$beneficiario = $_POST['beneficiario'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$estado_civil = $_POST['estado_civil'];
$filiacao_1 = $_POST['filiacao_1'];
$filiacao_2 = $_POST['filiacao_2'];
$profissao = $_POST['profissao'];
$renda = $_POST['renda'];
$nome_conjuge = $_POST['nome_conjuge'];

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }
  
$sql = "UPDATE dados SET comunidade = '$comunidade', rua= '$rua', numero= '$numero', quadra= '$quadra', lote= '$lote', beneficiario= '$beneficiario', rg= '$rg', cpf= '$cpf', 
estado_civil= '$estado_civil', filiacao_1= '$filiacao_1', filiacao_2= '$filiacao_2', profissao= '$profissao', renda= '$renda', nome_conjuge= '$nome_conjuge' WHERE cadastro = $cadastro";

  
if ($connect -> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect -> close();

header('location: ../pages/cadastro.php');
?>
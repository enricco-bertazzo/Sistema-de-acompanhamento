<?php
session_start();

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

$sql_verificacao = "SELECT count(*) AS total FROM dados WHERE cpf = '$cpf' OR rg = '$rg' OR beneficiario = '$beneficiario' OR nome_conjuge='$nome_conjuge'";
$result = mysqli_query($connect, $sql_verificacao);
$row = mysqli_fetch_assoc($result);

if($row['total'] >= 1){
    $_SESSION['usuario_existe'] = true;
    header('location: ../pages/cadastro.php');
    exit();
}
  
$sql = "INSERT INTO dados (cadastro, comunidade, rua, numero, quadra, lote, beneficiario, rg, cpf, estado_civil, filiacao_1, filiacao_2, profissao, renda, nome_conjuge) 
VALUES ('$cadastro', '$comunidade', '$rua', '$numero', '$quadra', '$lote', '$beneficiario', '$rg', '$cpf', '$estado_civil', '$filiacao_1', '$filiacao_2', '$profissao', '$renda', '$nome_conjuge')";
  
if ($connect -> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect -> close();

header('location: ../pages/cadastro.php');
?>
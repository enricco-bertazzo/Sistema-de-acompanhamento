<?php

include("connect.php");

$atend_presencial = $_POST['atend_presencial'];
$atend_telefone = $_POST['atend_telefone'];
$levan_campo = $_POST['levan_campo'];
$reunioes = $_POST['reunioes'];
$outros = $_POST['outros'];


$sql = "INSERT INTO extra (atend_presencial, atend_telefone, levan_campo, reunioes, outros) 
VALUES ('$atend_presencial' '$atend_telefone', '$levan_campo', '$reunioes', '$outros')";

if ($connect -> query($sql) === TRUE) {
    echo "sucesso";
  } else {
    echo "Error: " . $sql . "<br>" . $connect -> error;
  }

$connect -> close();

header('location: ../pages/extra.php');
?>
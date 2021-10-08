<?php

include('connect.php');

$rua_query = $_POST['rua_query'];
$comunidade_query = $_POST['comunidade_query'];
$numero_query = $_POST['numero_query'];

$sql = "SELECT * FROM dados WHERE rua = '$rua_query' AND comunidade = '$comunidade_query' AND numero = '$numero_query'";

$result_dados = mysqli_query($connect, $sql);

$rows_dados = mysqli_fetch_assoc($result_dados);

?>
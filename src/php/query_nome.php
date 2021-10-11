
<?php

include('connect.php');

$nome_query = $_POST['nome_query'];

$sql = "SELECT * FROM dados WHERE beneficiario = '$nome_query' OR nome_conjuge = '$nome_query'" or die ('Cadastro Inexistente');

$result_dados = mysqli_query($connect, $sql);

$rows_dados = mysqli_fetch_assoc($result_dados);
?>
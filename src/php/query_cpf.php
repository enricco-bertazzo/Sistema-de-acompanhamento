
<?php

include('connect.php');

$cpf_query = $_POST['cpf_query'];

$sql = "SELECT * FROM dados WHERE cpf = '$cpf_query'";

$result_dados = mysqli_query($connect, $sql);

$rows_dados = mysqli_fetch_assoc($result_dados);

?>
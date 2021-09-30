
<?php

include('connect.php');

$cpf_query = $_POST['cpf_query'];

$sql = "SELECT * FROM dados WHERE cpf = '$cpf_query'";

$result_dados = mysqli_query($connect, $sql);

while($rows_dados = mysqli_fetch_array($result_dados)){
    echo "
    <tr>
        <td> <b> Filiação 1: </b>".$rows_dados['filiacao_1']."<br></td>
    </tr>";
}

?>
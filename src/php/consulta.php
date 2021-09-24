
<?php

include('connect.php');

$analista = $_POST['analista_setor'];

$sql = "SELECT * FROM pd WHERE analista_setor LIKE '$analista'";

$result_pd = mysqli_query($connect, $sql);

while($rows_pd = mysqli_fetch_array($result_pd)){
    echo "
    <tr>
        <td> <b> PD: </b>".$rows_pd['pd']."<br></td>
        <td> <b> Data de Chegada: </b>".$rows_pd['data_chegada']."<br></td>
        <td> <b> Origem: </b>".$rows_pd['origem']."<br></td>
        <td> <b> Tipo de Processo: </b>".$rows_pd['tipo_processo']."<br></td>
        <td> <b> Descrição: </b>".$rows_pd['descricao']."<br></td>
        <td> <b> Analista do Setor: </b>".$rows_pd['analista_setor']."<br></td>
        <td> <b> Encaminhado para: </b>".$rows_pd['encaminhado']."<br></td>
        <td> <b> Data de encaminhamento: </b>".$rows_pd['data_encaminhado']."<br></td>
        <td> <b> Status: </b>".$rows_pd['status']."<br></td>
        <td> <b> Total de dias: </b>".$rows_pd['total_dias']."<br></td>
        <br><br>
    </tr>";
}

header('location = ../pages/page_consulta.php')

?>
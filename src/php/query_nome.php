
<?php

include('connect.php');

$nome_query = $_POST['nome_query'];

$sql = "SELECT * FROM dados WHERE beneficiario = '$nome_query' OR nome_conjuge = '$nome_query'";


$result_dados = mysqli_query($connect, $sql);

while($rows_dados = mysqli_fetch_array($result_dados)){
    echo "
    <tr>
        <td> <b> Comunidade: </b>".$rows_dados['comunidade']."<br></td>
        <td> <b> Cadastro: </b>".$rows_dados['cadastro']."<br></td>
        <td> <b> Rua: </b>".$rows_dados['rua']."<br></td>
        <td> <b> Número: </b>".$rows_dados['numero']."<br></td>
        <td> <b> Quadra: </b>".$rows_dados['quadra']."<br></td>
        <td> <b> Lote: </b>".$rows_dados['lote']."<br></td>
        <td> <b> Beneficiario: </b>".$rows_dados['beneficiario']."<br></td>
        <td> <b> RG: </b>".$rows_dados['rg']."<br></td>
        <td> <b> CPF: </b>".$rows_dados['cpf']."<br></td>
        <td> <b> Estado Civil: </b>".$rows_dados['estado_civil']."<br></td>
        <td> <b> Filiação 1: </b>".$rows_dados['filiacao_1']."<br></td>
        <td> <b> Filiação 2: </b>".$rows_dados['filiacao_2']."<br></td>
        <td> <b> Profissão: </b>".$rows_dados['profissao']."<br></td>
        <td> <b> Renda SM: </b>".$rows_dados['renda']."<br></td>
        <td> <b> Nome Conjuge: </b>".$rows_dados['nome_conjuge']."<br></td>
    </tr>
    <br><br>";
}

?>
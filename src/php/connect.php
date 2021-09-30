<?php

define('HOST', '127.0.0.1');
define('EMAIL', 'root');
define('SENHA', '');
define('DB', 'acompanhamento');

$connect = mysqli_connect(HOST, EMAIL, SENHA, DB) or die ('Não foi possivel acessar');

$dados = "CREATE TABLE IF NOT EXISTS `acompanhamento`.`dados` (
    `comunidade` VARCHAR(45) NOT NULL,
    `cadastro` VARCHAR(45) NOT NULL,
    `rua` VARCHAR(45) NOT NULL,
    `numero` VARCHAR(45) NOT NULL,
    `quadra` VARCHAR(45) NOT NULL,
    `lote` VARCHAR(45) NOT NULL,
    `beneficiario` VARCHAR(45) NOT NULL,
    `rg` VARCHAR(45) NOT NULL,
    `cpf` VARCHAR(45) NOT NULL,
    `estado_civil` VARCHAR(45) NOT NULL,
    `filiacao_1` VARCHAR(45) NOT NULL,
    `filiacao_2` VARCHAR(45) NOT NULL,
    `profissao` VARCHAR(45) NOT NULL,
    `renda` VARCHAR(45) NOT NULL,
    `nome_conjuge` VARCHAR(45) NOT NULL)";

$result = mysqli_query($connect, $dados);

?>
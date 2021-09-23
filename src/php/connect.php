<?php

define('HOST', '127.0.0.1');
define('EMAIL', 'root');
define('SENHA', '');
define('DB', 'acompanhamento');

$connect = mysqli_connect(HOST, EMAIL, SENHA, DB) or die ('Não foi possivel acessar');

$pd = "CREATE TABLE IF NOT EXISTS `acompanhamento`.`pd` (
    `pd` INT NOT NULL,
    `data_chegada` VARCHAR(45) NOT NULL,
    `origem` VARCHAR(45) NOT NULL,
    `tipo_processo` VARCHAR(45) NOT NULL,
    `descricao` VARCHAR(45) NOT NULL,
    `analista_setor` VARCHAR(45) NOT NULL,
    `encaminhado` VARCHAR(45) NOT NULL,
    `data_encaminhado` VARCHAR(45) NOT NULL,
    `status` VARCHAR(45) NOT NULL,
    `total_dias` VARCHAR(45) NOT NULL)";

$result = mysqli_query($connect, $pd);

?>
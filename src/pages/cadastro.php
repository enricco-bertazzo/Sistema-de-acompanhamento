<!DOCTYPE html>
<html>
    <head>
        <title> Sistema de Acompanhamento </title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	    <meta charset="utf-8">
	    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
	    <link href="../css/style.css" rel="stylesheet">
	    <link href="../css/formulario-dados.css" rel="stylesheet">
	    <script src="../js/popper.min.js"></script>
	    <script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
	    <script src="https://kit.fontawesome.com/0dc26a975a.js" crossorigin="anonymous"></script>
	    <script src="../js/jquery-3.6.0.min.js"></script>
	    <script src="../js/jquery.mask.min.js"></script>
    </head>

    <body class="body text-center">
        <?php

        include "menu.php";

        ?>
        <form action="../php/insert.php" method="POST">
            <div class="card" id="formulario">
                <div class="form-floating">
                    <input name="cadastro" placeholder="Nº do Cadastro" type="text" class="form-control" required>
                    <label> Nº do Cadastro </label>
                </div>
                <div class="form-floating">
                    <input name="comunidade" placeholder="Comunidade" type="text" class="form-control" required>
                    <label> Comunidade </label>
                </div>
                <div class="form-floating">
                    <input name="rua" placeholder="Nome da Rua" type="text" class="form-control" required>
                    <label> Nome da Rua </label>
                </div>
                <div class="form-floating">
                    <input name="numero" placeholder="Nº da residencia" type="text" class="form-control" required>
                    <label> Nº da residencia </label>
                </div>
                <div class="form-floating">
                    <input name="quadra" placeholder="Quadra da residencia" type="text" class="form-control" required>
                    <label> Quadra da residencia </label>
                </div>
                <div class="form-floating">
                    <input name="lote" placeholder="Lote da residencia" type="text" class="form-control" required>
                    <label> Lote da residencia </label>
                </div>
                <div class="form-floating">
                    <input name="beneficiario" placeholder="Nome do Beneficiario" type="text" class="form-control" required>
                    <label> Nome do Beneficiario </label>
                </div>
                <div class="form-floating">
                    <input name="rg" placeholder="Nº RG do benefiario" type="text" class="form-control" required>
                    <label> Nº RG do benefiario </label>
                </div>
                <div class="form-floating">
                    <input name="cpf" placeholder="Nº CPF do benefiario" type="text" class="form-control" required>
                    <label> Nº CPF do benefiario </label>
                </div>
                <div class="form-floating">
                    <input name="estado_civil" placeholder="Estado civil do beneficiario" type="text" class="form-control" required>
                    <label> Estado civil do beneficiario </label>
                </div>
                <div class="form-floating">
                    <input name="filiacao_1" placeholder="Filiação 1" type="text" class="form-control" required>
                    <label> Filiação 1 </label>
                </div>
                <div class="form-floating">
                    <input name="filiacao_2" placeholder="Filiação 2" type="text" class="form-control" required>
                    <label> Filiação 2 </label>
                </div>
                <div class="form-floating">
                    <input name="profissao" placeholder="Profissão do beneficiario" type="text" class="form-control" required>
                    <label> Profissão do beneficiario </label>
                </div>
                <div class="form-floating">
                    <input name="renda" placeholder="Renda do beneficiario" type="text" class="form-control" required>
                    <label> Renda do beneficiario </label>
                </div>
                <div class="form-floating">
                    <input name="nome_conjuge" placeholder="Nome do conjuge" type="text" class="form-control" required>
                    <label> Nome do conjuge </label>
                </div>

                <button class="btn w-100 btn-primary" type="submit"> Cadastrar </button>
            </div>
            
		</form>
    </body>
</html>
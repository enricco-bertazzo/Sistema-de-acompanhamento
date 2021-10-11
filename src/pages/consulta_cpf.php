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
        <form action="result_consulta_cpf.php" method="POST">
            <div class="card" id="formulario">
                <div class="form-floating">
                    <input name="cpf_query" placeholder="Nome completo do Beneficiario" type="text" class="form-control" required>
                    <label> Informe o CPF </label>
                </div>
                <button class="btn w-100 btn-primary" type="submit"> Pesquisar </button>
            </div>
		</form>
    </body>
</html>
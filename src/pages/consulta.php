<!DOCTYPE html>
<html>
    <head>
        <title> Sistema de Acompanhamento </title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>

    <body class="body text-center">
        <form class="cad" action="../php/query.php" method="POST">

            <div class="form-floating">
                <input name="cpf_query" placeholder="Nº do CPF do Beneficiario" type="text" class="form-control" required>
                <label> Nº do CPF do Beneficiario </label>
            </div>
            <button class="btn w-100 btn-primary" type="submit"> Pesquisar </button>

		</form>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title> Sistema de Acompanhamento </title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>

    <body class="body text-center">
        <form class="cad" action="../php/query_nome.php" method="POST">

            <div class="form-floating">
                <input name="nome_query" placeholder="Nome completo do Beneficiario" type="text" class="form-control" required>
                <label> Nome completo do Beneficiario </label>
            </div>

            <button class="btn w-100 btn-primary" type="submit"> Pesquisar </button>
		</form>
        <form class="cad" action="../php/query_endereco.php" method="POST">

            <div class="form-floating">
                <input name="comunidade_query" placeholder="Comunidade" type="text" class="form-control" required>
                <label> Comunidade </label>
            </div>
            <div class="form-floating">
                <input name="rua_query" placeholder="Rua" type="text" class="form-control" required>
                <label> Rua </label>
            </div>
            <div class="form-floating">
                <input name="numero_query" placeholder="Número da casa" type="text" class="form-control" required>
                <label> Número da casa </label>
            </div>

                <button class="btn w-100 btn-primary" type="submit"> Pesquisar </button>
        </form>

        <p class="mt-5 mb-3"> Deseja Cadastrar? <a href="cadastro.php"> Cadastre </a></p>
    </body>
</html>
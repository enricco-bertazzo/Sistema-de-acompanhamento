<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Acompanhamento</title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>

    <body class="body text-center">
        <form method="POST" action="../php/insert.php">
            <div class="cadastro">

                <div class="form-floating">
                    <input name="comunidade" placeholder="Comunidade" type="text" class="form-control" required>
                    <label for="comunidade"> Comunidade </label>
                </div>

                <div class="form-floating">
                    <input name="cadastro" placeholder="Nº do Cadastro" type="text" class="form-control" required>
                    <label for="cadastro"> Nº do Cadastro </label>
                </div>

                <div class="form-floating">
                    <input name="rua" placeholder="Nome da Rua" type="text" class="form-control" required>
                    <label for="rua"> Nome da Rua </label>
                </div>

                <div class="form-floating">
                    <input name="numero" placeholder="Nº da residencia" type="text" class="form-control" required>
                    <label for="numero"> Nº da residencia </label>
                </div>

                <div class="form-floating">
                    <input name="quadra" placeholder="Quadra da residencia" type="text" class="form-control" required>
                    <label for="quadra"> Quadra da residencia </label>
                </div>

                <div class="form-floating">
                    <input name="lote" placeholder="Lote da residencia" type="text" class="form-control" required>
                    <label for="lote"> Lote da residencia </label>
                </div>

                <div class="form-floating">
                    <input name="beneficiario" placeholder="Nome do Beneficiario" type="text" class="form-control" required>
                    <label for="beneficiario"> Nome do Beneficiario </label>
                </div>

                <div class="form-floating">
                    <input name="rg" placeholder="Nº RG do benefiario" type="text" class="form-control" required>
                    <label for="rg"> Nº RG do benefiario </label>
                </div>

                <div class="form-floating">
                    <input name="cpf" placeholder="Nº CPF do benefiario" type="text" class="form-control" required>
                    <label for="cpf"> Nº CPF do benefiario </label>
                </div>

                <div class="form-floating">
                    <input name="estado_civil" placeholder="Estado civil do beneficiario" type="text" class="form-control" required>
                    <label for="estado_civil"> Estado civil do beneficiario </label>
                </div>

                <div class="form-floating">
                    <input name="filiacao_1" placeholder="Filiação 1" type="text" class="form-control" required>
                    <label for="filiacao_1"> Filiação 1 </label>
                </div>

                <div class="form-floating">
                    <input name="filiacao_2" placeholder="Filiação 2" type="text" class="form-control" required>
                    <label for="filiacao_2"> Filiação 2 </label>
                </div>

                <div class="form-floating">
                    <input name="profissao" placeholder="Profissão do beneficiario" type="text" class="form-control" required>
                    <label for="profissao"> Profissão do beneficiario </label>
                </div>

                <div class="form-floating">
                    <input name="renda" placeholder="Renda do beneficiario" type="text" class="form-control" required>
                    <label for="renda"> Renda do beneficiario </label>
                </div>

                <div class="form-floating">
                    <input name="nome_conjuge" placeholder="Nome do conjuge" type="text" class="form-control" required>
                    <label for="nome_conjuge"> Nome do conjuge </label>
                </div>

                <button class="btn w-100 btn-primary" type="submit"> Cadastrar </button>

            </div>
		</form>
    </body>
</html>
while($rows_pd = mysqli_fetch_array($result_pd)){
                "<form action=`../php/update.php` method=`POST`>
                    <div class=`card` id=`formulario`>
                        <div class=`form-floating`>
                            <input name=`cadastro` placeholder=`Nº do Cadastro` type=`text` class=`form-control` value=`<?php echo $rows_dados['cadastro']  ?>` required>
                            <label> Nº do Cadastro </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`comunidade` placeholder=`Comunidade` type=`text` class=`form-control` value=`<?php echo $rows_dados['comunidade']  ?>` required>
                            <label> Comunidade </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`rua` placeholder=`Nome da Rua` type=`text` class=`form-control` value=`<?php echo $rows_dados['rua'] ?>` required>
                            <label> Nome da Rua </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`numero` placeholder=`Nº da residencia` type=`text` class=`form-control` value=`<?php echo $rows_dados['numero'] ?>` required>
                            <label> Nº da residencia </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`quadra` placeholder=`Quadra da residencia` type=`text` class=`form-control` value=`<?php echo $rows_dados['quadra'] ?>` required>
                            <label> Quadra da residencia </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`lote` placeholder=`Lote da residencia` type=`text` class=`form-control` value=`<?php echo $rows_dados['lote'] ?>` required>
                            <label> Lote da residencia </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`beneficiario` placeholder=`Nome do Beneficiario` type=`text` class=`form-control` value=`<?php echo $rows_dados['beneficiario'] ?>` required>
                            <label> Nome do Beneficiario </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`rg` placeholder=`Nº RG do benefiario` type=`text` class=`form-control` value=`<?php echo  $rows_dados['rg'] ?>`required>
                            <label> Nº RG do benefiario </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`cpf` placeholder=`Nº CPF do benefiario` type=`text` class=`form-control` value=`<?php echo $rows_dados['cpf'] ?>` required>
                            <label> Nº CPF do benefiario </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`estado_civil` placeholder=`Estado civil do beneficiario` type=`text` class=`form-control` value=`<?php echo $rows_dados['estado_civil']  ?>` required>
                            <label> Estado civil do beneficiario </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`filiacao_1` placeholder=`Filiação 1` type=`text` class=`form-control` value=`<?php echo $rows_dados['filiacao_1']  ?>`required>
                            <label> Filiação 1 </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`filiacao_2` placeholder=`Filiação 2` type=`text` class=`form-control` value=`<?php echo $rows_dados['filiacao_2']  ?>`required>
                            <label> Filiação 2 </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`profissao` placeholder=`Profissão do beneficiario` type=`text` class=`form-control` value=`<?php echo $rows_dados['profissao']  ?>`required>
                            <label> Profissão do beneficiario </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`renda` placeholder=`Renda do beneficiario` type=`text` class=`form-control` value=`<?php echo $rows_dados['renda'] ?>` required>
                            <label> Renda do beneficiario </label>
                        </div>
                        <div class=`form-floating`>
                            <input name=`nome_conjuge` placeholder=`Nome do conjuge` type=`text` class=`form-control` value=`<?php echo $rows_dados['nome_conjuge']  ?>`required>
                            <label> Nome do conjuge </label>
                        </div>

                        <button class=`btn w-100 btn-primary` type=`submit`> Alterar </button>
                    </div>

		        </form>"
            }
<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Acompanhamento</title>
    </head>
    <body>
        <form method="POST" action="../php/insert_pd.php">
			<input  name="pd" placeholder="Número do PD" type="text" required>
            <br>
			<input name="chegada" placeholder="Data de Chegada" type="text" required>
            <br>
            <input name="origem" placeholder="Origem" type="text" required>
            <br>
            <input name="processo" placeholder="Tipo de Processo" type="text" required>
            <br>
            <input name="descricao" placeholder="Descrição" type="text" required>
            <br>
            <input name="analista" placeholder="Analista do Setor" type="text" required>
            <br>
            <input name="encaminhado" placeholder="Encaminhado para" type="text" required>
            <br>
            <input name="data_encaminhado" placeholder="Data de Encaminhamento" type="text" required>
            <br>
            <input name="status" placeholder="Status" type="text" required>
            <br>
            <input name="total_dias" placeholder="Total de dias" type="text" required>
            <br>
			<button type="submit" style="width: 100px;"> Login </button>
			</form>
    </body>
</html>
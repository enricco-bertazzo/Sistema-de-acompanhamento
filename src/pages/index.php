<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Acompanhamento</title>
    </head>
    <body>
        <form method="POST" action="../php/insert.php">
			<input id="pd"placeholder="PD" type="text" required>
			<input id="chegada"placeholder="Data de Chegada" type="text" required>
            <input id="origem" placeholder="Origem" type="text" required>
            <input id="processo" placeholder="Tipo de Processo" type="text" required>
            <input id="descricao" placeholder="Descrição Sucinta" type="text" required>
            <input id="analista" placeholder="Analista do Setor" type="text" required>
            <input id="encaminhado" placeholder="Encaminhado para" type="text" required>
            <input id="data_encaminhado" placeholder="Data de Encaminhamento" type="text" required>
            <input id="status" placeholder="Status" type="text" required>
            <input id="total_dias" placeholder="Total de dias" type="text" required>
			<button type="submit" style="width: 100px;"> Login </button>
			</form>
    </body>
</html>
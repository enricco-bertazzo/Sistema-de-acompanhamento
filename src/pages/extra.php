<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Acompanhamento</title>
    </head>
    <body>
        <form method="POST" action="../php/insert_extra.php">
			<input  name="atend_presencial" placeholder="Atendimento Presencial" type="text" required>
            <br>
			<input name="atend_telefone" placeholder="Atendimento Telefone" type="text" required>
            <br>
            <input name="levan_campo" placeholder="Levantamento de Campo" type="text" required>
            <br>
            <input name="reunioes" placeholder="Reuniões" type="text" required>
            <br>
            <input name="outros" placeholder="Outros" type="text" required>
            <br>
			<button type="submit" style="width: 100px;"> Login </button>
			</form>
    </body>
</html>
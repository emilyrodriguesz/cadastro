<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Projeto Integração com Banco de Dados</title>
	</head>
	<body>
		<h1>Cadastro Cliente</h1>
		<form action="incluircliente.php" method="post">
			Nome: <input type="text" name="nome" maxlength="30">
			Email: <input type="email" name="email" maxlength="50">
			Data do Nascimento: <input type="date" name="data_nascimento" maxlength="20">
			<input type="submit" name="salvar" value="Salvar">
		</form>

	</body>
</html>
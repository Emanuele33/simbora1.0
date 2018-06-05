<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuário</title>
</head>
<body>
	<form action="processa_usu.php" method="POST">
		<input type="text" name="nome" placeholder="Nome">
		<input type="text" name="sobrenome" placeholder="Sobrenome">
		<input type="text" name="numero" placeholder="WhatsApp">
		<input type="text" name="login" placeholder="Login">
		<input type="password" name="senha" placeholder="Senha">
		<input type="submit" value="Cadastrar">
	</form>
	<a href="login.php">Faça Login</a>
	<br>
	<button class="button" onclick="window.location='index.php'">Voltar</button>
</body>
</html>
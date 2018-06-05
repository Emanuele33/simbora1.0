<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<body>
  <form action="processa_login.php" method="POST">
    <input type="text" name="login" placeholder="Login">
    <input type="password" name="senha" placeholder="Senha">
    <input type="submit" value="Logar">	
  </form>
	<a href="cads_usuario.php">Não sou Cadastrado</a>

  <button class="button" onclick="window.location='index.php'">Voltar</button>



</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Rotina</title>
</head>
<body>
<<<<<<< HEAD
	<?php $id = $_GET['id']; ?>
	<form action="processa_horario.php?id=<?=$id?>" method="POST">
=======
	
	<form action="processa_horario.php" method="POST">
>>>>>>> c5443b1ae2d62a6b7110a11d99a91dac3f7b4ff6
		Segunda-Feira:<input type="time" name="hora_segunda" placeholder="Hora"><br><br>
		Terça-Feira:<input type="time" name="hora_terca" placeholder="Hora"><br><br>
		Quarta-Feira:<input type="time" name="hora_quarta" placeholder="Hora"><br><br>
		Quinta-Feira:<input type="time" name="hora_quinta" placeholder="Hora"><br><br>
		Sexta-Feira:<input type="time" name="hora_sexta" placeholder="Hora"><br><br>
		Sábado:<input type="time" name="hora_sabado" placeholder="Hora"><br><br>
		Domingo:<input type="time" name="hora_domingo" placeholder="Hora"><br><br>
		<input type="submit" value="Cadastrar"><br><br>

		<a href="sair.php">Sair</a>

	</form>
</body>
</html>
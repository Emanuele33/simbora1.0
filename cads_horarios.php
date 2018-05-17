<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Rotina</title>
</head>
<body>
	<form action="processa_horario.php" method="POST">
		Segunda-Feira:<input type="time" name="hora_segunda" placeholder="Hora"><br><br>
		Terça-Feira:<input type="time" name="hora_terca" placeholder="Hora"><br><br>
		Quarta-Feira:<input type="time" name="hora_quarta" placeholder="Hora"><br><br>
		Quinta-Feira:<input type="time" name="hora_quinta" placeholder="Hora"><br><br>
		Sexta-Feira:<input type="time" name="hora_sexta" placeholder="Hora"><br><br>
		Sábado:<input type="time" name="hora_sabado" placeholder="Hora"><br><br>
		Domingo:<input type="time" name="hora_domingo" placeholder="Hora"><br><br>
		<input type="submit" value="Cadastrar"><br>
	</form>
</body>
</html>
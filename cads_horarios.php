<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Rotina</title>
</head>
<body>
	<?php $id = $_GET['id']; ?>
	<form action="processa_horario.php?id=<?=$id?>" method="POST">
		Nome:<input type="text" name="nome" placeholder="Nome"><br><br>
		Horário:<select name="horario">
  			<option value="00:00 - 00:30">00:00 - 00:30</option>
  			<option value="01:00 - 01:30">01:00 - 01:30</option>
  			<option value="02:00 - 02:30">02:00 - 02:30</option>
  			<option value="03:00 - 03:30">03:00 - 03:30</option>
  			<option value="04:00 - 04:30">04:00 - 04:30</option>
  			<option value="05:00 - 05:30">05:00 - 05:30</option>
  			<option value="06:00 - 06:30">06:00 - 06:30</option>
  			<option value="07:00 - 07:30">07:00 - 07:30</option>
  			<option value="08:00 - 08:30">08:00 - 08:30</option>
  			<option value="09:00 - 09:30">09:00 - 09:30</option>
  			<option value="10:00 - 10:30">10:00 - 10:30</option>
  			<option value="11:00 - 11:30">11:00 - 11:30</option>
  			<option value="12:00 - 12:30">12:00 - 12:30</option>
  			<option value="13:00 - 13:30">13:00 - 13:30</option>
  			<option value="14:00 - 14:30">14:00 - 14:30</option>
  			<option value="15:00 - 15:30">15:00 - 15:30</option>
  			<option value="16:00 - 16:30">16:00 - 16:30</option>
  			<option value="17:00 - 17:30">17:00 - 17:30</option>
  			<option value="18:00 - 18:30">18:00 - 18:30</option>
  			<option value="19:00 - 19:30">19:00 - 19:30</option>
  			<option value="20:00 - 20:30">20:00 - 20:30</option>
  			<option value="21:00 - 21:30">21:00 - 21:30</option>
  			<option value="22:00 - 22:30">22:00 - 22:30</option>
  			<option value="23:00 - 23:30">23:00 - 23:30</option>
		</select><br><br>
		<input type="text" name="onibus" placeholder="Linha de Ônibus">
		<input type="submit" value="enviar">

	</form>
	<a href="tabelahorarios.php"></a> 
</body>
</html>
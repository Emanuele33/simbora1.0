<?php 
include 'conexao.php';
session_start();
if ($_SESSION['logado'] == false){
	header('location:index.php');
}
?>
<!DOCTYPE html >
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Cadastrar Endereço</title>

</head>

<body>

	<form action="processa_cad.php" method="POST">
		<input type="text" name="name" placeholder="Nome">
		<input type="text" name="address" placeholder="Endereço">
		<input type="text" name="diasemana" placeholder="Dia da Semana">
		<input type="text" name="horariosaida" placeholder="Horário de Saída">
		<input type="text" name="horariovolta" placeholder="Horário de Volta">
		<input type="text" name="destino" placeholder="destino">
		<input type="submit" value="Cadastrar">
	</form><br>


	<a href="tabelahorarios.php"><button class="button"><span>Voltar</span></button></a> <br><br>

</body>
</html>
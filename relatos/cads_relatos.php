
<?php

include '../conexao.php';
session_start();
if ($_SESSION['logado'] == false){
	header('location:../index.php');
}
?>



<!DOCTYPE html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Cadastrar</title>
</head>
<body>
	<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<?php $id = $_GET['id']; ?>
	<form method="POST" action="processa_rel.php?id=<?=$id?>">
		<label>Nome: </label>
		<input type="text" name="name" placeholder="Nome"><br><br>

		<label>Endereço: </label>
		<input type="text" name="address" placeholder="Endereço do Ocorrido"><br><br>

		<label>Latitude: </label>
		<input type="text" name="lat" placeholder="Digite a Latitude"><br><br>

		<label>Longitude: </label>
		<input type="text" name="lng" placeholder="Digite a Longitude"><br><br>		

		<label>Tipo de Assédio:</label>
		<input type="text" name="type" placeholder="Verbal, Físico ..."><br><br>


		<label>Turno:</label>
		<input type="text" name="turno" placeholder="Período do dia em que aconteceu"><br><br>

		<label>Data:</label>
		<input type="datetime" name="data" placeholder="Data em que aconteceu"><br><br>	
		
		<label>Relato:</label>
		<input type="text" name="relato" placeholder="Seu relato"><br><br>
		<input type="submit" value="Cadastrar"><br><br>
	</form>
</body>
</html>















<!--<!DOCTYPE html >
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Cadastrar Endereço</title>

</head>

<body>
	
	<form action="processa_cad.php?id=<?=$id?>" method="POST">
		<input type="text" name="name" placeholder="Nome">
		<input type="text" name="address" placeholder="Endereço">
		<input type="text" name="diasemana" placeholder="Dia da Semana">
		<input type="text" name="horariosaida" placeholder="Horário de Saída">
		<input type="text" name="horariovolta" placeholder="Horário de Volta">
		<input type="text" name="destino" placeholder="destino">
		<input type="submit" value="Cadastrar">
	</form><br>


	<a href="tabelahorarios.php"></a> 

</body>
</html>
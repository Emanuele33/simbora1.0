
<?php
include"menu.php"; 
include 'conexao.php';
session_start();
if (!$_SESSION['logado']){
	header('location:index.php');
}
//$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabela de Horários</title>
</head>
<body>
	<!--<h1>Bem-Vinda, <?php //echo $_SESSION['usuario']; ?></h1>-->
	<h2>Tabela de Horários</h2>

	<form action="tabelahorarios.php" method="POST">
		<input type="text" name="buscar" placeholder="Pesquise por: Horários,Parada de Destino ou Parada de Origem">
	</form><br>
	<table class="quadrado" border="1">
		<tr>
			<th>Nome</th>
			<th>Parada de Origem</th>
			<th>Parada de Destino</th>
			<th>Horário</th>
			

		</tr>


		<?php
		$dbname = "simbora";
		$usuario="root";
		$senha = "";
		$host = "localhost";
		$strcon = mysqli_connect($host,$usuario,$senha,$dbname) or die('Erro ao conectar ao banco!');
		if (isset($_POST['buscar'])) {
			$buscar = $_POST['buscar'];
			# code...
			$sql = "SELECT * FROM tabela_horarios WHERE paradaorigem LIKE '%".$buscar."%'";
			$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
// $name = mysqli_query($strcon, "SELECT hora_segunda,hora_terca,hora_quarta,hora_quinta,hora_sexta,hora_sabado,hora_domingo,usuarios_id  FROM tabela_horarios") or die(mysqli_error($strcon));
// $re = mysqli_fetch_array($name);
			while($dados =  mysqli_fetch_assoc($resultado)) {
				$id = $dados['usuarios_id'];
				$nome = $dados['nome'];
				$paradaorigem = $dados['paradaorigem'];
				$paradadestino = $dados['paradadestino'];
				$horario = $dados['horario'];




				echo "<tr>
				<td> ".$nome."</td>
				<td> ".$paradaorigem."</td>
				<td> ".$paradadestino."</td>
				<td>".$horario."</td> 
				<td><a href='chat/index.php?id=' . $id'>Iniciar Conversa</a></td>

				</tr>";
			}
		}

		?>



	</table>
	<br>
</body>
</html> 
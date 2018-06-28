<?php 
include 'conexao.php';
session_start();
if ($_SESSION['logado'] == false){
	header('location:index.php');
}
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
		$sql = "SELECT * FROM tabela_horarios WHERE paradadestino = 'ifpe'";
		$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
// $name = mysqli_query($strcon, "SELECT hora_segunda,hora_terca,hora_quarta,hora_quinta,hora_sexta,hora_sabado,hora_domingo,usuarios_id  FROM tabela_horarios") or die(mysqli_error($strcon));
// $re = mysqli_fetch_array($name);
		while ($dados = mysqli_fetch_assoc($resultado)){
			$id = $dados['usuarios_id'];
			$nome= $dados['nome'];
			$paradaorigem= $dados['paradaorigem'];
			$paradadestino= $dados['paradadestino'];
			$horario = $dados['horario'];
			
			echo "<tr>
			<td> ".$nome."</td>
			<td> ".$paradaorigem."</td>
			<td> ".$paradadestino."</td>
			<td>".$horario."</td> 
			
			</tr>";
			?>
			<?php
		}
		mysqli_close($strcon);
		?>
		
		<a href="mapa.php?id=<?=$_GET['id']?>">Veja sua Rota</a><br> 
		<a href="marcadores.php?id=<?=$_GET['id']?>">Cadastre seu Local</a><br>
		<button class="button" onclick="window.location='cads_horarios.php?id=<?=$_GET['id']?>'">Voltar</button><br><br>
		<a href="sair.php">Sair</a><br>
	</table>
	<br>
</body>
</html>
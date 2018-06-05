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
	<h1>Bem-Vinda, <?php echo $_SESSION['usuario']; ?></h1>
	<h2>Tabela de Horários</h2>
	<table class="quadrado" border="1">
		<tr>
			<th>Nome</th>
			<th>Horário</th>
			<th>Ônibus</th>
		</tr>


		<?php
		$dbname = "simbora";
		$usuario="root";
		$senha = "";
		$host = "localhost";
		$strcon = mysqli_connect($host,$usuario,$senha,$dbname) or die('Erro ao conectar ao banco!');
		$sql = "SELECT * FROM tabela_horarios";
		$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
// $name = mysqli_query($strcon, "SELECT hora_segunda,hora_terca,hora_quarta,hora_quinta,hora_sexta,hora_sabado,hora_domingo,usuarios_id  FROM tabela_horarios") or die(mysqli_error($strcon));
// $re = mysqli_fetch_array($name);
		while ($dados = mysqli_fetch_assoc($resultado)){
			$id = $dados['usuarios_id'];
			$nome= $dados['nome'];
			$horario = $dados['horario'];
			$onibus = $dados['onibus'];
			echo "<tr>
			<td> ".$nome."</td>
			<td>".$horario."</td> 
			<td>".$onibus."</td> 
			</tr>";
			?>
			<?php
		}
		mysqli_close($strcon);
		?>
		
		<a href="cads_horarios.php?id=<?=$_GET['id']?>">Cadastre seu Horário</a><br> 
		<a href="cads_lugar.php?id=<?=$_GET['id']?>">Cadastre sua Rotina</a><br>
		<a href="sair.php">Sair</a><br>
	</table>
	<br>
</body>
</html>
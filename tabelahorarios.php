<?php 
include 'conexao.php';
session_start();
if ($_SESSION['logado'] == false) {
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
	<table class="quadrado" border="1">
		<tr>
			<th>Segunda-Feira</th>
			<th>Terça-Feira</th>
			<th>Quarta-Feira</th>
			<th>Quinta-Feira</th>
			<th>Sexta-Feira</th>
			<th>Sábado</th>
			<th>Domingo</th>
		</tr>
	

<?php
$dbname = "simbora";
$usuario="root";
$senha = "";
$host = "localhost";
$strcon = mysqli_connect("$host","$usuario","$senha","$dbname") or die('Erro ao conectar ao banco!');
$sql = "SELECT * FROM tabela_horarios";
$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');

$name = mysqli_query($strcon, "SELECT hora_segunda,hora_terca,hora_quarta,hora_quinta,hora_sexta,hora_sabado,hora_domingo  FROM tabela_horarios") or die(mysqli_error($strcon));
$re = mysqli_fetch_array($name);
while ($dados = mysqli_fetch_array($resultado)){
?>

<?php 
$id = $dados['id'];
$hora_segunda= $dados['hora_segunda'];
$hora_terca = $dados['hora_terca'];
$hora_quarta = $dados['hora_quarta'];
$hora_quinta = $dados['hora_quinta'];
$hora_sexta = $dados['hora_sexta'];
$hora_sabado = $dados['hora_sabado'];
$hora_domingo = $dados['hora_domingo'];

   echo "<tr>
      <td> ".$hora_segunda."</td>
      <td>".$hora_terca."</td>
      <td>".$hora_quarta."</td>  
      <td>".$hora_quinta."</td>  
      <td>".$hora_sexta."</td>  
      <td>".$hora_sabado."</td>  
      <td>".$hora_domingo."</td>  
     	</tr>";

?>
<?php
  	}
   mysqli_close($strcon);
?>
</table>
   <br>
</body>
</html>

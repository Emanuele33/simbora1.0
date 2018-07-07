
<?php 
include '../conexao.php';
session_start();
if (!$_SESSION['logado']){
	header('location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title>Sistema de chat</title>
	<meta charset="utf-8">
</head>
<body>
	<div>
		<div class="mensagens">
			<?php 
			$select = "SELECT * FROM mensagens";
			$select = $conn->query($select);
			foreach ($select->fetchAll() as $value) {
				echo "<p style='color:#fff'>".$value['mensagens']."<hr>";

			}
			?>
		</div>

		<div class="conteudo">
			<form action="recebemens.php" method="POST"> 
				<input type="text" name="mensagens" class="inputmensagens" placeholder="Digite sua mensagem">
				<input type="submit" class="btn-enviar">
			</form>
		</div>
	</div>
</body>
</html>
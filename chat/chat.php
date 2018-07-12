<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/chat.css">
	<script type="text/javascript">
		function Nova() {
			setTimeout("window.location='chat.php'",10);
		}
	</script>
</head>
<body>
	<div class="container">
		<center>
			<div class="superior">
				<?php
				$query = mysqli_connect("localhost","root","","chat");

				$np = mysqli_query($query,"SELECT * FROM mensagens");
				while ($ln = mysqli_fetch_array($np)) {
					$usuario = $ln['usuario'];
					$msg = $ln['msg'];
				}
				echo "$usuario : $msg";

				?>
			</div>
			<div class="campos">
				<form method="POST" action="enviar.php">
					<input type="text" name="usuario" placeholder="Usuário">
					<input type="text" name="msg" placeholder="Mensagens">
					<input type="submit" name="enviar" onclick="Nova()">
				</form>
			</div>
		</center>
	</div>
</body>
</html>
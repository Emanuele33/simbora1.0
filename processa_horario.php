<?php 
include 'conexao.php';


$hora_segunda = $_POST['hora_segunda'];
$hora_terca = $_POST['hora_terca'];
$hora_quarta = $_POST['hora_quarta'];
$hora_quinta = $_POST['hora_quinta'];
$hora_sexta = $_POST['hora_sexta'];
$hora_sabado = $_POST['hora_sabado'];
$hora_domingo = $_POST['hora_domingo'];

$sql = "INSERT INTO tabela_horarios(hora_segunda,hora_terca,hora_quarta,hora_quinta,hora_sexta,hora_sabado,hora_domingo) VALUES ('$hora_segunda','$hora_terca','$hora_quarta','$hora_quinta','$hora_sexta','$hora_sabado','$hora_domingo')";
$insert_member_res = mysqli_query($conn,$sql);
if (mysqli_affected_rows($conn)>0) {
	echo "<p>Cadastro Registrado!</p>";
}

?>


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
	echo "<ol>
		Horário de Segunda-Feira:".$hora_segunda."<br>
		Horário de Terça-Feira:".$hora_terca."<br>
		Horário de Quarta-Feira:".$hora_quarta."<br>
		Horário de Quinta-Feira:".$hora_quinta."<br>
		Horário de Sexta-Feira:".$hora_sexta."<br>
		Horário de Sábado:".$hora_sabado."<br>
		Horário de Domingo:".$hora_domingo."<br>
		
		</ol>";
		
		
}

?>




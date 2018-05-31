<?php 
include 'conexao.php';
session_start();
$id = $_GET['id'];
$usuarios_id = $id;
$hora_segunda = $_POST['hora_segunda'];
$hora_terca = $_POST['hora_terca'];
$hora_quarta = $_POST['hora_quarta'];
$hora_quinta = $_POST['hora_quinta'];
$hora_sexta = $_POST['hora_sexta'];
$hora_sabado = $_POST['hora_sabado'];
$hora_domingo = $_POST['hora_domingo'];
$consulta = $conn->prepare("INSERT INTO tabela_horarios(hora_segunda,hora_terca,hora_quarta,hora_quinta,hora_sexta,hora_sabado,hora_domingo,usuarios_id) VALUES(?,?,?,?,?,?,?,?)");
$consulta->bindParam(1,$hora_segunda);
$consulta->bindParam(2,$hora_terca);
$consulta->bindParam(3,$hora_quarta);
$consulta->bindParam(4,$hora_quinta);
$consulta->bindParam(5,$hora_sexta);
$consulta->bindParam(6,$hora_sabado);
$consulta->bindParam(7,$hora_domingo);
$consulta->bindParam(8,$usuarios_id);
if ($consulta->execute()){
	$res = $consulta->fetch(PDO::FETCH_ASSOC);
	$id = $res['id'];
	header('location:tabelahorarios.php?id=' . $id);
}else{
	echo "Erro";
}
//header('location:tabelahorarios.php');
?>
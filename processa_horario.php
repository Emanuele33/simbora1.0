<?php 
include 'conexao.php';
session_start();

<<<<<<< HEAD
$id = $_GET['id'];
$usuarios_id = $id;
=======
>>>>>>> c5443b1ae2d62a6b7110a11d99a91dac3f7b4ff6
$hora_segunda = $_POST['hora_segunda'];
$hora_terca = $_POST['hora_terca'];
$hora_quarta = $_POST['hora_quarta'];
$hora_quinta = $_POST['hora_quinta'];
$hora_sexta = $_POST['hora_sexta'];
$hora_sabado = $_POST['hora_sabado'];
$hora_domingo = $_POST['hora_domingo'];

<<<<<<< HEAD

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
	header('location:tabelahorarios.php');
}else{
	echo "Erro";
}

//header('location:tabelahorarios.php');

?>
=======

$consulta = $conn->prepare("INSERT INTO tabela_horarios(hora_segunda,hora_terca,hora_quarta,hora_quinta,hora_sexta,hora_sabado,hora_domingo) VALUES(?,?,?,?,?,?,?)");

$consulta->bindParam(1,$hora_segunda);
$consulta->bindParam(2,$hora_terca);
$consulta->bindParam(3,$hora_quarta);
$consulta->bindParam(4,$hora_quinta);
$consulta->bindParam(5,$hora_sexta);
$consulta->bindParam(6,$hora_sabado);
$consulta->bindParam(7,$hora_domingo);
$consulta->execute();

header('location:tabelahorarios.php');

?>
>>>>>>> c5443b1ae2d62a6b7110a11d99a91dac3f7b4ff6

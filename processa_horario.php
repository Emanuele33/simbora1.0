<?php 
include 'conexao.php';
session_start();
$id = $_GET['id'];
$usuarios_id = $id;

$nome = $_POST['nome'];
$horario = $_POST['horario'];
$onibus = $_POST['onibus'];



$consulta = $conn->prepare("INSERT INTO tabela_horarios(nome,horario,onibus,usuarios_id) VALUES(?,?,?,?)");
$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$horario);
$consulta->bindParam(3,$onibus);
$consulta->bindParam(4,$usuarios_id);
if ($consulta->execute()){
	header('location:tabelahorarios.php?id=' . $id);
}else{
	echo "Erro";
}
//header('location:tabelahorarios.php');
?>
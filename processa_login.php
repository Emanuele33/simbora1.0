<?php 
require_once 'conexao.php';
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];
$consulta = $conn->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ?");
$consulta->bindParam(1,$login);
$consulta->bindParam(2,$senha);
$res = $consulta->fetch(PDO::FETCH_ASSOC);
$consulta->execute();

if ($consulta->rowCount() >= 1) {
    $id = $res['id'];
	header('location:tabelahorarios.php?id=<?$id?>');
}else{
	header('location:index.php');
}


?>
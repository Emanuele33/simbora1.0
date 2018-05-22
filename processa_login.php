<?php 
require_once 'conexao.php';
session_start();

$_SESSION['logado'] = false;
$_SESSION['usuario'] = "";
$login = $_POST['login'];
$senha = $_POST['senha'];
$consulta = $conn->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ?");
$consulta->bindParam(1,$login);
$consulta->bindParam(2,$senha);

$consulta->execute();

if ($consulta->rowCount() >= 1) {
    $_SESSION['usuario'] = $login;
    $_SESSION['logado'] = true;
	header('location:paginahorarios.php');
}else{
	header('location:index.php');
}


?>
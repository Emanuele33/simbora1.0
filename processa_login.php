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
<<<<<<< HEAD
$res = $consulta->fetch(PDO::FETCH_ASSOC);
$consulta->execute();

if ($consulta->rowCount() >= 1) {
    $id = $res['id'];
	header('location:tabelahorarios.php?id=<?$id?>');
=======

$consulta->execute();

if ($consulta->rowCount() >= 1) {
    $_SESSION['usuario'] = $login;
    $_SESSION['logado'] = true;
	header('location:paginahorarios.php');
>>>>>>> c5443b1ae2d62a6b7110a11d99a91dac3f7b4ff6
}else{
	header('location:index.php');
}


?>
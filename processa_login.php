

<?php 
session_start();
include ("conexao.php");

$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = mysqli_query($conn,"SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'");
$row = mysqli_fetch_array($sql);

if ($row > 0) {
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['senha'] = $_POST['senha'];
	header('location:cads_horarios.php');
}else{
	header('location:login.php');
	
}


?>

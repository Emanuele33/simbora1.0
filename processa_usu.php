<?php 
include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$login = $_POST['login'];
$senha = $_POST['senha'];


$consulta = $conn->prepare("INSERT INTO usuarios(nome,sobrenome,login,senha) VALUES(?,?,?,?)");
$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$sobrenome);
$consulta->bindParam(3,$login);
$consulta->bindParam(4,$senha);

$consulta->execute();
header('location:cads_horarios.php');



?>
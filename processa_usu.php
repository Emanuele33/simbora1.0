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
<<<<<<< HEAD
$consulta->execute();

$consulta = $conn->prepare("SELECT * FROM usuarios WHERE login = '$login'");
$consulta->execute();
$res = $consulta->fetch(PDO::FETCH_ASSOC);
$id = $res['id'];
header('location:tabelahorarios.php?id=' . $id);
=======

$consulta->execute();
header('location:cads_horarios.php');
>>>>>>> c5443b1ae2d62a6b7110a11d99a91dac3f7b4ff6



?>
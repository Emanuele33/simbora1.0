<?php

include '../conexao.php';

$mensagens = $_POST['mensagens'];
//$usuario = $_SESSION['login'];

$consulta=$conn->prepare("INSERT INTO mensagens(mensagens) VALUES(?)");
$consulta->bindParam(1,$mensagens);
$consulta->execute();
header('location:index.php');

?>
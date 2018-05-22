<?php 
include 'conexao.php';

$name = $_POST['name'];
$address = $_POST['address'];
$diasemana = $_POST['diasemana'];
$horariosaida = $_POST['horariosaida'];
$horariovolta = $_POST['horariovolta'];
$destino = $_POST['destino'];


$consulta = $conn->prepare("INSERT INTO markers(name,address,diasemana,horariosaida,horariovolta,destino) VALUES(?,?,?,?,?,?)");
$consulta->bindParam(1,$name);
$consulta->bindParam(2,$address);
$consulta->bindParam(3,$diasemana);
$consulta->bindParam(4,$horariosaida);
$consulta->bindParam(5,$horariovolta);
$consulta->bindParam(6,$destino);




$consulta->execute();



?>
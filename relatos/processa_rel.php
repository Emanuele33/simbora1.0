<?php 
include '../conexao.php';
session_start();

$id = $_GET['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$type = $_POST['type'];
$turno = $_POST['turno'];
$data = $_POST['data'];
$relato = $_POST['relato'];
$usuarios_id = $_GET['id'];



$consulta = $conn->prepare("INSERT INTO relatos(name,address,lat,lng,type,turno,data,relato,usuarios_id) VALUES(?,?,?,?,?,?,?,?,?)");
$consulta->bindParam(1,$name);
$consulta->bindParam(2,$address);
$consulta->bindParam(3,$lat);
$consulta->bindParam(4,$lng);
$consulta->bindParam(5,$type);
$consulta->bindParam(6,$turno);
$consulta->bindParam(7,$data);
$consulta->bindParam(8,$relato);
$consulta->bindParam(9,$usuarios_id);
if ($consulta->execute()){
	header('location:relatos.php?id=' . $id);
}else{
	echo "Erro";
}
//header('location:tabelahorarios.php');
?>
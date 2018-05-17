<?php 
session_start();
ob_start();
include_once("conexao.php");

//recebe os dados do formulário
$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);
$name = $dados['name'];
$address = $dados['address'];
$diasemana = $dados['diasemana'];
$horariosaida = $dados['horariosaida'];
$horariovolta = $dados['horariovolta'];
$destino = $dados['destino'];
//salva os dados do bd
$result_markers = "INSERT INTO markers(name,address,diasemana,horariosaida,horariovolta,destino) VALUES ('$name', '$address', '$diasemana', '$horariosaida', '$horariovolta','$destino')";

$resultado_markers = mysqli_query($conn, $result_markers);

if ($resultado_markers) {
	echo "success<br>";
	header('location:index.php');
} else
	echo "fail<br>";

?>
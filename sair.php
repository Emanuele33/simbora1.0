<?php
session_start();    
unset(
    $_SESSION['logado'],
	$_SESSION['usuario']
);    
$_SESSION['logindeslogado'] = "Deslogado com sucesso";
header("Location: index.php");
?>
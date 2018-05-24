<?php
session_start();    
unset(
    $_SESSION['logado'],
	$_SESSION['usuario']
);    
header('location:index.php');
?>
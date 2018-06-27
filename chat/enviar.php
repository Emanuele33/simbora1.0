<?php 

$con = @mysqli_connect('localhost','root','');
$xl = mysqli_select_db($con,'chat');
?>

<?php 
$usuario = $_POST['usuario'];
$msg = $_POST['msg'];

$query = mysqli_connect("localhost","root","","chat");
$sql = mysqli_query($query,"INSERT INTO mensagens(usuario,msg) VALUES('$usuario','$msg')");

if ($sql>0) {
	echo "Mensagens enviadas";
	header('location:chat.php');
}else{
	echo "Algo deu errado";
}

?>
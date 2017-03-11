<?php session_start(); 

 
   #include("conexion2.php"); 
   #$link=Conectarse(); 

$usuario=$_REQUEST['usuario']; 
$password=$_REQUEST['passwd'];
$password2=$_REQUEST['passwd2'];
$email=$_REQUEST['email'];

echo "Usuario: $usuario <br>";
echo "Password: $password <br>";

$link = mysqli_connect("localhost","id1044703_hackpuebla","qaws1234","id1044703_hackpuebla");
mysqli_select_db($link,"id1044703_hackpuebla");
$result = mysqli_query($link,"select username from cuenta_usuario where username='$usuario'");
$count = mysqli_num_rows($result);

if($count == 1){
	header("Location:registro_fail.php");
}else{
	if($password != $password2){
		header("Location:registro_fail_passwd.php");
	}else{
		//$fecha = (string)date("Y-m-d");
		mysqli_query($link,"
		INSERT INTO cuenta_usuario (username, password, correo) 
		values ('$usuario','$password','$email')");
		
		header("Location:index_usuario.php");
	}
}  
 mysqli_close($link);
?> 	
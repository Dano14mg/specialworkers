<?php session_start(); 

 
   #include("conexion2.php"); 
   #$link=Conectarse(); 

$usuario=$_REQUEST['usuario']; 
$password=$_REQUEST['passwd'];

echo "Usuario: $usuario <br>";
echo "Password: $password <br>";

$link = mysqli_connect("localhost","id1044703_hackpuebla","qaws1234","id1044703_hackpuebla");
mysqli_select_db($link,"id1044703_hackpuebla");
$result = mysqli_query($link,"select password,username from cuenta_usuario where username='$usuario'");

   if($row = mysqli_fetch_array($result))
      {
        if($row["password"] == $password)
           {
			$_SESSION["k_username"] = $row['username'];
            echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
			header("Location:index_usuario.php");
           }
        else header("Location:error_Password.php");
    }
   else header("Location:error_Username.php");
 mysqli_close($link);
?> 
<?php 
include("conexion.php");
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['contraseña'];
$resultado = mysqli_query($conexion, "SELECT * FROM admin WHERE usuario = '$usuario' AND clave = '$clave'");
$filas = mysqli_num_rows($resultado);
if ($filas == 1) {
	while ($datos = mysqli_fetch_array($resultado)) {
		$_SESSION['user']=$datos;

	}
	header("location:indexadmin.php");	
	
}else{
  header("location:login.html");
}	


?>
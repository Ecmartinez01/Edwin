<?php
include ("conexion.php");
session_start();
$usuario =$_POST['usuario'];
$clave =$_POST['clave'];
$resultado = mysqli_query($conexion, "SELECT * FROM  login WHERE usuario = '$usuario' AND clave = '$clave'");
$filas = mysqli_num_rows($resultado);
echo "SELECT * FROM  login WHERE usuario = '$usuario' AND clave = '$clave'";
if ($filas == 1) {
	while ($datos = mysqli_fetch_array($resultado)) {
		$_SESSION['user']=$datos;

	}
	header("location:usuario.php");	
	
}else{
  header("location:login.html");
}	


?>
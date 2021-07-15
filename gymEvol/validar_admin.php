<?php 
include("conexion.php");
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$consulta = "SELECT * FROM login_admin WHERE usuario = '$usuario' AND clave = '$clave'";
$result =mysqli_query($conexion,$consulta);
$array = mysqli_num_rows($result);
if ($array == 1){
	while ($datos = mysqli_fetch_array($result)) {
	  $_SESSION['admin'] = $datos;
	}
	header("location:new_index.php");  
}else{
	header("location:login_admin.html");
}


?>
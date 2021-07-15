<?php
include("conexion.php");
$iden = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];

$insert = "INSERT INTO entrenador VALUES ('$iden','$nombre','$apellido',$telefono,'$direccion','$correo')";
$consulta = mysqli_query($conexion,$insert);
if ($consulta) {
	  echo "<script>alert('Se inserto correctamente');window.location.href='admin.php';</script>";

}else{
}

?>
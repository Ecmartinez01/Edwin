<?php 
include("conexion.php");
include("admin.php");
$id = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$update = "UPDATE entrenador SET nombre = '$nombre', apellido = '$apellido', telefono = $telefono, direccion = '$direccion', correo = '$correo' WHERE identificacion = $id ";
$consulta = mysqli_query($conexion,$update);	
if ($consulta) {
	echo "<script>alert('Se actualizo correctamente');window.location.href='mostrar_entrenador.php';</script>";
}else{
	echo "no actualiza";;
 }	
 ?>
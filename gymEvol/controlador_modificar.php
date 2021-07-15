<?php 
include("conexion.php");
include("admin.php");
$id = $_POST['identificacion'];
$usuario = $_POST['usuario'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$update = "UPDATE login SET usuario = '$usuario', telefono = $telefono, correo = '$correo', clave = $clave WHERE identificacion = $id ";
$consulta = mysqli_query($conexion,$update);	
if ($consulta) {
	echo "<script>alert('Se actualizo correctamente');window.location.href='mostrar_usuarios.php';</script>";
}else{
	echo "no actualiza";;
 }	
 ?>


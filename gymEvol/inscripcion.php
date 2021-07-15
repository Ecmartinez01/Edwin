<?php
include("conexion.php");
$identificacion =$_POST['identificacion'];
$usuario =$_POST['usuario'];
$Telefono =$_POST['Telefono'];
$correo =$_POST['correo'];
$clave =$_POST['clave'];
$insert= " INSERT INTO login VALUES ('$identificacion','$usuario','$Telefono','$correo','$clave')";
$consulta= mysqli_query($conexion,$insert);

if ($consulta){
  echo "<script>alert('Se inserto correctamente');window.location.href='login.html';</script>";
  
}

?>

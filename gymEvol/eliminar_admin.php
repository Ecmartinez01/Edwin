<?php
include("conexion.php");
include("admin.php");
if (!empty($_POST)) {
	$identi = $_POST['iden'];
	$borrar = "DELETE FROM login_admin WHERE identificacion = $identi";
	$sql = mysqli_query($conexion,$borrar);
	if ($sql) {
		echo "<script> alert('Se borro correctamente');window.location.href='mostrar_admin.php';</script>";
	 }else{
	 	echo "<script>alert('no se pudo eliminar');window.location.href='eliminar_admin.php';</script>";
	 }
}

$identificacion = $_GET['cod'];
$sql= "SELECT * FROM login_admin WHERE identificacion = $identificacion";
$consulta = mysqli_query($conexion,$sql);
while ($dates = mysqli_fetch_array($consulta)) {
	$usuario =$dates['usuario'];
	$ide = $dates['identificacion'];
}
?>
<body>
<center><h1><strong>Esta seguro de eliminar el administrador <?php echo $usuario." con la identificacion ".$ide; ?></strong></h1>
<form action="eliminar_admin.php" method="POST">
	<input type="hidden" name="iden" value="<?php echo $identificacion; ?>">
	<input type="submit" value="eliminar" class="btn btn-danger">
	<a href="mostrar_usuarios.php" class="btn btn-primary">cancelar</a>	
</form></center>
		
</body>

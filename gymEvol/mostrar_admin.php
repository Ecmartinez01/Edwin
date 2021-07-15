<?php
include ('conexion.php');
include ('admin.php');
?>

<!--arreglar el tamaño de la tabla  -->
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
</head>
<body>

<div class="container">
<div class="container">
	
<table border="1px" align="center" class="table table-dark" style="margin-top: -23px;">
	
	<tr>
		<td><div class="btn btn-primary btn-large">ADMINISTRADORES</div></td>

	</tr>
	<tr>
		<th  scope="col">Identificaion </th>
		<th  scope="col">Usuario</th>
		<th  scope="col">Telefono</th>
		<th  scope="col">Correo</th>
		<th  scope="col">Modificar</th>
		<th  scope="col">Eliminar</th>

	</tr>
	<?php $sql= "SELECT * FROM login_admin";
	 $registros = mysqli_query($conexion,$sql);
	 while ($consulta = mysqli_fetch_array($registros)) {
	 
	?>

	<tr>
		<td><?php echo $consulta['identificacion']?> </td>
		<td><?php echo $consulta['usuario']?> </td>
		<td><?php echo $consulta['telefono']?> </td>
		<td><?php echo $consulta['correo']?> </td>
	    <td><?php echo "<a href='modificar_admin.php?cod=$consulta[clave]'> <ion-icon name = 'create-outline' size = 'large'></ion-icon ></a>";?></td>
	    <td><?php echo "<a href='eliminar_admin.php?cod=$consulta[identificacion]'> <ion-icon name = 'trash-outline' size ='large'> </ion-icon></a>";?></td>
	    

	</tr>

 <?php  } ?>
</table>
</div>
</div>
</body>
</html>

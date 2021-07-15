<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>registros</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css1/mostrar.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark " style="background: rgba(27,34,176,.1);">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand"  href="indexadmin.php">Inicio</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="empleado.php">Empleados</a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link" >Hoteles a modificar</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="buscar.php" method="post">
      <input class="form-control mr-sm-2" name="codigo" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info" type="submit">Busacar hotel</button>
    </form>
  </div>
</nav>
<table border="2px" align="center" class="table table-dark" style="background: rgba(0,0,0,.3);">
	<tr>
		<td style=" background:rgba(27,34,176,.3);">codigo</td>
		<td style=" background:rgba(27,34,176,.3);">nombre</td>
		<td style=" background:rgba(27,34,176,.3);">telefono</td>
		<td style=" background:rgba(27,34,176,.3);">direccion</td>
		<td style=" background:rgba(27,34,176,.3);">eliminar</td>
		<td style=" background:rgba(27,34,176,.3);">modificar</td>

	</tr>
	<?php $sql= "SELECT * FROM usuario";
	 $registros = mysqli_query($conexion,$sql);
	 while ($consulta = mysqli_fetch_array($registros)) {
	 
	?>
	<tr>
		<td><?php echo $consulta['identificacion']?> </td>
		<td><?php echo $consulta['nombre']?> </td>
		<td><?php echo $consulta['telefono']?> </td>
		<td><?php echo $consulta['correo']?> </td>
	    <td><?php echo "<a href='eliminar.php?cod=$consulta[codigo]'>eliminar</a>";?></td>
	    <td><?php echo "<a href='modificar.php?cod=$consulta[codigo]'>modificar</a>";?></td>
	    

	</tr>

 <?php  } ?>
</table>

<br><br>
<center><a href="insertarhotel.php"><button class="btn btn-outline-info btn-lg" style="padding: 8px;"  >Registrar hotel</button></a></center>

<div>
<?php 
if (isset($_GET['up_ok'])): 
 ?>
 <script>
 	alert('se actualizo');

 </script>
<?php endif; ?>
</body>

</html>


<?php
include("conexion.php");
include("admin.php");

$cod = $_GET['cod'];
$consulta = "SELECT * FROM entrenador WHERE identificacion = '$cod'";
$sql = mysqli_query($conexion,$consulta);
$num = mysqli_num_rows($sql);
$fecth = mysqli_fetch_array($sql);
 if ($num == 0) {
 	echo "EL USUARIO NO EXISTE";

 }else{

  ?>
  <head>
  	<link rel="stylesheet" type="text/css" href="css1/estilos.css">
  </head>
  <body>
  	<div class="contenedor" style="margin-top:-150px;">
  <form action ="mod_entrenador.php" class="form" method="POST">
    <div class="encabezado">
     <h1 class="titulo">M<span>odificar entrenador</span></h1>
    </div>

    <label for = "codigo1" class="label">Identificacion</label>
      <input type="text"  name="identificacion" placeholder="Identificacion" class="input" value="<?php echo $fecth['identificacion']?>">

      <label for = "telefono1" class="label">Nombre</label>
    <input type="text"  name="nombre" placeholder="nombre" class="input" value="<?php echo $fecth['nombre']?>">

       <label for = "telefono1" class="label">Apellido</label>
    <input type="text"  name="apellido" placeholder="apellido" class="input" value="<?php echo $fecth['apellido']?>">

   <label for = "telefono1" class="label">telefono</label>
    <input type="text"  name="telefono" placeholder="telefono" class="input" value="<?php echo $fecth['telefono']?>">

       <label for = "telefono1" class="label">Direccion</label>
    <input type="text"  name="direccion" placeholder="direccion" class="input" value="<?php echo $fecth['direccion']?>">
      <label for = "telefono1" class="label">correo</label>
    <input type="text"  name="correo" placeholder="correo" class="input" value="<?php echo $fecth['correo']?>">
    <input type="submit" value="enviar" class="boton">
  </form>

</div> 
<?php 
}
 ?>	
  </body>
<?php
include("conexion.php");
include("admin.php");

$cod = $_GET['cod'];
$consulta = "SELECT * FROM login WHERE clave = '$cod'";
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
  <form action ="controlador_modificar.php" class="form" method="POST">
    <div class="encabezado">
     <h1 class="titulo">M<span>odificar usuario</span></h1>
    </div>

    <label for = "codigo1" class="label">Identificacion</label>
      <input type="text"  name="identificacion" placeholder="Identificacion" class="input" value="<?php echo $fecth['identificacion']?>">

      <label for = "telefono1" class="label">Usuario</label>
    <input type="text"  name="usuario" placeholder="usuario" class="input" value="<?php echo $fecth['usuario']?>">

       <label for = "telefono1" class="label">Telefono</label>
    <input type="text"  name="telefono" placeholder="Telefono" class="input" value="<?php echo $fecth['telefono']?>">

   <label for = "telefono1" class="label">Correo</label>
    <input type="text"  name="correo" placeholder="correo" class="input" value="<?php echo $fecth['correo']?>">

       <label for = "telefono1" class="label">Clave</label>
    <input type="password"  name="clave" placeholder="clave" class="input" value="<?php echo $fecth['clave']?>">
    <input type="submit" value="enviar" class="boton">
  </form>

</div> 
<?php 
}
 ?>	
  </body>

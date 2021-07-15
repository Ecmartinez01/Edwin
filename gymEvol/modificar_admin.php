<?php
include("conexion.php");
include("admin.php");

$cod = $_GET['cod'];
$consulta = "SELECT * FROM login_admin WHERE clave = '$cod'";
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
  <form action ="mod_admin.php" class="form" method="POST">
    <div class="encabezado">
     <h1 class="titulo">M<span>odificar admin</span></h1>
    </div>

    <label for = "codigo1" class="label">Identificacion</label>
      <input type="text"  name="identificacion" placeholder="Identificacion" class="input" value="<?php echo $fecth['identificacion']?>">

      <label for = "telefono1" class="label">usuario</label>
    <input type="text"  name="usuario" placeholder="usuario" class="input" value="<?php echo $fecth['usuario']?>">

       <label for = "telefono1" class="label">telefono</label>
    <input type="text"  name="telefono" placeholder="telefono" class="input" value="<?php echo $fecth['telefono']?>">

   <label for = "telefono1" class="label">correo</label>
    <input type="text"  name="correo" placeholder="correo" class="input" value="<?php echo $fecth['correo']?>">

       <label for = "telefono1" class="label">clave</label>
    <input type="password"  name="clave" placeholder="clave" class="input" value="<?php echo $fecth['clave']?>">
      
    <input type="submit" value="enviar" class="boton">
  </form>

</div> 
<?php 
}
 ?>	
  </body>

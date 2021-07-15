<?php
include("admin.php");
?>

<div class="contenedor" style="margin-top:-150px;">
  <form action ="reg_admin.php" class="form" method="POST">
    <div class="encabezado">
     <h1 class="titulo">R<span>egistrar admin</span></h1>
    </div>
    <label for = "codigo1" class="label">Identificacion</label>
    <input type="text"  name="identificacion" placeholder="Identificacion" class="input" autocomplete="off">

      <label for = "telefono1" class="label">Usuario</label>
    <input type="text"  name="usuario" placeholder="Usuario" class="input"  autocomplete="off">

       <label for = "telefono1" class="label">Telefono</label>
    <input type="text"  name="Telefono" placeholder="Telefono" class="input"  autocomplete="off">

   <label for = "telefono1" class="label">Correo</label>
    <input type="text"  name="correo" placeholder="correo" class="input"  autocomplete="off">

       <label for = "telefono1" class="label">Clave</label>
    <input type="password"  name="clave" placeholder="clave" class="input">
    <input type="submit" value="enviar" class="boton">
  </form>
</div>
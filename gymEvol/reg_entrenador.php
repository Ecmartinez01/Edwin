<?php
include("admin.php");
?>

<div class="contenedor" style="margin-top:-150px;">
  <form action ="insertar_entrenador.php" class="form" method="POST">
    <div class="encabezado">
     <h1 class="titulo">R<span>egistrar entrenador</span></h1>
    </div>
    <label for = "codigo1" class="label">Identificacion</label>
    <input type="text"  name="identificacion" placeholder="Identificacion" class="input" autocomplete="off">

      <label for = "telefono1" class="label">Nombre</label>
    <input type="text"  name="nombre" placeholder="nombre" class="input"  autocomplete="off">

       <label for = "telefono1" class="label">Apellido</label>
    <input type="text"  name="apellido" placeholder="apellido" class="input"  autocomplete="off">
    
      <label for = "telefono1" class="label">telefono</label>
    <input type="text"  name="telefono" placeholder="telefono" class="input"  autocomplete="off">

   <label for = "telefono1" class="label">Direccion</label>
    <input type="text"  name="direccion" placeholder="direccion" class="input"  autocomplete="off">

       <label for = "telefono1" class="label">Correo</label>
    <input type="text"  name="correo" placeholder="correo" class="input">
    <input type="submit" value="enviar" class="boton">
  </form>
</div>
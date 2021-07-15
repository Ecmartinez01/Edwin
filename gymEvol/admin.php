
<!doctype html>
<html lang="en">
  <head>
  	<title>Panel admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="css11/style.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" href="css1/estilos.css">
  </head>
  <body style="font-size: 20px;">
		
		<div class="wrapper d-flex align-items-stretch" >
			<nav id="sidebar" class="active">
        <div class="footer">
				<h1><a href="index.html" class="logo">Gym Evolution</a></h1>
      </div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="mostrar_usuarios.php" id="usuario"><ion-icon name="person-outline" size = "large"></ion-icon>Usuarios</a>
          </li>
          <li>
              <a href="mostrar_admin.php" id="admins"><ion-icon name="construct-outline" style = "font-size: 35px;"></ion-icon> Admins</a>
          </li>
          <li>
            <a href="#" id="pagos" style = "font-size: 15px;"><ion-icon  name = "cash-outline" style = "font-size: 37px;" ></ion-icon> pagos</a>
          </li>
          <li>
            <a href="mostrar_entrenador.php" id="entrendor"><ion-icon  name = "barbell-outline" size = "large"> </ion-icon>Entrenador</a>
          </li>
          <li>
            <a href="registrar_admin.php" id="reg_admin"><ion-icon name = "list-outline" size = "large" > </ion-icon>Registrar admin</a>
          </li>
          <li>
            <a href="reg_entrenador.php" id="reg_entrenador"><ion-icon name = "list-outline" size = "large" > </ion-icon> Registrar entrendor</a>
          </li>
        </ul>

        <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					</p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5" style="margin-top: -28px;">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i ><ion-icon name="reorder-four-outline" style = "font-size: 27px;" ></ion-icon></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>


    <script src ="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js" > </script >
    <script src="js66/popper.js"></script>
    <script src="js66/bootstrap.min.js"></script>
    <script src="js66/main.js"></script>
  </body>
</html>
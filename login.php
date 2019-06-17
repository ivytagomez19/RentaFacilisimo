<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Renta Facilísimo :: Soluciones con Innovación</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
	<link href="css/login.css" rel="stylesheet">
</head>

<body>


 <div class="container">
 		<?php if(!isset($_SESSION['usuario'])){?>
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <a href="index.php"><img id="profile-img" class="profile-img-card" src="img/logologin.png" style="height:50px; width:160px"/> </a>
            <p id="profile-name" class="profile-name-card">Iniciar Sesión</p>
            <form class="form-signin" action="login_process.php" method="POST" > <!-- va a llamar a este archivo donde se hará la validación del usuario, osea leer desde el archivo -->
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario o Correo Electrónico" required autofocus>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <?php if(isset($_GET['error']))
                { ?>
                  <div class="text-danger">Acceso denegado. Intente de nuevo</div>
                <?php }?>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form><!-- /form -->

        </div><!-- /card-container -->
        <?php }
			else {?>
              <div class="card card-container">
              	<img id="profile-img" class="profile-img-card" src="img/logorenta.png" style="height:50px; width:160px"/>
                <div class=" text-center"><?php echo $_SESSION['nombre'];?></div>
                <div class=" text-center text-danger">Ya tienes una sesión activa. </div>
                 <div class="text-center"> Dirígete a <a href="indexlogued.php">Inicio</a> y cierra sesión para poder ingresar de nuevo</div>

               </div>

        <?php } ?>
    </div><!-- /container -->

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

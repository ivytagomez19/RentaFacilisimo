<?php
    session_start();
	if(isset($_SESSION['usuario'])){
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
  <link rel="stylesheet" href="css/perfil.css">

  <!-- Custom styles for this template -->
 <style type="text/css" >
 	body{padding-top:30px;}

		.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

		small {
		display: block;
		line-height: 1.428571429;
		color: #999;
		}
 </style>

</head>

<body>

 <!-- Llamamos a la cabecera-->
 <?php include 'header.php' ?>

   <!-- Es un espacio o cabecera para insertar una imagen en modo full, pero al poner en header, significa que se queda en la parte superior de la página-->
  <header class="py-5 bg-image-full" style="background-image: url('img/banner-1.jpg'); height:400px">
    <!-- <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt=""> //posicionamiento de una imagen -->
  </header>

  <!-- Sección que permite insertar un texto -->
  <section class="py-5">
    <div class="container">
  <div class="row">
    <div class="col-md-6 img">

    	<?php $foto = $_SESSION['usuario'];
		$ruta= "img/fotoperfil/".$foto.".jpg";?>


      <img src="<?php echo $ruta; ?>"  alt="" class="img_perfil">
    </div>
    <div class="col-md-6 details">
      <blockquote>
        <h5><?php echo $_SESSION['nombre']; ?></h5>
        <small><cite title="Source Title"> <?php echo $_SESSION['usuario']; ?> <i class="icon-map-marker"></i></cite></small>
        <small><cite title="Source Title"> <?php echo $_SESSION['rol']; ?> <i class="icon-map-marker"></i></cite></small>
      </blockquote>
      <p>
        <?php echo $_SESSION['correo']; ?> <br>
        <?php echo $_SESSION['pweb']; ?> <br>
        <?php echo $_SESSION['fechaAlta']; ?> <br>
      
      </p>
    </div>
  </div>
</div>
</div>

  </section> <!-- Fin de la sección -->




	<!-- Llamamos al pie de pagina -->
  <?php include 'footer.php' ?>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php }
 	else{
		header('Location: login.php');
	}
 ?>

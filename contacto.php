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
  <link href="css/full-width-pics.css" rel="stylesheet">
  
  <link href="css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

 <!-- Llamamos a la cabecera-->
 <?php include 'header.php' ?>

   <!-- Es un espacio o cabecera para insertar una imagen en modo full, pero al poner en header, significa que se queda en la parte superior de la página-->
  <header class="py-5 bg-image-full" style="background-image: url('img/banner-1.jpg'); height:400px">
    <!-- <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt=""> //posicionamiento de una imagen -->
  </header>
	
    <div class="container pt-2">
 	<div class="row justify-content-xl-center">
		<div class="col-lg-6 col-md-8 col-lg-6 pb-5 ">


                    <!--Form with header-->

                    <form action="#" method="post">
                        <div class="card border-dark rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-dark text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contáctanos</h3>
                                    <p class="m-0">Con gusto te ayudaremos</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Envianos tu Mensaje" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Enviar" class="btn btn-info btn-block py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->
                </div>
		</div><!-- fin de row-->
    </div> <!-- fin del container -->
	<!-- Llamamos al pie de pagina -->
  <?php include 'footer.php' ?>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

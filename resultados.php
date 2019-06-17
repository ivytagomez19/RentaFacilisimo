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

	<div class="container">
    
    <h1 class="my-4 text-black-50"> Campeche </h1>
    
  <!-- Bloque para mostrar un inmueble específico -->
 	 <div class="row pb-2">
        <div class="col-md-5">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/inmuebles/0001-0.jpg" alt="">
          </a>
        </div>
        <div class="col-md-7">
          <h3>Departamento Luxury</h3>
          <div class="text-dark">Se encuentra ubicado en una zona residencial del estado de Campeche. Está totalmente amueblado en excelentes condiciones.</div>
          <div class="text-success font-weight-bold">$5,500</div>
          <a class="btn btn-primary" href="detalle.php" target="_blank">Ver más...</a>
        </div>
      </div> <!-- fin del bloque del inmueble-->
     
     <!-- Bloque para mostrar un inmueble específico -->
 	 <div class="row pb-2">
        <div class="col-md-5">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="img/inmuebles/0002-0.jpg" alt="">
          </a>
        </div>
        <div class="col-md-7">
          <h3>Casa residencial</h3>
          <div class="text-dark">Se encuentra ubicado en una zona privada en el estado de Campeche. Con más de 100 mts2 de construcción.</div>
          <div class="text-success font-weight-bold">$8,500</div>
          <a class="btn btn-primary" href="#">Ver más...</a>
        </div>
      </div> <!-- fin del bloque del inmueble-->
     
    </div> <!-- fin del container-->
	<!-- Llamamos al pie de pagina -->
  <?php include 'footer.php' ?>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

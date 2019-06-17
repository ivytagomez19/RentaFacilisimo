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

  <!-- Sección que permite insertar un texto -->
 <section class="py-5">
 	<div class="container">
        <div class="row">
        	<div class="col-lg-12 bg-dark text-white"><h5>Encuentra tu hogar ideal</h5></div>
            <div class="col-lg-12 pt-1">
            <form action="#" method="post" class="hotel-search-form">
									<div class="row">
										<div class="col-lg-2 col-md-6 form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Tipo de Inmueble -- </option>
							            	 	<option value="0">Casa</option>
												<option value="1">Departamento</option>												
											</select> 
							          	</div>
							          	<div class="col-lg-2 col-md-6 form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Estado -- </option>
							            	 	<option value="001">Campeche</option>
                                                <option value="002">Quintana Roo</option>
												<option value="003">Veracruz</option>	
                                                <option value="004">Yucatán</option>											
											</select> 
							          	</div>
							          	<div class="col-lg-3 col-md-6 form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Municipio -- </option>
							            	                                        										
											</select> 
							          	</div>
							            <div class="col-lg-3 col-md-6 form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Precio -- </option>
							            	 	<option value="0">de 3,000 a 5,000</option>
                                                <option value="1">de 5,000 a 8,000</option>
												<option value="2">más de 8,000</option>	                                       										
											</select> 
							          	</div>
                                        <div class="col-lg-2 col-md-6">
			            					<button type="submit" name="submit" class="btn btn-info btn-lg btn-block"> <i class="fa fa-search"></i>&nbsp;Buscar</button>
						            	</div>
									</div>							
						              
								</form>
            </div>
        </div>
    </div>
 </section>

<div class="container">
	<div class="row">
    <!-- Estado 1 -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-0 shadow">
            <img src="img/yucatan2.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Yucatán</h5>
              <div class="card-text text-black-50">desde $5,000</div>
            </div>
          </div>
        </div>
        <!-- Team Member 2 -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-0 shadow">
            <img src="img/veracruz1.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Veracruz</h5>
              <div class="card-text text-black-50">desde $7,000</div>
            </div>
          </div>
        </div>
        <!-- Team Member 3 -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-0 shadow">
            <img src="img/Campeche1.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Campeche</h5>
              <div class="card-text text-black-50">desde $6,200</div>
            </div>
          </div>
        </div>
        <!-- Team Member 4 -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-0 shadow">
            <img src="img/qroo1.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Quintana Roo</h5>
              <div class="card-text text-black-50">desde $8,000</div>
            </div>
          </div>
        </div>
      </div>
 </div>
	<!-- Llamamos al pie de pagina -->
  <?php include 'footer.php' ?>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

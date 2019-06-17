
<!-- Inicio de la Barra de Navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container"> <!-- Contenedor de la barra -->
      <a class="navbar-brand" href="index.php"><img src="img/logorenta1.png" /></a> <!-- Link o Imagen que nos llevará al index.php-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <!-- Es un botón especial que aparece cuando la resolución de la página se reduce, por ejemplo para aplicaciones móviles-->
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">  <!-- Inicia todo lo que es la parte de las opciones del menú-->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servicios.php">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
          <?php if(isset($_SESSION['usuario']))
     	   {?>
     		<li class="nav-item">
            	<a class="nav-link" href="#">Panel de Control</a>
          	</li>
     		<?php }?>
        </ul>
      </div> <!-- Terminan las opciones del menú-->


      <!-- Inicio de elemento para visualizar usuario -->


     <?php if(isset($_SESSION['usuario']))
     {?>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 			aria-label="Toggle navigation"> <!-- Es un botón especial que aparece cuando la resolución de la página se reduce, por ejemplo para aplicaciones móviles, en este caso para el usuario-->
         <span class="navbar-toggler-icon"></span>
       </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['nombre'];?>
            </a>
              <!--Permite abrir un menú desplegable-->
              <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="perfil.php">Perfil</a>
                <a class="dropdown-item" href="logout.php">Cerrar Sesión</a>
                <!-- <div class="dropdown-divider"></div>   //Por si necesitamos agregar más opciones al menú
                <a class="dropdown-item" href="#">Something else here</a> -->
              </div> <!-- Fin del menú desplegable -->
            </li>
          </ul>
    </div> <!-- Fin del elemento para visualizar usuario-->
  <?php } else {
  ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 			aria-label="Toggle navigation"> <!-- Es un botón especial que aparece cuando la resolución de la página se reduce, por ejemplo para aplicaciones móviles, en este caso para el usuario-->
      <span class="navbar-toggler-icon"></span>
    </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item dropdown">
           <a class="nav-link" href="login.php" id="navbarDropdown">
          Iniciar Sesión
         </a>

         </li>
       </ul>
     </div> <!-- Fin del elemento para visualizar usuario-->




<?php }?>


   </div> <!-- fin del contenedor de la barra -->
  </nav> <!-- Fin de la barra de navegación -->

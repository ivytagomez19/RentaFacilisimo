<?php
   session_start();
   if(isset($_POST['usuario'])){
     $autenticado = false;
     $nombreUsuario = "";
     $correoUsuario= "";
     $rolUsuario="";
     $fechaAlta="";
     $pweb="";
     $usuario = $_POST['usuario']; //Recogemos datos
     $password = sha1 ($_POST['password']);
     $correcto = false;
     $archivo = "usuarios.txt";
     $hand = fopen($archivo,"r") or die("Un error se ha producido."); // Abrimos el archivo modo lectura
     $contents = fread($hand,filesize($archivo));
     $lineas = explode("\n",$contents); //Separo en lineas
     for($i=0;$i<count($lineas);$i++){
         $primerTab = strpos($lineas[$i],"\t"); //Posicion del tabulador
         $ultimoTab = strrpos($lineas[$i],"\t");
         $penultimo= strpos($lineas[$i],"|");
         $ultimo=strrpos($lineas[$i], "|");
         $finRol=strpos($lineas[$i], "-");
         $finFecha=strrpos($lineas[$i], "-");
         $usuarios[] = trim (substr($lineas[$i], 0, $primerTab));
         $passwords[] = trim (substr($lineas[$i],$primerTab,$ultimoTab-$primerTab));
         $nombreUsuarios[] = substr($lineas[$i], $ultimoTab, $penultimo-$ultimoTab);
         $correoUsuarios[]= trim(substr($lineas[$i], $penultimo+1, $ultimo-$penultimo-1));
         $rolUsuarios[]=trim(substr($lineas[$i], $ultimo+1, $finRol-$ultimo-1));
         $fechaAltas[]=substr($lineas[$i], $finRol+1, $finFecha-$finRol-1);
         $pwebs[]=trim(substr($lineas[$i], $finFecha+1, strlen($lineas[$i])-$finFecha));

         if(($usuario == $usuarios[$i]) && ($password == $passwords[$i])){
             $nombreUsuario=$nombreUsuarios[$i];
             $correoUsuario=$correoUsuarios[$i];
             $rolUsuario=$rolUsuarios[$i];
             $fechaAlta=$fechaAltas[$i];
             $pweb=$pwebs[$i];
             $autenticado= true;
          }
          else {
            if(($usuario == $correoUsuarios[$i]) && ($password == $passwords[$i])){
              $usuario=$usuarios[$i];
              $nombreUsuario=$nombreUsuarios[$i];
              $correoUsuario=$correoUsuarios[$i];
              $rolUsuario=$rolUsuarios[$i];
              $fechaAlta=$fechaAltas[$i];
              $pweb=$pwebs[$i];
              $autenticado= true;
            }
          }
     }
     if($autenticado==true){
       $_SESSION['usuario'] = $usuario;
       $_SESSION['password'] = $password;
       $_SESSION['nombre'] = $nombreUsuario;
       $_SESSION['correo'] = $correoUsuario;
       $_SESSION['rol']=$rolUsuario;
       $_SESSION['fechaAlta']=$fechaAlta;
       $_SESSION['pweb']=$pweb;
       header('Location: index.php');
     }
     else{
       header('Location: login.php?error=true');
     }
   }




/*if(isset($_POST['usuario'])){
$_SESSION['usuario'] = $_POST['usuario'];
header('Location: index.php');
}*/
?>

<?php

if (!isset($_SESSION)) {
    session_start();
}

    // Redirecciona las pestañas especial cuando no haya iniciado sesion el usuario 
   if (!isset($_SESSION['usuario'])) {
     header('Location: ../index.php');   
   }

?>
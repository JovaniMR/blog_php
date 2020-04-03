<?php

// Conexion a la BD

   $host = "localhost";
   $userName = "root";
   $pass = "";
   $bd = "blog";

   $conexion = mysqli_connect($host,$userName,$pass,$bd);

//Setear a utf8

   mysqli_query($conexion,"SET NAMES 'utf8'");


   //inciiar sesion
   if (!isset($_SESSION)) {
      session_start();
   }

?>
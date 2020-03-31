<?php

 require_once 'conexion.php';

if (isset($_POST['submit'])) {

   $nombre= $_POST['nombre'];
   $apellidos= $_POST['apellidos'];
   $email= $_POST['email'];
   $pass= $_POST['password'];
    

    //validación de datos del formulario

    $flag=true;

    if (!preg_match("/[a-zA-Z ]/",$nombre)) {
        $flag=false;
    }
    
    if (!preg_match("/[a-zA-Z ]/",$apellidos)) {
        $flag=false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $flag=false;
    }

    if ($flag==true) {

        //Encriptar pass
        $password= password_hash($pass, PASSWORD_BCRYPT, ['cots'=> 2]);

        // insertar en BD

        $sql = "INSERT INTO usuarios VALUES (null,'$nombre','$apellidos','$email','$password',CURDATE())";
        $insert = mysqli_query($conexion,$sql);

        header('Location: index.php?registro=Usuario registrado correctamente');

    }else{
        header('Location: index.php?error=Datos no validos');
    }
  
   
}


?>
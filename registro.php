<?php

 require_once 'includes/conexion.php';

if (isset($_POST['submit'])) {


  //Obtiene datos de formulario
   $nombre= $_POST['nombre'];
   $apellidos= $_POST['apellidos'];
   $email= trim($_POST['email']);
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

    
        $_SESSION['registrado']='usuario registrado correctamente';
        header('Location: includes/index.php');
  
        

    }else{
  
        $_SESSION['Error_registro']= 'Datos no validos';
        header('Location: includes/index.php');
    }
  
   
}


?>
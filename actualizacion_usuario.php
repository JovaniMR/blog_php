<?php

 require_once 'includes/conexion.php';
 require_once 'funciones.php';

if (isset($_POST)) {


  //Obtiene datos de formulario
   $id = $_SESSION['usuario']['id'];
   $nombre= $_POST['nombre'];
   $apellidos= $_POST['apellidos'];
   $email= trim($_POST['email']);
    


    //validación de datos del formulario

    $flag=true;

    if (preg_match("/[0-9]/",$nombre) || preg_match("/[0-9]/",$apellidos) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $flag=false;
    }
    
    //Evalua si el mail existe
    $flagEmail = consultarUsuarios($conexion,$email,$id);


    if ($flag==true && $flagEmail==true) {

        // actualizar usuario en BD

        $sql = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', email='$email' WHERE id=$id";
        $insert = mysqli_query($conexion,$sql);

    

        $_SESSION['usuario']['nombre']=$nombre;
        $_SESSION['usuario']['apellidos']=$apellidos;
        $_SESSION['usuario']['email']=$email;
        $_SESSION['actualizado']='Datos actualizados correctamente';
    
        
    }else{
  
        $_SESSION['error_actualizar']= 'Datos no validos y/o email repetido';
  
    }
   
}

header('Location:includes/actualizar_usuario.php');

?>
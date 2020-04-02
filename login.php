<?php

//Conexion a BD

require_once 'includes/conexion.php';

session_start();
//recoger datos del formulario
 
if (isset($_POST)) {


    $email = trim($_POST['email']);
    $password = $_POST['pass'];

    //consulta a BD
    $sql = "SELECT * FROM usuarios WHERE email = '$email'"; 
    $consulta = mysqli_query($conexion,$sql);

    

    if ($consulta==true && mysqli_num_rows($consulta) ==1 ) {
        //la consulta se vuelve un array asociativo
        $usuario = mysqli_fetch_assoc($consulta);

        //verifica password
        $validarPass = password_verify($password, $usuario['password']);

        if ($validarPass == true) {
            $_SESSION['usuario'] = $usuario;
        }else{
            $_SESSION['Error']= 'Datos incorrectos';
        }


    }else{
        $_SESSION['Error']= 'Datos incorrectos';
    }

    
}else{
    $_SESSION['Error']= 'Datos incorrectos';
}


  header('Location:includes/index.php');

?>
<?php

require_once 'includes/conexion.php';

if (!isset($_SESSION)){
    session_start();
}

if (isset($_POST)) {
   
    
    $usuario = $_SESSION['usuario']['id'];
    $categoria= (int) $_POST['categoria'];
    $titulo= $_POST['titulo'];
    $descripcion=$_POST['descripcion'];


    if (!preg_match('/[0-9]/',$titulo) && !is_numeric($titulo)) {
        
       $sql = "INSERT INTO entradas VALUES (null,$usuario,$categoria,'$titulo','$descripcion',CURDATE())";
    
       $insert = mysqli_query($conexion,$sql);

       if ($insert = true ) {
        $_SESSION['entrada']='Entrada registrada correctamente';
       }
       
    }else{
        $_SESSION['error_entrada']='Datos no validos en nombre y/o descripcion';
    }

}else{
    $_SESSION['error_entrada']='Error al guardar los datos';
}

header('Location: includes/crear_entradas.php');

?>
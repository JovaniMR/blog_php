<?php

require_once 'includes/conexion.php';

if (isset($_POST)) {
    $categoria  =trim($_POST['categoria']);

    if(preg_match('/[A-Za-z ]/',$categoria)){

        $sql = "INSERT INTO categorias VALUES (null,'$categoria')";
        $insertar = mysqli_query($conexion,$sql);
    }

}

header('Location: includes/index.php');


?>
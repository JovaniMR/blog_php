<?php

session_start();

if (isset($_SESSION['usuario'])) {
    session_destroy();
    echo 'sesion cerrada';
}

header('Location: includes/index.php');
?>
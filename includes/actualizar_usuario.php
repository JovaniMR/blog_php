<?php 

require_once 'redireccion.php';
require_once 'conexion.php';
require_once '../funciones.php' ;
require_once 'cabecera.php' ;?>

<div class="container mt-5">

    <h2 class="text-center">ACTUALIZAR INFORMACIÓN DEL USUARIO</h2>


    <?php
    
   
    $id = $_SESSION['usuario']['id'];

        $usuario = consultarUsuario($conexion,$id);

        while($usuarios=mysqli_fetch_assoc($usuario)):
    ?>

    <form action="../actualizacion_usuario.php" method="POST">
        <div class="form-group mt-5 col-3">
            <label for="nombre">Nombre(s):</label>
            <input type="text" name="nombre" class="form-control" required="required" id="nombre"
                value="<?= $usuarios['nombre']?>">
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" class="form-control" required="required" id="apellidos"
                value="<?= $usuarios['apellidos']?>">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" required="required" id="email"
                value="<?= $usuarios['email']?>">


            <?php endwhile ?>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Actualizar datos</button>
    </form>

    <?php if(isset($_SESSION['actualizado'])) :?>
    <div class="alert alert-success mt-5" role="alert">
        <?= $_SESSION['actualizado']?>
    </div>

    <?php
             $_SESSION['actualizado']=null;
        endif?>


    <?php if(isset($_SESSION['error_actualizar'])) :?>
    <div class="alert alert-warning mt-5" role="alert">
        <?= $_SESSION['error_actualizar']?>
    </div>
    <?php 
             $_SESSION['error_actualizar']=null;
        endif?>


</div>

<?php require_once 'footer.php';?>
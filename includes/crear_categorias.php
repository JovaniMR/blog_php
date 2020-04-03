<?php 

require_once 'redireccion.php';
require_once 'conexion.php';
require_once '../funciones.php' ;
require_once 'cabecera.php' ;?>

<div class="container mt-5">

    <h2>CREAR CATEGORIAS</h2>

    <form action="../guardar_categoria.php" method="POST">
        <div class="form-group">
            <label for="formGroupExampleInput">Añade una nueva categoría</label>
            <input type="text" name="categoria" class="form-control" required="required" id="formGroupExampleInput">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>


      
    </form>
</div>

<?php require_once 'footer.php';?>
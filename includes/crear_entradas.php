<?php 

require_once 'redireccion.php';
require_once 'conexion.php';
require_once '../funciones.php' ;
require_once 'cabecera.php' ;?>

<div class="container mt-5">

    <h2>CREAR ENTRADAS</h2>

    <form class="mt-5" action="../guardar_entradas.php" method="POST">
        <div class="form-group col-4">
            <label for="inputState">Elige Categoría</label>

            <!-- Categorias en un select (combobox) -->
            <select name="categoria" id="inputState" class="form-control">

                <?php $categorias = consultarCategorias($conexion);  
                
                    if(!empty($categorias)):

                        while($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                <option value="<?= $categoria['id']?>"> <?= $categoria['nombre']?> </option>

                <?php 
                        endwhile;
                    endif; 
                ?>
            </select>


        </div>
        <!-- Fin categorias en select -->

        <div class="form-group">
            <label for="formGroupExampleInput">Título</label>
            <input type="text" name="titulo" class="form-control" required="required" id="formGroupExampleInput">

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripción</label>
                <textarea class="form-control" name="descripcion" required="required" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
        <!-- Muestra errores -->

        <?php if(isset($_SESSION['error_entrada'])) :?>

        <div class="alert alert-warning" role="alert">
            <?= $_SESSION['error_entrada']?>

        </div>

        <?php
         $_SESSION['error_entrada']=null;
         endif?>

        <?php if(isset($_SESSION['entrada'])) :?>

        <div class="alert alert-success mt-" role="alert">
            <?= $_SESSION['entrada']?>
        </div>

        <?php 
        $_SESSION['entrada']=null;
        endif?>



    </form>
</div>

<?php require_once 'footer.php';?>
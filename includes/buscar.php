<!-- Entradas que el usuario busca -->

<?php require_once 'conexion.php' ?>
<?php require_once '../funciones.php' ?>

<?php require_once 'cabecera.php' ?>


<div class="container-fluid">

    <div class="main">

        <?php 
        
        if(isset($_POST)){
            $buscar=$_GET['buscar'];  
        }
    
        $entradas = consultarBusqueda($conexion,$buscar);
    if(!empty($entradas)) :
        while($entrada=mysqli_fetch_assoc($entradas)) :?>

        <article class="card mt-5" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title text-center"><?= $entrada['titulo']?></h2>
                <h4 class="card-subtitle mb-2 text-muted"> <?=$entrada['nombre'] ?></h4>
                <span class="badge badge-success"><?=$entrada['categoria']?></span>
                <span class="badge badge-primary "><?= $entrada['fecha']?></span>
                <p class="card-text text-justify"> <?= substr($entrada['descripcion'],0,150);?> ...</p>
            </div>
        </article>
        <?php 
        endwhile;
    else:
        ?>
   
    </div>
    <h2 class="text-center mt-5">NO EXISTEN COINCIDENCIAS</h2>
    <?php endif?>
</div>


<?php require_once 'footer.php';
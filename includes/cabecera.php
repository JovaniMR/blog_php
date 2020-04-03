<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Video Juegos</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</head>

<body>

    <!-- header -->

    <header class="header">
        <h1>Video Juegos</h1>
    </header>

    <!-- Fin header -->

    <!-- Menu -->
    <div class="row">
        <div class="col-12">
            <nav class="menu navbar navbar-expand-xl navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">BLOG</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <!-- Listar categorias -->


                        <?php 
                    
                        $categorias = consultarCategorias($conexion);
                        if(!empty($categorias)) :
                            while($categoria = mysqli_fetch_assoc($categorias)):
                         ?>


                        <li class="nav-item">
                            <a class="nav-link" href="categoria.php?id= <?=$categoria['id']?>">
                                <?=$categoria['nombre']?> </a>
                        </li>

                        <?php 
                            endwhile;
                        endif;
                        ?>
                        <!-- Fin listado de las categorias -->

                    </ul>
                    <form class="form-inline d-flex justify-content-center my-2 my-lg-0 ">
                        <input class="form-control font-size-sm-2 mr-sm-2" type="search" placeholder="Buscar"
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>

                    <!-- Oculta botones al iniciar o cerrar sesion -->

                    <?php if(isset($_SESSION['usuario'])):?>

                    <li class="nav-item ml-2">

                    <li class="nav-item dropdown mr-xl-5 ml-xl-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION['usuario']['nombre']?>
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Mi cuenta</a>
                            <a class="dropdown-item" href="#">Crear entradas</a>
                            <a class="dropdown-item" href="crear_categorias.php">Crear categorías</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../cerrar_sesion.php">Cerrar Sesión</a>
                        </div>
                    </li>
                    </li>

                    <?php else:?>

                    <li class="nav-item ml-2">
                        <button class="btn btn-outline-success mt-sm-3 mt-xl-0 my-2 my-sm-0 ml-md-5" data-toggle="modal"
                            data-target="#Modal" type="submit">Login</button>
                    </li>

                    <li class="nav-item ml-2">
                        <button class="btn btn-outline-success  mt-sm-3 mt-xl-0 my-2 my-sm-0 ml-md-5 mr-md-5"
                            data-toggle="modal" data-target="#Modal1" type="submit">Registrarse</button>
                    </li>
                    <?php endif?>
                </div>
            </nav>
        </div>
    </div>
    <!-- Fin menu -->

 
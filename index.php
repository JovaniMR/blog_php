<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Juegos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <!-- header -->

    <header class="header">
        <h1>Video Juegos</h1>
    </header>

    <!-- Fin header -->

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">BLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categoria 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categoria 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categoria 3</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>

            <li class="nav-item ml-2">
                <button class="btn btn-outline-success my-2 my-sm-0 ml-md-5" data-toggle="modal" data-target="#Modal"
                    type="submit">Login</button>
            </li>
            <li class="nav-item ml-2">
                <button class="btn btn-outline-success my-2 my-sm-0 ml-md-5 mr-md-5" data-toggle="modal" data-target="#Modal1"
                    type="submit">Registrarse</button>
            </li>
        </div>
    </nav>
    <!-- Fin menu -->

    <!-- Main -->
    <section class="main">
        <article class="card mt-5" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title text-center">JUEGO 1</h2>
                <h3 class="card-subtitle mb-2 text-muted">Armando Jovani</h3>
                <span class="badge badge-info ">2018-15-03</span>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </article>
        <article class="card mt-5" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title text-center">JUEGO 1</h2>
                <h3 class="card-subtitle mb-2 text-muted">Armando Jovani</h3>
                <span class="badge badge-info ">2018-15-03</span>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </article>
        <article class="card mt-5" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title text-center">JUEGO 1</h2>
                <h3 class="card-subtitle mb-2 text-muted">Armando Jovani</h3>
                <span class="badge badge-info ">2018-15-03</span>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </article>
        <article class="card mt-5" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title text-center">JUEGO 1</h2>
                <h3 class="card-subtitle mb-2 text-muted">Armando Jovani</h3>
                <span class="badge badge-info ">2018-15-03</span>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </article>
        <article class="card mt-5" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title text-center">JUEGO 1</h2>
                <h3 class="card-subtitle mb-2 text-muted">Armando Jovani</h3>
                <span class="badge badge-info ">2018-15-03</span>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </article>


    </section>
    <!-- Fin main -->

    <!-- Footer -->
    <footer class="footer">
        <p>Desarrollado por Jovani Martinez </p>
        <p>Todos los derechos resservados &copy;</p>
    </footer>

    <!-- FIn footer -->

    <!-- modals -->

    <div class="modal" id="Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Iniciar Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="Modal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrarse</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>

                        <div class="form-group row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre(s)">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Apellidos">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
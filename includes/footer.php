<!-- Footer -->
<footer class="footer">

    <p>Desarrollado por Jovani Martinez </p>
    <p>Todos los derechos resservados &copy;</p>

</footer>

<!-- Fin footer -->

<!-- modal inicio de sesion -->
<div class="modal" id="Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="../login.php" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Iniciar Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" required="required"
                                id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="pass" required="required"
                                id="inputPassword">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <!-- Mensaje de error de formulario -->
                    <?php if (isset($_SESSION['Error'])) : ?>

                    <!-- Ejecuta modal -->
                    <script>
                    $(document).ready(function() {
                        $("#Modal").modal("show");
                    });
                    </script>

                    <?php if (isset($_SESSION['Error'])):?>

                    <div class="alert alert-warning " role="alert">
                        <?= $_SESSION['Error'];?>
                    </div>


                    <?php  session_destroy(); ?>

                    <?php endif?>
                    <?php endif?>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- modal registro -->
<div class="modal" id="Modal1" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">
        <form action="../registro.php" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrarse</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <div class="col">

                            <input type="text" name="nombre" required="required" class="form-control"
                                placeholder="Nombre(s)">
                        </div>
                        <div class="col">
                            <input type="text" name="apellidos" required="required" class="form-control"
                                placeholder="Apellidos">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" name="email" required="required" class="form-control"
                                id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" required="required" class="form-control"
                                id="inputPassword">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">

                    <!-- Mensaje de error de formulario -->
                    <?php if (isset($_SESSION['Error_registro']) || isset($_SESSION['registrado'])) : ?>

                    <!-- Ejecuta modal -->
                    <script>
                    $(document).ready(function() {
                        $("#Modal1").modal("show");
                    });
                    </script>

                    <?php if (isset($_SESSION['Error_registro'])):?>

                    <div class="alert alert-warning " role="alert">

                        <?= $_SESSION['Error_registro'];?>

                    </div>

                    <?php else:?>

                    <div class="alert alert-success " style="margin: 0 auto;" role="alert">
                        <?= $_SESSION['registrado'];?>

                    </div>

                    <?php endif ?>

                    <?php session_destroy();?>
                    <?php endif?>


                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" name="submit">Registrarse</button>


                </div>
            </div>
        </form>
    </div>

</div>



</body>

</html>
<?php

session_start();

include("../../acciones/consultas/usuarios.php");

if (!isset($_SESSION['username']) || $_SESSION['status'] == 0) {

    header("Location: ../../index.php");
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Doña M</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link href="../../css/estilos.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>

    <body>


        <div style="background-color: #D7DCE1; ">
            <nav class="navbar navbar-dark bg-dark fixed-top menu-color align-items-center">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="inicio.php" style=" color:#C19A6B">Doña M</a>
                    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header" style=" color:#C19A6B">
                            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Restaurante Doña M - Usuario: <?php echo "</br>" . $_SESSION['username'] ?></h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body" style=" color:#C19A6B">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item ">
                                    <a class="nav-link active items-menu" aria-current="page" href="./ventas.php">Ventas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link items-menu" href="#" style="color:#C19A6B">Reportes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link items-menu" href="#" style="color:#C19A6B">Inventario</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link items-menu" href="Config.php" style="color:#C19A6B">Configuración</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link items-menu" href="../../acciones/logout/logout.php" style="color:#C19A6B">Salir</a>
                                </li>
                        </div>
                    </div>
                </div>
            </nav>
        </div>



        <div class="modal fade" id="eliminarUser" tabindex="-1" aria-labelledby="eliminarUser" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar estado de Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>¿Esta seguro que desea modificar el estado del usuario?</h3>
                    </div>
                    <div class="modal-footer">

                        <form action="usuarios.php" method="post">
                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        </form>
                        
                        <form action="../../acciones/insertar/editar_estado_usuario.php">
                            <input type="text" name="id_user" id="id_user" value="<?php echo $_REQUEST['id_usuario_editar']; ?>" hidden>
                            <button type="submmit" class="btn btn-primary">Modificar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="modal" id="miModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Cabecera de la ventana modal -->
                    <div class="modal-header">
                        <h4 class="modal-title">Ventana Modal</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Contenido de la ventana modal -->
                    <div class="modal-body">
                        ¡Hola! Esto es una ventana modal de Bootstrap.
                    </div>

                    <!-- Pie de la ventana modal -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        <!--</div> -->

        <!-- Script para abrir la ventana modal al cargar la página -->
        <script>
            $(document).ready(function() {
                $('#eliminarUser').modal('show');
            });
        </script>


        </div>

    <?php
}
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    </body>


    </html>
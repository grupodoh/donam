<?php

include('../../acciones/configuracion.php');
include('../../acciones/consultas/usuarios.php');



session_start();


if (!isset($_SESSION['username']) || $_SESSION['status'] == 2) {

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

        <div style="margin-top: 70px;">
            <div>
                <button type="button" class="btn btn-primary mb-3">
                    <a href="config.php">
                        < Regresar </a>
                </button>
            </div>
            <div class="container text-center titulos" style="display: block;">
                <p>
                    CAMBIO DE CONTRASEÑA
                </p>
            </div>
        </div>

        <div class="container text-center">
            <div class="form-floating mb-3">
                <form action="../../acciones/insertar/editar_clave_usuario.php" method="post">
                    <div class="form-floating mb-3">
                        <select class="form-select form-select-lg mb-3" name = "usuario" id="usuario" aria-label="Large select example">
                            <option selected >Seleccione usuario </option>
                            <?php

                            $usuarios = getUsers($conn);

                            foreach ($usuarios as $usuario) {

                                echo "
                                    <option value='" . $usuario['id_usuario'] . "'>" . $usuario['nombre_usuario'] . "</option>";
                            }
                            ?>
                        </select>
                        <label for="floatingPassword">Elegir Usuario</label>
                    </div>

                    <div class="input-group">
                        <span class="input-group-text">Nueva Contraseña</span>
                        <input type="password" name="nueva_clave" id="nueva_clave" aria-label="Contraseña" class="form-control">
                    </div>

                    <button type="submmit" class="btn btn-success mb-3 mt-3">Cambiar contraseña</button>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
    </body>

    </html>

<?php

}

?>
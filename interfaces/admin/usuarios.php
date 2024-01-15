<?php

session_start();
include("../../acciones/consultas/usuarios.php");

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

    <div style="margin-top: 70px; display: inline-block;">
        <div style="">
            <form action="">
                <button type="button" class="btn btn-success">+ Nuevo Usuario</button>
            </form>
        </div>
        <div class="container text-center titulos" style="display: block;">
            <p>
                USUARIOS
            </p>
        </div>
    </div>

    <div class="container text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID del Usuario</th>
                    <th scope="col">Nombre del Usuario</th>
                    <th scope="col">Apellido del Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php
                $datos = getUsers($conn);

                foreach ($datos as $dato) {
                    echo "";

                    echo "<tr>
            <th scope='row'>" . $dato['id_usuario'] . "</th> 
            <td >" . $dato['nombre_usuario'] . "</td> 
            <td>" . $dato['apellido_usuario'] . "</td>
            <td>
            <form action='' method='post'>            
            <button class='btn btn-success' data-bs-toggle='modal input_editar_user' data-bs-target='#editarInfoUser' value = 'Editar'>Editar</button> 
            </form>
            <button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#eliminarUser' value = 'Eliminar'>Eliminar</button></td></tr>";
                }
                ?>

            </tbody>
        </table>

        <div class="modal fade" id="eliminarUser" tabindex="-1" aria-labelledby="eliminarUser" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>¿Esta seguro de eliminar este usuario?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary"><a href="../../index.php">Eliminar</a></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editarInfoUser" tabindex="-1" aria-labelledby="editarInfoUser" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar informacion del Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form action="">
                            <div class="input-group mb-4 mt-4">
                                <input type="text" hidden value=<?php echo $dato['id_rol']; ?> class="quitar-borde-left form-control" aria-label="Username" aria-describedby="basic-addon1" name="Username" id="Username">
                            </div>
                            <div class="input-group mb-4 mt-4">
                                <input type="text" value=<?php echo $dato['nombre_usuario']; ?> class="quitar-borde-left form-control" aria-label="Username" aria-describedby="basic-addon1" name="Username" id="Username">
                            </div>
                            <div class="input-group mb-4 mt-4">
                                <input type="text" value=<?php echo $dato['apellido_usuario']; ?> class="quitar-borde-left form-control" aria-describedby="basic-addon1" name="apellido" id="apellido" required>
                            </div>
                            <div class="input-group mb-4 mt-4">
                                <input type="text" value=<?php echo $dato['nombre_usuario']; ?> class="quitar-borde-left form-control" aria-label="Username" aria-describedby="basic-addon1" name="Username" id="Username">
                            </div>
                            <div class="input-group mb-4 mt-4">
                                <input type="text" value=<?php echo $dato['apellido_usuario']; ?> class="quitar-borde-left form-control" aria-describedby="basic-addon1" name="apellido" id="apellido" required>
                            </div>
                            <div class="input-group mb-4 mt-4">
                                <input type="text" value=<?php echo $dato['nombre_usuario']; ?> class="quitar-borde-left form-control" aria-label="Username" aria-describedby="basic-addon1" name="Username" id="Username">
                            </div>
                            <div class="input-group mb-4 mt-4">
                                <input type="text" value=<?php echo $dato['apellido_usuario']; ?> class="quitar-borde-left form-control" aria-describedby="basic-addon1" name="apellido" id="apellido" required>
                            </div>
                            <div class="input-group mb-4 mt-4">
                                <input type="text" value=<?php echo $dato['nombre_usuario']; ?> class="quitar-borde-left form-control" aria-label="Username" aria-describedby="basic-addon1" name="Username" id="Username">
                            </div>
                            <div class="input-group mb-4 mt-4">
                                <input type="text" value=<?php echo $dato['apellido_usuario']; ?> class="quitar-borde-left form-control" aria-describedby="basic-addon1" name="apellido" id="apellido" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary"><a href="../../index.php">Actualizar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
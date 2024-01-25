<?php

session_start();

include('../../acciones/consultas/consultar_editar_usuarios.php');
include('../../acciones/configuracion.php');
include('../../acciones/consultas/roles.php');
include('../../acciones/consultas/consulta_unidades_medida.php');


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

        <div style="margin-top: 70px; display: inline-block;">
            <div>
                <button type="button" class="btn btn-primary mb-3">
                    <a href="lista_productos_unitarios.php">
                        < Regresar
                    </a>
                </button>
            </div>

            <div class="container text-center titulos" style="display: block;">
                <p>
                    CREAR NUEVO PRODUCTO UNITARIO
                </p>
            </div>
        </div>

        <div class="container text-center">

           
                <form action="../../acciones/insertar/crear_producto_unitario.php">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nombre_pu" id="nombre_pu" placeholder="nombre de usuario" value="" required>
                        <label for="floatingPassword">Nombre de producto</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="cantidad_unidad" id="cantidad_unidad" placeholder="apellido de usuario" value="" required>
                        <label for="floatingPassword">Cantidad de la unidad</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select form-select-lg mb-3" name="tipo_unidad" id="tipo_unidad"aria-label="Large select example">
                        <option selected>Seleccione unidad de medida</option>
                    <?php

                                $uniteType=getUnidadesMedida($conn);

                                foreach ($uniteType as $type ) {      
                                    
                                    echo "
                                    <option value='".$type['id_unidad']."'>".$type['nombre_unidad']."</option>";
                                }
                                ?>
                        </select>
                        <label for="floatingPassword">Tipo de unidad de medida</label>
                    </div>
                    

                    <button type="submmit" class="btn btn-success mb-3">Crear Usuario</button>

                </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
    </body>

    </html>

<?php
            
        }

?>
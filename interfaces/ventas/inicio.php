<?php

session_start();
// require_once './acciones/validacion.php';
// echo"<p> Hola ".$_SESSION['username']." deseas salir? </p>";
// echo"<p><a href='../../acciones/logout.php'>Has click  aquí para salir</a> </p>\n<br>";
// echo "ESTAS EN LA PAGINA DE INICIO PARA EL VENDEDOR";

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
              <a class="navbar-brand" href="./home.php" style=" color:#C19A6B">Doña M</a>
              <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header" style=" color:#C19A6B">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Restaurante Doña M - Usuario: <?php echo "</br>".$_SESSION['username'] ?></h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" style=" color:#C19A6B">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item ">
                      <a class="nav-link active items-menu" aria-current="page" href="./ventas.php" >Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link items-menu" href="#" style="color:#C19A6B">Inventario</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link items-menu" href="./Config.php" style="color:#C19A6B">Configuración</a>
                      </li> 
                      <li class="nav-item">
                        <a class="nav-link items-menu" href="../../acciones/logout.php" style="color:#C19A6B">Salir</a>
                      </li>                   
                </div>
              </div>
            </div>
          </nav>          
    </div>

     <div class="m-4 p-5">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../../img/banner/bannerinicio.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../../img/banner/bannerinicio.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
              <img src="../../img/banner/bannerinicio.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div> 
    <div class="container text-center">
        <div class="row">
       
            <div class="rep-van-inv g-col-4 m-5">
                <img src="../../img/icons/VactorVentas.png" alt="Ventas">
                <p class="texto-tarjetas">Ventas</p>
            </div>
        
            <div class="rep-van-inv g-col-4 m-5">
                <img src="../../img/icons/VectorInventario.png" alt="Inventarios">
                <p class="texto-tarjetas">Inventario</p>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</body>
</html>
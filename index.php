<?php

session_start();

if(isset($_SESSION['user_id']) && $_SESSION['status'] == 1){

   
    switch ($_SESSION['user_id']) {
        case 1:
            header("Location: interfaces/admin/inicio.php");
            break;
        case 2:
            header("Location: interfaces/subadmin/inicio.php");
            break;
        case 3:
            header("Location: interfaces/ventas/inicio.php");
            break;
    }
    exit();
  
  }else {
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doña M</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
        <div class="">
            <div class="card shadow-lg quitar-bordes">
                <div class="card-body">
                    <div class="row my-5 mx-4">
                        <div class="col-12">
                            <h5>Inicio de sesión</h5>
                             <form action="acciones/login/validacion.php" method="post">   
                                    <div class="input-group mb-4 mt-4">
                                        <div class="d-flex estilo-icon-input align-items-center justify-content-center">
                                            <img class="mx-2" style="height: 15px; width: 15px;" src="img/icons/Vector.png">
                                        </div>
                                        <input type="text" class="quitar-borde-left form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="Username" id="Username" required>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="d-flex estilo-icon-input align-items-center justify-content-center">
                                            <img class="mx-2" style="height: 15px; width: 15px;" src="img/icons/VectorPass.png">
                                        </div>
                                        <input type="password" class="quitar-borde-left form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1" name="password" id="password" required>
                                    </div>


                                    ` <div class="my-4 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label estilos-links" style="float:left;" for="exampleCheck1">Recordarme</label>
                                    </div>`

                                    <div class="d-grid gap-2 mb-3">
                                    <a  href="./home.php" >
                                        <button type="submit" class="btn btn-primary" style="background-color: #646CA4;">Ingresar</button>
                                    </a>    
                                    
                                    </div>
                                    
                                    <span>
                                        <p><a class="estilos-links" href="#">¿Olvidaste tu contraseña?</a></p>
                                    </span>
                             </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
<?php

  }

  ?>

</html>
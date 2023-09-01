<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'Usuario.php';

    $usuario = new Usuario();
    $resultado = $usuario->iniciarSesion($_POST['usuario'], $_POST['contrasena']);

    if ($resultado) {
        header('Location: dashboard.php');
        exit();
    } else {
        $mensajeError = "Credenciales incorrectas. Por favor, intenta de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
   <div class="contenedor">
    
    <div id="login">
    <?php if (isset($mensajeError)) { echo "<p>$mensajeError</p>"; } ?>
    <p><b>Inicio de Sesion</b></p><br>
        <form method="POST" action="inicio.php">
            <br>
            <input type="text" placeholder="Usuario" class="form-control" name="usuario" require="true"><br>
            <br>
            <input type="password" placeholder="Contraseña" class="form-control" name="contrasena" require="true"><br>
            <input type="button" value="Iniciar sesión" class="btn-primary">
        </form>
    </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
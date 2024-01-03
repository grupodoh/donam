<?php

include('configuracion.php');

session_start();

$user = $_REQUEST['Username'];
$pass = $_REQUEST['password'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($conn->connect_error){
        die("Error de conexion: ".$conn->connect_error);
    }
}

$sql = "SELECT * FROM usuarios_sistema WHERE numero_documento = $user AND usuario_pass = '$pass' ";
$result = $conn->query($sql);

if($result->num_rows == 1){
    $row = $result->fetch_assoc();

    $_SESSION['user_id'] = $row['id_rol'];
    $_SESSION['username'] = $row['nombre_usuario'];
    
    $rol = $row['id_rol'];

    switch ($rol) {
        case 1:
            header("Location: ../interfaces/admin/inicio.php");
            break;
        case 2:
            header("Location: ../interfaces/subadmin/inicio.php");
            break;
        case 3:
            header("Location: ../interfaces/ventas/inicio.php");
            break;
    }
    exit();
    
}else{
    $error = "Usuario o contraseña incorrectos";
    header("Location: ../index.php");
}

?>
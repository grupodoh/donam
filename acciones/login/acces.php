<?php
include('../configuracion.php');


session_start();
function acceder($user, $pass, $con){

    /*
     se crea la consulta a la base de datos para adquirir toda la info del usuario el cual corresponda
     el user y password en la BD.     
     */
    $sql = "SELECT * FROM usuarios_sistema WHERE numero_documento = $user AND usuario_pass = '$pass' ";
    $result = $con->query($sql);


    /*
    Aquí se valida que la consulta traiga al menos un registro desde la base de datos
    */
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        //Aquí asignamos datos especificos a variables de session
        $_SESSION['user_id'] = $row['id_rol'];
        $_SESSION['username'] = $row['nombre_usuario'];
        $_SESSION['status'] = $row['estado'];

        $status = $row['estado'];
        $rol = $row['id_rol'];

        echo $_SESSION['status'];

        //Aquí se valida si el estado del usuario es activo (1) o incativo (0).
        if ($_SESSION['status'] == 2) {

            header('Location: ../../index.php');

        } else {

        //Si el estado del usuario es activo se valida el rol que tiene y se redirecciona al modulo que pertenece.
            switch ($rol) {
                case 1:
                    header("Location: ../../interfaces/admin/inicio.php");
                    break;
                case 2:
                    header("Location: ../../interfaces/subadmin/inicio.php");
                    break;
                case 3:
                    header("Location: ../../interfaces/ventas/inicio.php");
                    break;
                default:
                header("Location: ../../index.php");

            }
            exit();
        }
    }
}
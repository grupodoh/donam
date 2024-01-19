<?php
include("../../acciones/configuracion.php");
include('../../acciones/insertar/insertar_datos_clave_usuario.php');

$id = $_REQUEST['usuario'];
$pass = $_REQUEST['nueva_clave'];

 editarClaveUser($id, $pass, $conn);



header("Location: ../../interfaces/admin/config.php");   

?>
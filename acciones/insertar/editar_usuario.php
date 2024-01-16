<?php
include("../../acciones/configuracion.php");
include('../../acciones/insertar/insertar_datos_usuario_editado.php');

$id = $_REQUEST['id_usuario'];
$nombre = $_REQUEST['nombre_usuario'];
$apellido = $_REQUEST['apellido_usuario'];
$num_id = $_REQUEST['doc_usuario'];



editarInfoUser($id, $nombre, $apellido, $num_id, $conn);
    
   

header("Location: ../../interfaces/admin/usuarios.php");   

?>
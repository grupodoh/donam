<?php
include("../../acciones/configuracion.php");
include('../../acciones/insertar/insertar_datos_usuario_creado.php');

$nombre = $_REQUEST['nombre_usuario'];
$apellido = $_REQUEST['apellido_usuario'];
$id_tipo_doc = $_REQUEST['tipo_doc_usuario'];
$doc_num = $_REQUEST['doc_usuario'];
$id_rol = $_REQUEST['tipo_rol'];
$contra = $_REQUEST['password'];
$estado = $_REQUEST['estado_usuario'];




crearUsuario( $nombre, $apellido, $id_tipo_doc, $doc_num, $id_rol, $contra, $estado, $conn);
    
   

header("Location: ../../interfaces/admin/usuarios.php");   

?>
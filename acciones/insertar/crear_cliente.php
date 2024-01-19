<?php
include("../../acciones/configuracion.php");
include('../../acciones/insertar/insertar_datos_cliente_creado.php');

$nombre = $_REQUEST['nombre_cliente'];
$apellido = $_REQUEST['apellido_cliente'];
$doc_num = $_REQUEST['num_id_cliente'];
$num_cel = $_REQUEST['num_tel_cel'];
$direccion = $_REQUEST['direccion'];





crearCliente( $nombre, $apellido, $doc_num, $num_cel, $direccion, $conn);
    
   

header("Location: ../../interfaces/admin/clientes.php");   

?>
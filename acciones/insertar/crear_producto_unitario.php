<?php
include("../../acciones/configuracion.php");
include('../../acciones/insertar/insertar_datos_nuevo_producto_unitario.php');

$nombreProd = $_REQUEST['nombre_pu'];
$cantidadProd = $_REQUEST['cantidad_unidad'];
$unidadMedidaProd = $_REQUEST['tipo_unidad'];





crearProductoUnitaio($nombreProd, $cantidadProd, $unidadMedidaProd, $conn);
    
   

header("Location: ../../interfaces/admin/lista_productos_unitarios.php");   

?>
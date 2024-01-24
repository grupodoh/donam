nombre_unidad

<?php
include("../../acciones/configuracion.php");
include('../../acciones/insertar/insertar_unidad_medida.php');

$nombre_unidad = $_REQUEST['nombre_unidad'];

crearUnidadMedida( $nombre_unidad, $conn);
    
   

header("Location: ../../interfaces/admin/unidades_medida.php");   

?>
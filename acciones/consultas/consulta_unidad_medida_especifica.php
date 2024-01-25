
<?php
include("../../acciones/configuracion.php");
function getUnidadesMedidaEspe($con , $id_unidad)
{
    $sql = "SELECT * FROM `unidades_medida_sistema` WHERE id_unidad = $id_unidad;";
    $result = $con->query($sql);

    return $result;
}
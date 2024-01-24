
<?php
include("../../acciones/configuracion.php");
function getUnidadesMedida($con)
{
    $sql = "SELECT * FROM `unidades_medida_sistema` ;";
    $result = $con->query($sql);

    return $result;
}
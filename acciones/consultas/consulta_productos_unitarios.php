
<?php
include("../../acciones/configuracion.php");
function getProductosUnitarios($con)
{
    $sql = "SELECT * FROM `productos_unitarios` ;";
    $result = $con->query($sql);

    return $result;
}
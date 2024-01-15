
<?php
include("../../acciones/configuracion.php");
function getRoles($con)
{
    $sql = "SELECT * FROM `rol_sistema` ;";
    $result = $con->query($sql);

    return $result;
}
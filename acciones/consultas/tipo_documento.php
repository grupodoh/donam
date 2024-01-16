<?php
include("../../acciones/configuracion.php");
function getTipoDocumento($con)
{
    $sql = "SELECT * FROM `tipo_documento` ;";
    $result = $con->query($sql);

    return $result;
}
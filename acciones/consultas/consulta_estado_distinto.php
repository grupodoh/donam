<?php
include("../../acciones/configuracion.php");
function getEstadoDif($estado,$con)
{
    $sql = "SELECT * FROM `estado_usuario` WHERE estado <> $estado;";
    $result = $con->query($sql);

    return $result;
}

?>
<?php
include("../../acciones/configuracion.php");
function getEstado($id_user,$con)
{
    $sql = "SELECT * FROM `usuarios_sistema` WHERE id_usuario = $id_user;";
    $result = $con->query($sql);

    return $result;
}

?>
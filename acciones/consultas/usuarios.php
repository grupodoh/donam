
<?php
include("../../acciones/configuracion.php");
function getUsers($con)
{
    $sql = "SELECT * FROM `usuarios_sistema` ;";
    $result = $con->query($sql);

    return $result;
}
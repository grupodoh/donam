
<?php
include("../../acciones/configuracion.php");
function getClientes($con)
{
    $sql = "SELECT * FROM `clientes_sistema` ;";
    $result = $con->query($sql);

    return $result;
}
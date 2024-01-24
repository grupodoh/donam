<?php
    function crearUnidadMedida($nombreUnidad, $con){

    $sql = "INSERT INTO `unidades_medida_sistema` (`id_unidad`, `nombre_unidad`) VALUES (NULL, '$nombreUnidad');";

    $result = $con->query($sql);

    return $result;


}

?>
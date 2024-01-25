<?php

function getCategorias($con){
    $sql = "SELECT * FROM categorias_sistema";

    $result = $con ->query($sql);

    return $result;
}


?>
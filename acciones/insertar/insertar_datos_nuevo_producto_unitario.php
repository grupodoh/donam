<?php
    function crearProductoUnitaio($nombreProd, $cantidadProd, $unidadMedidaProd, $con){

    $sql = "INSERT INTO `productos_unitarios` (`id_producto_unitario`, `nombre_producto_unitario`, `cantidad_producto_unitario`, `id_unidad_medida`) 
    VALUES (NULL, '$nombreProd', '$cantidadProd', '$unidadMedidaProd');
    ";

    $result = $con->query($sql);

    return $result;


}

?>
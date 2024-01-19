<?php
    function crearCliente($nombre, $apellido, $id_num, $cel_tel, $dir, $con){

    $sql = "INSERT INTO clientes_sistema (nombre_cliente, apellido_cliente, num_documento, telefono_cliente, direccion)
    VALUES ('$nombre', '$apellido', '$id_num', '$cel_tel', '$dir');";

    $result = $con->query($sql);

    return $result;


}

?>
<?php
    function crearUsuario($nombre, $apellido, $tipo_id, $num_id, $tipo_rol, $pass, $estado, $con){

    $sql = "INSERT INTO usuarios_sistema (nombre_usuario, apellido_usuario, id_tipo_documento, numero_documento, id_rol, usuario_pass, estado)
    VALUES ('$nombre', '$apellido', '$tipo_id', '$num_id', '$tipo_rol', '$pass', '$estado');";

    $result = $con->query($sql);

    return $result;

}

?>
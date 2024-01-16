<?php
    function editarInfoUser($id, $nombre, $apellido, $num_id, $con){

    $sql = "UPDATE usuarios_sistema
    SET nombre_usuario = '$nombre',
        apellido_usuario = '$apellido',
        numero_documento = '$num_id'
    WHERE id_usuario = $id;";

    $result = $con->query($sql);

    return $result;

}


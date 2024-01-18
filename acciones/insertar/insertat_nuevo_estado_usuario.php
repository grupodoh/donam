<?php
    function editarEstadoUser($id, $estado, $con){

    $sql = "UPDATE usuarios_sistema
    SET estado = '$estado'
    WHERE id_usuario = $id;";

    $result = $con->query($sql);

    return $result;

}

?>
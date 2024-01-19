<?php
    function editarClaveUser($id, $pass, $con){

    $sql = "UPDATE usuarios_sistema
    SET usuario_pass = '$pass'
    WHERE id_usuario = $id ;";

   $con->query($sql);

}

?>
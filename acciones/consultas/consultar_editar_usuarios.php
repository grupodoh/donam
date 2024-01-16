<?php

include('../../acciones/configuracion.php');

function editarUsuario($id, $con){   

        $sql = "SELECT * FROM usuarios_sistema WHERE id_usuario = $id;";
        $result = $con->query($sql);
    
        return $result;
   
}

?>
<?php
include("../../acciones/configuracion.php");
include('../../acciones/consultas/consulta_estados.php');
include('../../acciones/insertar/insertat_nuevo_estado_usuario.php');

$id = $_REQUEST['id_user'];

$estado_user = getEstado($id,$conn);
foreach ($estado_user as $estado) {
    
if($estado['estado'] == 1){

editarEstadoUser($id, 2, $conn);

}else{
    editarEstadoUser($id, 1, $conn);
}
}
   

header("Location: ../../interfaces/admin/usuarios.php");   

?>
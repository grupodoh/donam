<?php
include('acces.php');
include('../configuracion.php');



$user = $_REQUEST['Username'];
$pass = $_REQUEST['password'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($conn->connect_error){
        die("Error de conexion: ".$conn->connect_error);
    }
}

acceder($user,$pass, $conn);



?>
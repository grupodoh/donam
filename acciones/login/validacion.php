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

//Se usa la función acceder y se envian las variables $user,$pass, $conn
acceder($user,$pass, $conn);



?>
<?php
$host = "localhost";    
$usuario = "root";
$contraseña = "";
$nombre_bd = "valores_referenciales";

$con = new mysqli($host, $usuario, $contraseña, $nombre_bd);
if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
} else {
    // echo "Conexión exitosa a la base de datos.";
}   
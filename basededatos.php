<?php
$conexion = new mysqli("localhost", "root", "", "gestion");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>

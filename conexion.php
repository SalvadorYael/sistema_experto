<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "sistema_experto";

$conexion = new mysqli($servidor, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>
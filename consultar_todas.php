<?php

include("conexion.php");

$sql = "SELECT * FROM enfermedades";
$resultado = $conexion->query($sql);

$datos = [];

while($fila = $resultado->fetch_assoc()){
$datos[] = $fila;
}

echo json_encode($datos);

?>
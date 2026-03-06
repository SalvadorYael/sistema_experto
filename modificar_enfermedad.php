<?php

$conexion = new mysqli("localhost","root","","sistema_experto");

if($conexion->connect_error){
die("conexion_error");
}

$nombre = trim($_POST["nombre"]);
$descripcion = trim($_POST["descripcion"]);

$sql = "UPDATE enfermedades 
        SET descripcion='$descripcion'
        WHERE nombre='$nombre'";

$conexion->query($sql);

if($conexion->affected_rows > 0){
echo "ok";
}else{
echo "no";
}

$conexion->close();

?>
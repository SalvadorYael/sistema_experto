<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO enfermedades(nombre,descripcion)
VALUES('$nombre','$descripcion')";

if($conn->query($sql) === TRUE){
echo "Registro guardado";
}else{
echo "Error";
}

?>
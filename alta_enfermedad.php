<?php

include("conexion.php");

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$imagen = $_FILES["imagen"]["name"];
$ruta = "imagenes/" . $imagen;

move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

$sql = "INSERT INTO enfermedades(nombre,descripcion,imagen)
VALUES('$nombre','$descripcion','$ruta')";

if($conexion->query($sql)){
echo "ok";
}else{
echo "error: " . $conexion->error;
}

?>
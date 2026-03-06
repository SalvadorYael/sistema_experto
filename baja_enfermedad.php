<?php
include("conexion.php");

$nombre = $_POST["nombre"];

$sql = "DELETE FROM enfermedades WHERE nombre='$nombre'";

if($conexion->query($sql)){
echo "ok";
}else{
echo "error";
}

?>
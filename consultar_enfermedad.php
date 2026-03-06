<?php
include("conexion.php");

$nombre = $_POST["nombre"];

$sql = "SELECT * FROM enfermedades WHERE nombre='$nombre'";

$resultado = $conexion->query($sql);

if($resultado->num_rows>0){

$fila = $resultado->fetch_assoc();

echo json_encode($fila);

}else{

echo "no";

}

?>

<?php

$conexion = new mysqli("localhost","root","","sistema_experto");

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$imagenRuta = "";

if(isset($_FILES["imagen"])){

$nombreImagen = $_FILES["imagen"]["name"];
$temp = $_FILES["imagen"]["tmp_name"];

$ruta = "imagenes/".$nombreImagen;

move_uploaded_file($temp,$ruta);

$imagenRuta = $ruta;

}

$verificar = $conexion->query("SELECT * FROM enfermedades WHERE nombre='$nombre'");

if($verificar->num_rows > 0){

$sql = "UPDATE enfermedades SET descripcion='$descripcion'";

if($imagenRuta!=""){
$sql .= ", imagen='$imagenRuta'";
}

$sql .= " WHERE nombre='$nombre'";

}else{

$sql = "INSERT INTO enfermedades(nombre,descripcion,imagen)
VALUES('$nombre','$descripcion','$imagenRuta')";

}

if($conexion->query($sql)){
echo "ok";
}else{
echo "error";
}

?>
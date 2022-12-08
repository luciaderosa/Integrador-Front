<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contenido = $_POST['contenido'];
$query = "INSERT INTO orador (nombre, apellido, contenido) VALUES ('$nombre', '$apellido','$contenido')";
include('../includes/guardar.php');
?>
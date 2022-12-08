<?php
include('db.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$contenido = $_POST['contenido'];
$query = "INSERT INTO orador (nombre, apellido, contenido) VALUES ('$nombre', '$apellido','$contenido')";

$result = mysqli_query($conn, $query);
header("Location: index.php#convierte");

?>
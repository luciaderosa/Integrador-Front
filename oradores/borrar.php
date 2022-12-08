<?php
$id=$_GET['id'];
$query= "DELETE FROM orador WHERE id=$id";
include('../includes/borrar.php');
?>
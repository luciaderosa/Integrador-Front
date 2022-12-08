<?php

include('../db.php');

if(isset($id)){
        
    $result= mysqli_query($conn,$query);
    if (!$result){
        die('No se pudo borrar el registro');
    }
    $_SESSION['mensaje']= 'Registro borrado';
    $_SESSION['tipo']= 'danger';
}

header("Location: vista.php");
?>
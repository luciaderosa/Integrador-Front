<?php
include('../db.php');

if (isset($_POST['guardar'])) {
    $result = mysqli_query($conn, $query);

    if (!$result) {
        $_SESSION['mensaje'] = "Error: " . mysqli_errno($conn) . " - " .mysqli_error($conn);
        $_SESSION['tipo'] = 'danger';
        header("Location: vista.php");
    } else {
        $_SESSION['mensaje'] = 'Registro guardado correctamente';
        $_SESSION['tipo'] = 'success';
        header("Location: vista.php");
    }
}

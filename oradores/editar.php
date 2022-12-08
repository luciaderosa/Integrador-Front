<?php
include('../db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM orador WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $contenido = $row['contenido'];
    } else {
        die('No se pudo leer el registro');
    }
}
if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellido = $row['apellido'];
    $contenido = $_POST['contenido'];

    $query = "UPDATE orador SET nombre= '$nombre', apellido='$apellido', contenido = '$contenido' WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $_SESSION['mensaje'] = 'Registro actualizado correctamente';
        $_SESSION['tipo'] = 'warning';
    } else {
        $_SESSION['mensaje'] = "Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn);
        $_SESSION['tipo'] = 'danger';
    }
    header("Location: vista.php");
}
if (isset($_POST['cancelar'])) {

    header("Location: vista.php");
}
?>

<?php include("../includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">

            <div class="car card-body">
            <h5 class="card-title">Edición del Orador</h5>
                <form action="editar.php?id=<?= $_GET['id'] ?>" method="POST">
                    <div class="form-group mb-3">
                        <input type="text" name="nombre" class="form-control" value="<?= $nombre ?>" placeholder="Actualiza el nombre" />
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="apellido" class="form-control" value="<?= $apellido ?>" placeholder="Actualiza el apellido" />
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="contenido" class="form-control" value="<?= $contenido ?>" placeholder="Actualiza el contenido" />
                    </div>
                    <div class="d-grid gap-4">
                        <input type="submit" value="Modificar" class="btn btn-success" name="actualizar" />
                        <input type="submit" value="Cancelar" class="btn btn-secondary" name="cancelar" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include("../includes/footer.php") ?>
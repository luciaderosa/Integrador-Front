<?php include('../db.php') ?>
<?php include('../includes/header.php') ?>

<div class="container p-4">
  <div class="row">
    <h1>Oradores</h1>
    <div class="col-md-4">
      <?php include('../includes/alertban.php') ?>
      <div class="car card-body">
        <h5 class="card-title">Agregar Orador</h5>
        <form action="guardar.php" method="POST">
          <div class="form-group my-3">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre del orador" required autofocus />
          </div>
          <div class="form-group my-3">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido del orador" required/>
          </div>
          <div class="form-group mb-3">
            <input type="text" name="contenido" class="form-control" placeholder="Contenido de la charla" />
          </div>

          <div class="d-grid col-12">
            <input type="submit" value="Guardar" class="btn btn-success" name="guardar" />
          </div>
        </form>
      </div>
    </div>

    <div class="col-md-8">
      <table class="table table-striped">
        <caption>Lista de Oradores</caption>
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Contenido</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM orador";
          $result = mysqli_query($conn, $query);
          $i = 0;
          while ($row = mysqli_fetch_array($result)) {
            $i++ ?>
            <tr>
              <th><?= $i ?></th>
              <td><?= $row['nombre'] ?></td>
              <td><?= $row['apellido'] ?></td>
              <td><?= $row['contenido'] ?></td>
              <td>
                <a href="editar.php?id=<?= $row['id'] ?>" class="btn btn-primary">
                  <i class="fa-solid fa-pencil"></i></a>
                <a href="borrar.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('¿Realmente desea eliminar?')">
                  <i class="fa-solid fa-trash-can"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include('../includes/footer.php') ?>
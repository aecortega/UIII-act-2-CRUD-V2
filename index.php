<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">

          <div class="form-group">
            <input type="number" name="id_productos" class="form-control" placeholder="id Producto" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="n_producto" class="form-control" placeholder="Nombre del Producto" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" autofocus>
          </div>
          <div class="form-group">
            <input type="number" name="precio" class="form-control" placeholder="Precio" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="talla" class="form-control" placeholder="Talla" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="marca" class="form-control" placeholder="Marca" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="modelo" class="form-control" placeholder="Modelo" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="corte" class="form-control" placeholder="Corte" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="color" class="form-control" placeholder="Color" autofocus>
          </div>

          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>id de Producto</th>
            <th>nombre producto</th>
            <th>descripcion</th>
            <th>precio</th>
            <th>talla</th>
            <th>marca</th>
            <th>modelo</th>
            <th>corte</th>
            <th>color</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM productos";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id_productos']; ?></td>
            <td><?php echo $row['n_producto']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['talla']; ?></td>
            <td><?php echo $row['marca']; ?></td>
            <td><?php echo $row['modelo']; ?></td>
            <td><?php echo $row['corte']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td>
              <a href="edit.php?id_productos=<?php echo $row['id_productos']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id_productos=<?php echo $row['id_productos']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>

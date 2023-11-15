<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id_productos'])) {
  $id_productos = $_GET['id_productos'];
  $query = "SELECT * FROM productos WHERE id_productos=$id_productos";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $n_producto = $row['n_producto'];
    $descripcion = $row['descripcion'];
    $precio = $row['precio'];
    $talla = $row['talla'];
    $marca = $row['marca'];
    $modelo = $row['modelo'];
    $corte = $row['corte'];
    $color = $row['color'];
  }
}

if (isset($_POST['update'])) {
  $id_productos = $_GET['id_productos'];
  $n_producto = $_POST['n_producto'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $talla = $_POST['talla'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $corte = $_POST['corte'];
  $color = $_POST['color'];

  $query = "UPDATE productos set n_producto = '$n_producto', descripcion = '$descripcion' , precio = '$precio' , talla = '$talla' , marca = '$marca' , modelo = '$modelo' , corte = '$corte' , color = '$color' WHERE id_productos=$id_productos";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'productos Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id_productos=<?php echo $_GET['id_productos']; ?>" method="POST">
        <div class="form-group">
          <input name="id_productos" type="text" class="form-control" value="<?php echo $id_productos; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="n_producto" type="text" class="form-control" value="<?php echo $n_producto; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="descripcion" type="text" class="form-control" value="<?php echo $descripcion; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="precio" type="text" class="form-control" value="<?php echo $precio; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="talla" type="text" class="form-control" value="<?php echo $talla; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="marca" type="text" class="form-control" value="<?php echo $marca; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="modelo" type="text" class="form-control" value="<?php echo $modelo; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="corte" type="text" class="form-control" value="<?php echo $corte; ?>" placeholder="Update Title">
        </div>
        </div>
        <div class="form-group">
          <input name="color" type="text" class="form-control" value="<?php echo $color; ?>" placeholder="Update Title">
        </div>

        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $id_productos = $_POST['id_productos'];
  $n_producto = $_POST['n_producto'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $talla = $_POST['talla'];
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $corte = $_POST['corte'];
  $color = $_POST['color'];
  $query = "INSERT INTO productos (id_productos, n_producto, descripcion, precio, talla, marca, modelo, corte, color) VALUES ('$id_productos', '$n_producto', '$descripcion', '$precio', '$talla', '$marca', '$modelo', '$corte', '$color')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'productos Guardados Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
 
}

?>

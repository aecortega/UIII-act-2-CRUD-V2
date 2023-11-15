<?php

include("db.php");

if(isset($_GET['id_productos'])) {
  $id_productos = $_GET['id_productos'];
  $query = "DELETE FROM productos WHERE id_productos = $id_productos";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>

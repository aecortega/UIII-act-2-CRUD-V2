<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bd_aeco'
) or die(mysqli_error($mysqli));

?>

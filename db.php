<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'CRUD_phpmysql'
) or die(mysqli_erro($mysqli));

?>

<?php
  include "connection.php";
  $var = $_GET['id'];
  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "DELETE FROM news WHERE id='$var'";
if ($con->query($sql) === TRUE) {
  header("Location:news.php");
} else {
    header("Location:news.php");
}

 ?>

<?php
  include "connection.php";
  $var = $_GET['id'];
  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "DELETE FROM experience WHERE ex_id='$var'";
if ($con->query($sql) === TRUE) {
  header("Location:myexperience.php");
} else {
    header("Location:myexperience.php");
}

 ?>

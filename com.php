<?php
session_start();
include("connection.php");
if ($_GET) {
$comment = $_GET['comment'];
$ex_id  = $_GET['id'];
$username = $_SESSION['name'];
$query = "INSERT INTO comments VALUES(null,'".$username."','".$comment."','".$ex_id."')";
if(!$con->query($query)){
  echo $con->error;
}
}
header("Location:otherex.php");
?>

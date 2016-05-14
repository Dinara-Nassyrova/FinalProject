<?php
  include "connection.php";
  $var = $_GET['id'];
  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sqlSecond = "DELETE FROM comments where expe_id = '$var'";
$sql = "DELETE FROM experience WHERE ex_id='$var'";
if ($con->query($sqlSecond) === TRUE) {
	if($con->query($sql)===TRUE){
		header("Location:myexperience.php");
	}
}else {
    header("Location:myexperience.php");
}

 ?>

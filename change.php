<?php 
	include "connection.php";
	$id = $_POST['id'];
	$status = $_POST['status'];
	if($status==0){
		$status=1;
	}else{
		$status=0;
	}
	$query = "UPDATE users SET status='".$status."' WHERE id='".$id."'";
	if($con->query($query)){
		echo "OK";
	}else{
		echo "ERROR";
	}
?>
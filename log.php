<?php 
  include "connection.php";
  $name = $_POST['name'];
  $password = $_POST['password'];
  $sql_query = "SELECT * FROM users WHERE name='".$name."' AND password='".$password."'";
  if($res=$con->query($sql_query)){
    if(mysqli_num_rows($res)>0){
      $data = $res->fetch_array();
      session_start();
      $_SESSION['id'] = $data['id'];
      $_SESSION['name'] = $data['name'];
      $_SESSION['status'] = $data['status'];
      header("Location:index.php");
    }else{
      header("Location:login.php");
    }
  }
?>
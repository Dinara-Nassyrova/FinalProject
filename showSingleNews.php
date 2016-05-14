<?php
  session_start();
  if(!isset($_SESSION['status'])){
    header("Location:index.php");
  }
	include "connection.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM news WHERE id = '".$id."'";
	$row = $con->query($query)->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  <style media="screen">
  .navik{
    background-color: rgb(68,156,186);
  }
  #s-nav{
    margin-top: 2%;
  }
  .footer{
    width: 100%;
    height: 150px;
    background-color: rgb(68,156,186);
    display: inline-block;
  }
  .jumbotron{
    margin: 0px auto;
    margin-top: 5%;
    width: 90%;
    }
  </style>
</head>
<body>
  <?php
  //INCLUDE NAV.PHP for navigation bar
    include("nav.php");
  ?>

	<div class="jumbotron">
    <h2 style="text-align:center;">Today's news</h2>
	  <img src="<?php echo $row['image']?>" style="width:500px;margin-left:32%;">
	  <h1><?php echo $row['title']?></h1>
	  <p><?php echo $row['text'];?></p>
	</div>


  <div class="footer">
  <div class="footimg">
     <img src="files/1.png" alt="..." style=" width:11%; height:100px; margin-top:30px; margin-left:630px;">
     <h1 style="text-align:center"></h1>
</div>
</div>

</body>
</html>

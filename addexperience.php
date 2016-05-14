<?php
session_start();
if(!isset($_SESSION['status']) || $_SESSION['status']==1){
  header("Location:index.php");
}
include("connection.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Add news</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
      position: absolute;
      bottom: 0px;
      background-color: rgb(68,156,186);
      display: inline-block;
    }
    .container{
      margin-top: 5%;
      width: 80%;
    }
    </style>
  </head>
  <body>
      <?php
  //INCLUDE NAV.PHP for navigation bar
    include("nav.php");
  ?>
    <div class="container">

	<form method="POST" action="" enctype="multipart/form-data">
	  <div class="form-group">
      <label for="sel1">Select list:</label>
        <select class="form-control" id="sel1" name="type">
          <option>Market</option>
          <option>Internet shopping</option>
          <option>Sale</option>
          <option>Something</option>
        </select>
	  </div>
    <fieldset class="form-group">
    <label for="exampleInputEmail1">Money</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="money" placeholder="Enter your money">
    <small class="text-muted">Enter only your really money</small>
  </fieldset>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <textarea name = "description" cols="68" rows="10"></textarea>
    </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
      </div>
      <?php
      if ($_POST) {
      $money = $_POST['money'];
      $type = $_POST['type'];
      $user_id = $_SESSION['id'];
      $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
      $query = "INSERT INTO experience VALUES(null,'".$user_id."','".$type."','".$money."','".$description."')";
      if(!$con->query($query)){
        echo $con->error;
      }
      }
      ?>
    </div>
      <div class="footer">
      <div class="footimg">
         <img src="files/1.png" alt="..." style=" width:11%; height:100px; margin-top:30px; margin-left:630px;">
         <h1 style="text-align:center"></h1>
    </div>
    </div>

  </body>
</html>

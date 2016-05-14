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
    <title>Add comment</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
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

	<form method="GET" action="com.php" enctype="text/plain">
    <fieldset class="form-group">
    <label for="exampleInputEmail1">Comment</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="comment" placeholder="Enter your comment">
    <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
    <small class="text-muted">Please,enter without mistakes</small>
  </fieldset>

	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
      </div>
    </div>
      <div class="footer">
      <div class="footimg">
         <img src="files/1.png" alt="..." style=" width:11%; height:100px; margin-top:30px; margin-left:630px;">
         <h1 style="text-align:center"></h1>
    </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>

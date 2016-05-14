<?php
session_start();
if(!isset($_SESSION['status']) || $_SESSION['status']==0){
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
	    <label for="exampleInputEmail1">Title</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Information</label>
	    <textarea name = "text" cols="68" rows="10"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputFile">File input</label>
	    <input type="file" id="exampleInputFile" name="img">
	    <p class="help-block">Upload only jpg/png files</p>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
      </div>

      <?php
      if ($_POST) {
      if (move_uploaded_file($_FILES['img']['tmp_name'], "files/".
        $_FILES['img']['name'])) {
      } else {
      }
      $title = $_POST['title'];
      $text = htmlspecialchars($_POST['text'], ENT_QUOTES);
      $image = "files/".$_FILES['img']['name'];
      $query = "INSERT INTO news VALUES(null,'".$title."','".$text."','".$image."')";
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

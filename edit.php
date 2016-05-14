<?php
session_start();
if(!isset($_SESSION['status'])){
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Edit news</title>
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
      position: absolute;
      bottom: 0px;
      width: 100%;
      height: 150px;
      background-color: rgb(68,156,186);
      display: inline-block;
    }
    .container{
      margin-top: 5%;
      width: 90%;
      }
    .buttonShow:hover{
      box-shadow: 0 0 10px rgba(2,2,2,0.9);
        }
      .glyphicon{
        position: absolute;
      }
      .glyphicon-remove{
        right: 10%;
        top: 1.6%;
      }
      .glyphicon-pencil{
        right: 20%;
        top: 1.6%;
      }
      .myForm{
        width: 50%;
        margin-left: 40%;
        }
    </style>
  </head>
  <body>
  <?php
  //INCLUDE NAV.PHP for navigation bar
    include("nav.php");
  ?>
    
    <div class="container">
      <h2 style="text-align:center">News</h2>
    <div  class="col-md-10" >
    <?php
    	include "connection.php";
      $var = $_GET['id'];
      $query = "SELECT * FROM news where id='$var'";
    	$res = $con->query($query);
    	while($row=$res->fetch_array()){
    	?>
      <form class="myForm" action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <label for="">Title</label><input type="text" name="title" value="<?php echo $row['title']?>"><br>
        <label for="">Text</label><input type="text" name="text" value="<?php echo $row['text']?>"><br>
        <label for="">Files</label><input type="file" name="img" value="<?php echo $row['image']?>">
        <button type="submit" name="button">Save</button>
      </form>
      <?php
    	}
    ?>
    </div>
    </div>


    <div class="footer">
    <div class="footimg">
       <img src="files/1.png" alt="..." style=" width:11%; height:100px; margin-top:30px; margin-left:630px;">
       <h1 style="text-align:center"></h1>
  </div>
  </div>
</body>
</html>

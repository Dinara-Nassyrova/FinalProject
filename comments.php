<?php
session_start()
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Main Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style media="screen">
    .navik{
      background-color: rgb(68,156,186);
    }
    #s-nav{
      margin-top: 4%;
    }

    .carousel{
      height: 360px;
      border: none;
    }
    .slide{
      height: 380px;
      border: none;
    }
    .carousel-inner{
      height: 380px;
      border: none;
    }

    .footer{
      position: absolute;
      bottom: 0px;
      width: 100%;
      height: 150px;
      background-color: rgb(68,156,186);
      display: inline-block;
    }
    .content{
      width: 93%;
      margin: 0px auto;
    }
    .caption{
      text-align: center;
    }
    </style>
  </head>
  <body>
  <?php
  //INCLUDE NAV.PHP for navigation bar
    include("nav.php");
  ?>

    <div class="container">
        <h2 style="text-align:center">Comments</h2>
      <div class="col-md-12" style="overflow:hidden">
        <ul class="list-group">
          <?php
          	include "connection.php";
            $var = $_GET['id'];
          	$query = "SELECT * FROM comments join experience on comments.expe_id = experience.ex_id where ex_id='$var'";
          	$res = $con->query($query);
            $i = 0;
          	while($row=$res->fetch_array()){
              $i++;
              ?>
        <li class="list-group-item">
          <?php
          echo "# <strong>".$i."</strong> </br>Added by :<strong>".$row['username']."</strong></br> Comment: <strong>".$row['comment']."</strong></br>";
           ?>
        </li>
            <?php } ?>
        </ul>
      </div>
    </div>

  <div class="footer col-sm-12 col-md-12 col-xs-12 col-lg-12 ">
    <div class="footimg">
       <img src="files/1.png" alt="..." style=" width:11%; height:100px; margin-top:30px; margin-left:630px;">
       <h1 style="text-align:center"></h1>
  </div>
  </div>


   </body>
</html>

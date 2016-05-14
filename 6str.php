<?php session_start();
  if(!isset($_SESSION['status'])){
    header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sixth Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
      background-color: rgb(68,156,186);
      display: inline-block;
    }
    .container{
      height: 600px;
    }
    .content{
      width: 93%;
      margin: 0px auto;
    }
    .caption{
      text-align: center;
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
    </style>
  </head>
  <body>
  <?php
  //INCLUDE NAV.PHP for navigation bar
    include("nav.php");
  ?>

  <div class="container ">
    <div id="s-nav" class="col-md-10 col-xs-6 col-sm-6 col-lg-10 col-md-offset-1 ">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
            <div class="carousel-inner">
              <div class="item active">
                <img src="files/1.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>EXPLORE</h3>
                </div>
              </div>
              <div class="item">
                <img src="files/2.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>LEARN</h3>
                </div>
              </div>
              <div class="item">
                <img src="files/3.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>MAKE</h3>
                </div>
              </div>
              <div class="item active">
                <img src="files/4.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>CHANGE</h3>
                </div>
              </div>
              <div class="item active">
                <img src="files/1.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>OPEN</h3>
                </div>
              </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
         </div>
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

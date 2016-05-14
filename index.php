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
    <div id="s-nav" class="col-md-2 col-xs-6 col-sm-6 col-lg-2 ">
      <ul class="list-group">
          <li class="list-group-item"><button type="button" class="btn btn-info"><a href="2str.php" style="color:white; text-decoration:none; text-align:center;">Dictionary of Terms</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info"><a href="3str.php" style="color:white; text-decoration:none; text-align:center;">Business Forms</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info"><a href="4str.php" style="color:white; text-decoration:none; text-align:center;">Events And Webinars</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info"><a href="5str.php" style="color:white; text-decoration:none; text-align:center;">Favourite Posts</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info"><a href="6str.php" style="color:white; text-decoration:none; text-align:center;">Best Experiences</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info"><a href="7str.php" style="color:white; text-decoration:none; text-align:center;">Financial Services</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-info"><a href="3str.php" style="color:white; text-decoration:none; text-align:center;">Professional Staffing</a></button></li>
      </ul>
    </div>
    <div id="s-nav" class="col-md-10 col-xs-6 col-sm-6 col-lg-10 ">
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

  <div class="content">
      <div class="row">
      <div class="col-sm-12 col-md-4 col-xs-12 col-lg-4 ">
        <div class="thumbnail">
          <img src="files/5.jpg" alt="All over the world" style="width:450px; height:190px;">
          <div class="caption">
            <h3>Accounting </h3>
            <p>Accounting was the course that
                     helped me more than anything.
                          Julian Robertson</p>
            <p><a href="#" class="btn btn-success" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-xs-12 col-lg-4 ">
        <div class="thumbnail">
          <img src="files/6.jpg" alt="..." style="width:350px; height:190px;">
          <div class="caption">
            <h3>Differentiation</h3>
            <p>There's no business like show business, but there are several businesses like accounting. David Letterman</p>
            <p><a href="#" class="btn btn-success" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-xs-12 col-lg-4 ">
        <div class="thumbnail">
          <img src="files/7.jpg" alt="..." style="width:450px; height:190px;">
          <div class="caption">
            <h3>NEWS</h3>
            <p>Accounting rules give financial institutions flexibility about when they choose to recognize venture capital profits. Alex Berenson</p>
            <p><a href="#" class="btn btn-success" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-xs-12 col-lg-4 ">
        <div class="thumbnail">
          <img src="files/8.jpg" alt="..." style="width:450px; height:210px;">
          <div class="caption">
            <h3>Investments</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-xs-12 col-lg-4 ">
        <div class="thumbnail">
          <img src="files/9.png" alt="..." style="width:450px; height:210px;">
          <div class="caption">
            <h3>ECONOMY</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-xs-12 col-lg-4 ">
        <div class="thumbnail">
          <img src="files/10.png" alt="..." style="width:450px; height:210px;">
          <div class="caption">
            <h3>FINANACE </h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-xs-12 col-lg-4 ">
        <div class="thumbnail">
          <img src="files/11.jpg" alt="..." style="width:450px; height:210px;">
          <div class="caption">
            <h3>Develope</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-xs-12 col-lg-4 ">
        <div class="thumbnail">
          <img src="files/12.jpg" alt="..." style="width:450px; height:210px;">
          <div class="caption">
            <h3>FUTURE</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-xs-12 col-lg-4 ">
        <div class="thumbnail">
          <img src="files/13.jpg" alt="..." style="width:450px; height:210px;">
          <div class="caption">
            <h3>Profit vs Loss</h3>
            <p>...</p>
            <p><a href="#" class="btn btn-primary" role="button">Press</a> <a href="#" class="btn btn-success" role="button">Learn More</a></p>
          </div>
        </div>
      </div>

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

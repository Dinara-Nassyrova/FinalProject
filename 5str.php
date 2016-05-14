<?php session_start();
  if(!isset($_SESSION['status'])){
    header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Fifth Page</title>
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

    .container{
      margin: 0px auto;
      margin-top: 4%;
      width: 95%;
    }


    .carousel{
      height: 200px;
      border: none;
    }
    .slide{
      height: 200px;
      border: none;
    }
    .carousel-inner{
      height: 200px;
      border: none;
    }

    .footer{
      position: absolute;
      bottom: 0px;
      width: 100%;
      height: 100px;
      margin-top: auto;
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
      <div id="s-nav" class="col-md-6 col-xs-6 col-sm-6 col-lg-6 ">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          </ol>

    <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="files/1.jpg" alt="...">
              <div class="carousel-caption">
                  <h3>first</h3>
              </div>
            </div>
            <div class="item">
              <img src="files/2.jpg" alt="...">
              <div class="carousel-caption">
                  <h3>second</h3>
              </div>
            </div>
            <div class="item">
              <img src="files/3.jpg" alt="...">
              <div class="carousel-caption">
                  <h3>third</h3>
              </div>
            </div>
            <div class="item active">
              <img src="files/4.jpg" alt="...">
              <div class="carousel-caption">
                  <h3>fourth</h3>
              </div>
            </div>
            <div class="item active">
              <img src="files/1.jpg" alt="...">
              <div class="carousel-caption">
                  <h3>fifth</h3>
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

      <div id="s-nav" class="col-md-6 col-xs-6 col-sm-6 col-lg-6 ">
        <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic1" data-slide-to="5" class="active"></li>
            <li data-target="#carousel-example-generic1" data-slide-to="6"></li>
            <li data-target="#carousel-example-generic1" data-slide-to="7"></li>
            <li data-target="#carousel-example-generic1" data-slide-to="8"></li>
            <li data-target="#carousel-example-generic1" data-slide-to="9"></li>
          </ol>

    <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="files/1.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>first</h3>
                </div>
              </div>
              <div class="item">
                <img src="files/2.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>second</h3>
                </div>
              </div>
              <div class="item">
                <img src="files/3.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>third</h3>
                </div>
              </div>
              <div class="item active">
                <img src="files/4.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>fourth</h3>
                </div>
              </div>
              <div class="item active">
                <img src="files/1.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>fifth</h3>
                </div>
              </div>
          </div>

          <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
           </div> <!-- Carousel -->

      </div>
    </div>

    <div class="footer">
    <div class="footimg">
       <img src="files/1.png" alt="..." style=" width:11%; height:100px; margin-top:10px; margin-left:630px;">
       <h1 style="text-align:center"></h1>
  </div>
  </div>

  </body>
</html>

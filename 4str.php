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
    <title>4TH Page</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/onestyle.css">


<style>
    .navik{
      background-color: rgb(68,156,186);
    }
    #s-nav{
      margin-top: 2%;
    }
    .lists li{
        display: inline-block;
        width: 10%;
        margin: 5 10;
        max-height: 150px;
        background-size: cover;
        transition: 300ms;
        padding: 260px;
        text-align: center;
          }
    .lists li a{
        color: white;
        text-decoration:none;
        font-family: cursive;
        opacity: 0.8;
        font-size: 50px;
        text-align: center;
    }
    .lists li:hover{
        box-shadow: rgba(0,0,0,0.6) 0px 0px 100px 100px inset;
    }
    .lists li:hover a{
        opacity: 1;
    }
    .list {
      width:25%;
      height: 100px;
    }


</style>
  </head>
  <body>
  <?php
  //INCLUDE NAV.PHP for navigation bar
    include("nav.php");
  ?>

  <ul class="pager">
    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>
<div class="main">
  <ul class="list-group">
  <li class="list-group-item">Accounting Topics </li>
  <li class="list-group-item">Questions And Answers </li>
  <li class="list-group-item">Visual Learning</li>
  <li class="list-group-item">Accountings</li>

    </ul>
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Your Accountings
      </a>
    </div>

    <div class="container">
      <div class="col-md-12 new_bg">


        <ul class="lists">
            <li class="list"  style="background-image:url(files/3.jpg)">
                <a href="#" ></a>
            </li>
             <li class="list"  style="background-image:url(files/11.jpg)">
                <a href="#" ></a>
            </li>
          </ul>
    </div>
  </div>
  <div id="wrapper" class="crow">
    <div id="sidebar" class="col-md-2">
      <div class="sidebar-item bordered" style="margin-top: 100px;">
        <ul>
          <li class="list-group-item"><button type="button" class="btn btn-success"><a href="registration.php" style="color:white; text-decoration:none; text-align:center;">Membership</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-success"><a href="index.php" style="color:white; text-decoration:none; text-align:center;">Contact Us</a></button></li>
          <li class="list-group-item"><button type="button" class="btn btn-success"><a href="#" style="color:white; text-decoration:none; text-align:center;">Follow Accountings</a></button></li>
        </ul>
      </div>
    </div>
    <div id="main" class="col-md-10" style="height:30%;">
      <h2>NEWS</h2>
      <div id="items-block" >
        <div class="main-items col-md-4" style="font-family: 'Lobster', cursive; margin: 50px 0p 50px 0px;margin: 0 auto; padding: 50px 0px 50px 0px; font-size: 35px;">
          <h1>Yesterday</h1>
          <div class="items-img">
            <img src="files/3.jpg"style=" width:280px; height:280px; ">
          </div>
        </div>
        <div class="main-items col-md-4" style="font-family: 'Lobster', cursive; margin: 50px 0p 50px 0px;margin: 0 auto; padding: 50px 0px 50px 0px; font-size: 35px;">
          <h1>Today</h1>
          <div class="items-img">
            <img src="files/4.jpg" style=" width:280px; height:280px; ">
          </div>
        </div>
        <div class="main-items col-md-4" style="font-family: 'Lobster', cursive; margin: 50px 0p 50px 0px;margin: 0 auto; padding: 50px 0px 50px 0px; font-size: 35px;">
          <h1>New</h1>
          <div class="items-img">
            <img src="files/2.jpg" style=" width:280px; height:280px; ">
          </div>
        </div>
  </div>
  </div>
  </div>

</div>


</body>
</html>

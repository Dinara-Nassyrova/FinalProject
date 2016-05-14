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
    <title>Second Page</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style media="screen">
    .navik{
      background-color: rgb(68,156,186);
    }
    #s-nav{
      margin-top: 2%;
    }
    .topright{
      margin-top: 50px;
      text-align: center;
      text-decoration: line-through;
    }

    </style>
  </head>
  <body>
  <?php
    include("nav.php");
  ?>

<div class="container">
<div class="main">
  <div class="col-md-12 new_bg">
    <div class="col-md-9" style="margin-top:5%;">
    <h1>New Accountings</h1>
    <p style="height:35px; width:90%;"></p>
      <p>Create New Conditions</p>
      <p style="height:10px; width:90%;"></p>
      <p><span class="glyphicon glyphicon-usd"></span> DOLLAR </p>
      <p><span class="glyphicon glyphicon-euro"></span> EURO </p>
      <p><span class="glyphicon glyphicon-text-size"></span> TENGE </p>
      <p><span class="glyphicon glyphicon-yen"></span> YEN </p>
      <p><span class="glyphicon glyphicon-ruble"></span> RUBLE </p>

    </div>
    <div class="topright">
    <div class="col-md-3" style="margin-top:15%;">
      <ul class="list-group">
        <li class="list-group-item">
          <span class="badge">7</span>
          NEWS
        </li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item">
          <span class="badge">1</span>
            ACCOUNTINGS
        </li>
     </ul>
     <ul class="list-group">
        <li class="list-group-item">
          <span class="badge">14</span>
            SUPPORT
        </li>
     </ul>
    </div>
  </div>
 </div>
</div>
<div class="row">
  <div class="col-sm-6 col-md-4">

    <div class="thumbnail">
      <img src="files/1.jpg" alt="">
      <div class="caption">
        <h3>News</h3>
        <p>Some kind of news</p>
        <p><a href="#" class="btn btn-primary" role="button">Press</a> <a href="#" class="btn btn-default" role="button">Anwers</a></p>
      </div>
    </div>

    <div class="thumbnail">
      <img src="files/2.jpg" alt="">
      <div class="caption">
        <h3>News</h3>
        <p>Some kind of news</p>
        <p><a href="#" class="btn btn-primary" role="button">Press</a> <a href="#" class="btn btn-default" role="button">Anwers</a></p>
      </div>
    </div>

    <div class="thumbnail">
      <img src="files/3.jpg" alt="">
      <div class="caption">
        <h3>News</h3>
        <p>Some kind of news</p>
        <p><a href="#" class="btn btn-primary" role="button">Press</a> <a href="#" class="btn btn-default" role="button">Anwers</a></p>
      </div>
    </div>

  </div>

  <div class="col-sm-6 col-md-4">

    <div class="thumbnail">
      <img src="files/4.jpg" alt="">
      <div class="caption">
        <h3>News</h3>
        <p>Some kind of news</p>
        <p><a href="#" class="btn btn-primary" role="button">Press</a> <a href="#" class="btn btn-default" role="button">Anwers</a></p>
      </div>
    </div>

    <div class="thumbnail">
      <img src="files/5.jpg" alt="">
      <div class="caption">
        <h3>News</h3>
        <p>Some kind of news</p>
        <p><a href="#" class="btn btn-primary" role="button">Press</a> <a href="#" class="btn btn-default" role="button">Anwers</a></p>
      </div>
    </div>

    <div class="thumbnail">
      <img src="files/6.jpg" alt="">
      <div class="caption">
        <h3>News</h3>
        <p>Some kind of news</p>
        <p><a href="#" class="btn btn-primary" role="button">Press</a> <a href="#" class="btn btn-default" role="button">Anwers</a></p>
      </div>
    </div>

  </div>



</div>
<div class="bottom">
  <div class="footer">
    <div class="btn-group btn-group-justified" style=" text-align:center; font-size:10px; font-family: 'Source Sans Pro'; padding-bottom: 20px; ">
      <a href="#" class="btn btn-primary">Accountings</a>
      <a href="#" class="btn btn-primary">Privacy Police</a>
      <a href="#" class="btn btn-primary">Conditions of Users</a>
      <a href="#" class="btn btn-primary">About us</a>
     </div>

  </div>
</div>
</body>
</html>

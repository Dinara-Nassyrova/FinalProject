<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login page</title>
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
      position: absolute;
      bottom: 0px;
      background-color: rgb(68,156,186);
      display: inline-block;
    }
    .content{
      width: 93%;
      margin: 0px auto;
      margin-top: 10%;
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

  <div class="content">
    <div class="row">
        <div class="col-md-offset-3 col-md-4">
          <div class="form-horizontal">
          <form action="log.php" method="post">
              <div class="form-group">
                  <label for="name" class="control-lable col-md-4">Name</label>
                  <div class="col-md-8">
                       <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                  </div>
              </div>
              <div class="form-group">
                  <label for="password" class="control-lable col-md-4">Password</label>
                  <div class="col-md-8">
                       <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-offset-5 col-md-4">
                      <input type="submit" name="submit" class="btn btn-success" value="Авторизоваться">
                  </div>
              </div>
           <p id="result"></p>
          </form>
          </div>

        </div>

    </div>
  </div>

    <div class="footer">
      <div class="footimg">
         <img src="files/1.png" alt="..." style=" width:11%; height:100px; margin-top:30px; margin-left:45%;">
         <h1 style="text-align:center"></h1>
    </div>
    </div>

  </body>
</html>

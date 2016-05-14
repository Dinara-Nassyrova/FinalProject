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
    <title>Third Page</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
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
    </style>
  </head>
  <body>
  <?php
  //INCLUDE NAV.PHP for navigation bar
    include("nav.php");
  ?>

    <div class="row">
    <div class="col-md-offset-1"></div>
      <div class="col-md-12">
          <div class="up">
            <div class="logo" style=" margin-top:20px;">
              <h1>Select Your Best Accounting </h1>
            </div>
          </div>
        <div class="main col-md-offset-1">
          <div class="col-md-10"  style="height:4 00px;">
           <div class="col-md-4">
              <div class="block">
                <div class="photo">
                  <img src="files/1.jpg" alt="" style="width:320px; height:190px; margin: 0px 0px 5px 10px;
    float: left;"/>
                </div>
                <div class="info">
                  <p>
                    <h3>First Choice</h3>
                    I was never a Certified Public Accountant... I just had a degree in accounting. The reason I was never a Certified Public Accountant was because it would require passing a test, which I would not have been able to do. Bob Newhart
                  </p>
                </div>
              </div>

              <div class="block">
                <div class="photo">
                  <img src="files/2.jpg" alt="" style="width:320px; height:190px; margin: 0px 0px 5px 10px;
    float: left;"/>
                </div>
                <div class="info">
                  <p>
                  <h3>Second Choice</h3>
                  It is crucial that we develop real awareness of ourselves as citizens of Earth, linked by mutual and indissoluble bonds. When we clearly recognize this reality and ground ourselves in it, we are compelled to take a strict accounting of our way of life. Daisaku Ikeda
                  </p>
                </div>
              </div>

              <div class="block">
                <div class="photo">
                  <img src="files/3.jpg" alt="" style="width:320px; height:190px; margin: 0px 0px 5px 10px;
    float: left;"/>
                </div>
                <div class="info">
                  <p>
                    <h3>Third Choice</h3>
                    It's really amazing that in the age of unbelief, as a smart man called it, there isn't even more fraud. After all, with no God, there's no one to ever call you to account, and no accounting at all if you can get away with it. Ben Stein
                  </p>
                </div>
              </div>
            </div>
          <div class="col-md-4">
              <div class="block">
                <div class="photo">
                  <img src="files/4.jpg" alt="" style="width:320px; height:190px; margin: 0px 0px 5px 10px;
    float: left;"/>
                </div>
                <div class="info">
                  <p>
                    <h3>Fourth Choice</h3>
                    Accounting rules give financial institutions flexibility about when they choose to recognize venture capital profits. Alex Berenson
                  </p>
                </div>
              </div>

              <div class="block">
                <div class="photo">
                  <img src="files/5.jpg" alt="" style="width:320px; height:190px; margin: 0px 0px 5px 10px;
    float: left;"/>
                </div>
                <div class="info">
                  <p>
                    <h3>Fifth Choice</h3>
                    There's no business like show business, but there are several businesses like accounting. David Letterman
                  </p>
                </div>
              </div>

              <div class="block">
                <div class="photo">
                  <img src="files/6.jpg" alt="" style="width:320px; height:190px; margin: 0px 0px 5px 10px;
    float: left;"/>
                </div>
                <div class="info">
                  <p>
                    <h3>Sixth Choice</h3>
                    Accounting does not make corporate earnings or balance sheets more volatile. Accounting just increases the transparency of volatility in earnings. Diane Garnick
                  </p>
                </div>
              </div>
            </div>
      <div class="col-md-4">
          <div class="block">
            <div class="photo">
              <img src="files/7.jpg" alt="" style="width:320px; height:190px; margin: 0px 0px 5px 10px;
    float: left;"/>
            </div>
            <div class="info">
              <p>
                <h3>Seventh Choice</h3>
                Life as we know it, with all its ups and downs, will soon be over. We all will give an accounting to God of how we have lived. William Wilberforce
              </p>
            </div>
          </div>

          <div class="block">
            <div class="photo">
              <img src="files/8.jpg" alt="" style="width:320px; height:190px; margin: 0px 0px 5px 10px;
    float: left;"/>
            </div>
            <div class="info">
              <p>
                <h3>Eight Choice</h3>
                Balanced budget requirements seem more likely to produce accounting ingenuity than genuinely balanced budgets. Thomas Sowell
              </p>
            </div>
          </div>

          <div class="block">
            <div class="photo">
              <img src="files/11.jpg" alt="" style="width:320px; height:190px; margin: 0px 0px 5px 10px;
    float: left; "/>
            </div>
            <div class="info" style="text-align: center;">
              <p>
                <h3>Ninth Choice</h3>
                We have the most crude accounting tools. It's tragic because our accounts and our national arithmetic doesn't tell us the things that we need to know. Susan George
              </p>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="footer" style="margin-top: 200px;">
    <div class="footimg">
       <img src="files/1.png" alt="..." style=" width:11%; height:100px; margin-top:30px; margin-left:630px;">
       <h1 style="text-align:center"></h1>
  </div>
  </div>
      </div>
    </div>
  </body>
</html>

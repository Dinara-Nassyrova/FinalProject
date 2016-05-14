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
    .selected {
      color:#1ABC9C;
    }
    @import url(http://fonts.googleapis.com/css?family=Lato:400,700);

    * { 
      -webkit-box-sizing:border-box;
      -moz-box-sizing:border-box;
      -o-box-sizing:border-box;
      box-sizing:border-box;
    }


    .acc-container {
      width:90%;
      margin:30px auto 0 auto;
      -webkit-border-radius:8px;
      -moz-border-radius:8px;
      -o-border-radius:8px;
      border-radius:8px;
      overflow:hidden;
    }

    .acc-btn { 
      width:100%;
      margin:0 auto;
      padding:20px 25px;
      cursor:pointer;
      background:#34495E;
      border-bottom:1px solid #2C3E50;
    }

    .acc-content {
      height:0px;
      width:100%;
      margin:0 auto;
      overflow:hidden;
      background:#2C3E50;
    }

    .acc-content-inner {
      padding:30px;
    }

    .open {
      height: auto;
    }

    h1 {
      font:700 20px/26px 'Lato', sans-serif;
      color:#ffffff;
    }

    p { 
      font:400 16px/24px 'Lato', sans-serif;
      color:#798795;
    }

    .selected {
      color:#1ABC9C;
    }  
    </style>
  </head>
  <body>
  <?php
  //INCLUDE NAV.PHP for navigation bar
    include("nav.php");
  ?>

      

    <div class="container">
          <h2 style="text-align:center">Other experience</h2>
        <div class="col-md-12" style="overflow:hidden">
          <ul class="list-group">
            <?php
              include "connection.php";
              $var = $_SESSION['name'];
              $query = "SELECT * FROM experience join users on experience.user_id = users.id where name!='$var'";
              $res = $con->query($query);
              $i = 0;
              while($row=$res->fetch_array()){
                $i++;
                ?>
          <li class="list-group-item">
            <?php
            echo "# <strong>".$i."</strong> </br>Added by :<strong>".$row['name']."</strong></br> Type: <strong>".$row['type']."</strong></br> Cost: <strong>".$row['money']." $</strong> </br>Description: <strong>".$row['description']."</strong>";
             ?>
           </br>
           <?php if($_SESSION['status']==0){?>
             <a href="addcomment.php?id=<?php echo $row['ex_id']?>"><button type="button" class="btn btn-primary">Add Comment</button></a>
            <?php }?>
             <a href="comments.php?id=<?php echo $row['ex_id']?>"><button type="button" class="btn btn-success">Comments</button></a>
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

  <script type="text/javascript">
    $(document).ready(function(){
  var animTime = 300,
      clickPolice = false;
  
  $(document).on('touchstart click', '.acc-btn', function(){
    if(!clickPolice){
       clickPolice = true;
      
      var currIndex = $(this).index('.acc-btn'),
          targetHeight = $('.acc-content-inner').eq(currIndex).outerHeight();
   
      $('.acc-btn h1').removeClass('selected');
      $(this).find('h1').addClass('selected');
      
      $('.acc-content').stop().animate({ height: 0 }, animTime);
      $('.acc-content').eq(currIndex).stop().animate({ height: targetHeight }, animTime);

      setTimeout(function(){ clickPolice = false; }, animTime);
    }
    
  });
  
});
  </script>
  </body>
</html>

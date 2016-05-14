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
    <title>News</title>
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

    </style>
  </head>
  <body>
  <?php
  //INCLUDE NAV.PHP for navigation bar
    include("nav.php");
  ?>

<div class="container">
  <h2 style="text-align:center">News</h2>
<div class="col-md-12" >
<?php
	include "connection.php";
	$query = "SELECT * FROM news";
	$res = $con->query($query);
	while($row=$res->fetch_array()){
	?>
  <a  href="showSingleNews.php?id=<?php echo $row['id']?>">
    <div class="col-sm-12 col-md-3 buttonShow" style="border-bottom:1px solid #ccc;margin-top:15px;">
    <div class="thumbnail">
      <p>
      Today's news
      </p>
  </a>
    <?php
    if (isset($_SESSION['status'])) {
      if($_SESSION['status']=='1'){?>
        <a href="edit.php?id=<?php echo $row['id']?>">
          <span style="font-size:1.5em" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        </a>
        <a href="delete.php?id=<?php echo $row['id']?>">
          <span style="font-size:1.5em" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
      <?php }
    }
     ?>
      <img src="<?php echo $row['image']?>" alt="..." style="width:350px; height:250px; ">
      <div class="caption" style="height:200px;">
        <h3 style="width:100%;overflow:hidden"><?php echo $row['title']; ?></h3>
          <div style="overflow:hidden">
            <p><?php echo substr($row['text'],0,100)."..."?></p></div>
      </div>


    </div>
  </div>
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

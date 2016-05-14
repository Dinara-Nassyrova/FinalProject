<?php
  session_start();
  if(!isset($_SESSION['status']) || $_SESSION['status']==0){
    header("Location:index.php");
  }
  include "connection.php";
  $query = "SELECT * FROM users";
  $res = $con->query($query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Cabinet</title>
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
      width: 80%;
      height: 1000px;
    }
    </style>
  </head>
<body>
  <?php
  //INCLUDE NAV.PHP for navigation bar
    include("nav.php");
  ?>


    <div class="container">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Email</th>
          <th>Status</th>
          <th>Change Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($row = $res->fetch_array()){
        ?><tr>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['surname'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td id = "status<?php echo $row['id'];?>"><?php if($row["status"]==1){echo "Admin";}else{ echo "User"; } ?></td>
          <td><button class="btn btn-success" onClick="changeStatus(<?php echo $row['id']?>,<?php echo $row['status']?>)">Change</button></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
    <script type="text/javascript">
  function changeStatus(id,status){
    $.ajax({
        url: "change.php",
        type: "POST",
        data: "id="+id+"&status="+status,
        success: function(data){
          if(status==0){
            $("#status"+id).html("Admin");
          }else{
            $("#status"+id).html("User");
          }
        }
      });
  }
</script>




    <div class="footer">
    <div class="footimg">
       <img src="files/1.png" alt="..." style=" width:11%; height:100px; margin-top:30px; margin-left:630px;">
       <h1 style="text-align:center"></h1>
  </div>
  </div>
</body>
</html>

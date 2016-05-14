<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>RegistrationPage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title" type="text/css" charset="utf-8">
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript">
         function register(){
         	var name = $("#name").val();
         	var surname = $("#surname").val();
         	var email = $("#email").val();
         	var password = $("#password").val();
          var second = $("#second").val();
         	$.ajax({
         		url: "register.php",
         		type: "POST",
         		data: "name="+name+"&surname="+surname+"&email="+email+"&password="+password+"&second="+second,
         		success: function(data){
         			$("#result").html(data);
         		}
         	});
         }

    </script>
    <style media="screen">
    .navik{
      background-color: rgb(68,156,186);
    }
    #s-nav{
      margin-top: 2%;
    }
  video#fullscreen{
    position:fixed;
    right:0;
    bottom:0;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height:auto;
    z-index: -100;
    background: url(../files/1.jpg) no-repeat;
    background-size: cover;
  }
  body{
    background-color: #333;
  }
  #wrapper{
    margin:0 auto;
    width:97%;
  }
  .row{
    text-align: center;
    width: 850px;
  }
  .footer{
      width: 100%;
      height: 150px;
      position: absolute;
      bottom: 0px;
      background-color: rgb(68,156,186);
    }
</style>
</head>
<body>
  <?php
  //INCLUDE NAV.PHP for navigation bar
    include("nav.php");
  ?>
  
  <video autoplay poster="posterimage.jpg" autoplay="" loop="" muted="" poster="files/1.jpg" id="fullscreen">
      <source src="video/1.webm" type="video/webm" >
      <source src="video/1.ogv" type="video/ogg" >
      <source src="video/1.mp4" type="video/mp4" >
    </video>
    <div id="wrapper" class="clearfix">

    </div>
     <div class="row" style="margin:0px auto; margin-top:10%;">
         <div class="col-md-offset-3 col-md-4">
           <div class="form-horizontal">
           	   <div class="form-group">
           	   	   <label for="name" class="control-lable col-md-4">Name</label>
           	   	   <div class="col-md-8">
           	   	        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
           	   	   </div>
           	   </div>
           	   <div class="form-group">
           	   	   <label for="surname" class="control-lable col-md-4">Surname</label>
           	   	   <div class="col-md-8">
           	   	        <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname">
           	   	   </div>
           	   </div>
           	   <div class="form-group">
           	   	   <label for"email" class="control-lable col-md-4">Email</label>
           	   	   <div class="col-md-8">
           	   	        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
           	   	   </div>
           	   </div>
           	   <div class="form-group">
           	   	   <label for="password" class="control-lable col-md-4">Password</label>
           	   	   <div class="col-md-8">
           	   	        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
           	   	   </div>
           	   </div>
           	   <div class="form-group">
           	   	   <label for="password" class="control-lable col-md-4">Confirm Password</label>
           	   	   <div class="col-md-8">
           	   	        <input type="password" name="second" id="second" class="form-control" placeholder="Password">
           	   	   </div>
           	   </div>
           	   <div class="form-group">
           	   	   <div class="col-md-offset-5 col-md-4">
           	   	   	   <input type="submit" class="btn btn-success" value="Зарегистрироваться" onClick="register()">
           	   	   </div>
           	   </div>
            <p id="result"></p>

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

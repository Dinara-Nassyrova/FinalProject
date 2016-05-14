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
      margin-top: 2%;
    }
    .footer{
      margin-top: 30px;
      width: 100%;
      height: 150px;
      background-color: rgb(68,156,186);
      display: inline-block;
    }

    /*STYLE FOR ACCORDION*/
    @import url(http://fonts.googleapis.com/css?family=Lato:400,700);
    .accordion-container {
      width:90%;
      margin:30px auto 0 auto;
      -webkit-border-radius:8px;
      -moz-border-radius:8px;
      -o-border-radius:8px;
      border-radius:8px;
      overflow:hidden;
    }

    .accordion-button { 
      width:100%;
      margin:0 auto;
      padding:20px 25px;
      cursor:pointer; 
      background: rgb(68,156,186);
      border-bottom:1px solid #2C3E50;
    }

    .accordion-content {
      height:0px;
      width:100%;
      margin:0 auto;
      overflow:hidden;
      background:aliceblue;
    }

    .accordion-inner {
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
      color:black;
    }
    .styleForSelect {
      color:black;
    }  
    </style>
  </head>
  <body>
  <?php
    include("nav.php");
  ?>
    <!--Container for Accordion-->
    <div class="container">
    <h2 style="text-align:center">Accordion</h2>
      <div class="col-md-12" >


      <!--Accordion-->
      <div class="accordion-container">
      <div class="accordion-button"><h1 class="styleForSelect">Lorem ipsum</h1></div>
      <div class="accordion-content open">
        <div class="accordion-inner">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>

      <div class="accordion-button"><h1>Lorem ipsum </h1></div>
      <div class="accordion-content">
        <div class="accordion-inner">
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
      </div>

      <div class="accordion-button"><h1>Lorem ipsum </h1></div>
      <div class="accordion-content">
        <div class="accordion-inner">
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32</p>
        </div>
      </div>

      <div class="accordion-button"><h1>Lorem ipsum </h1></div>
      <div class="accordion-content">
        <div class="accordion-inner">
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
        </div>
      </div>
      
      <div class="accordion-button"><h1>Lorem ipsum </h1></div>
      <div class="accordion-content">
        <div class="accordion-inner">
          <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        </div>
      </div>

      <div class="accordion-button"><h1>Lorem ipsum </h1></div>
      <div class="accordion-content">
        <div class="accordion-inner">
          <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
        </div>
      </div>
      </div>
      <!--End of accordion-->


      </div>
  </div>
  <!--End of accordion container-->







  <!--FOOTER-->
  <div class="footer">
    <div class="footimg">
       <img src="files/1.png" alt="..." style=" width:11%; height:100px; margin-top:40px; margin-left:630px;">
       <h1 style="text-align:center"></h1>
       </div>
  </div>

  <!--SCRIPT FOR ACCORDION-->
  <script type="text/javascript">
    $(document).ready(function(){
      var timerForAnimation = 500;
      var checkerForClick = false;
    $(document).on('touchstart click', '.accordion-button', function(){
      if(!checkerForClick){
        checkerForClick = true;

        var indexOfItem = $(this).index('.accordion-button');

        var heightOfItem = $('.accordion-inner').eq(indexOfItem).outerHeight(); 

        $('.accordion-button h1').removeClass('styleForSelect');

        $(this).find('h1').addClass('styleForSelect');

        $('.accordion-content').stop().animate({ height: 0 }, timerForAnimation);

        $('.accordion-content').eq(indexOfItem).stop().animate({ height: heightOfItem }, timerForAnimation);
        
        setTimeout(function(){ checkerForClick = false; }, timerForAnimation);
      }
    });
  });
  </script>
   </body>
</html>

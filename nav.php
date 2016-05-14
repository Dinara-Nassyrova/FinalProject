<!DOCTYPE html>
<html>
  <head>
  </head>
<body>
<nav class="navbar navbar-default navbar-fixed-top navik">
    <div class="container-fluid col-sm-12" >

      <div class="navbar-header">
        <a class="navbar-brand" href="index.php" style="color:white; font-family: 'Source Sans Pro', cursive;font-size:32px">Your Accountings</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <?php
          if (!isset($_SESSION['status'])) {
            echo "<li><a href=\"registration.php\" style=\"color:white; text-decoration: cursive;\"><span >Sign up</span></a></li>";
          }
          if(isset($_SESSION['status'])){
            echo "<li><a href=\"news.php\" style=\"color:white; text-decoration: cursive;\"><span >News</span></a></li>";
          }
          ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white; text-decoration: cursive;"> Information <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"> Accounting Topics </a></li>
              <li><a href="#">Questions And Anwers</a></li>
              <li><a href="#">Visual Learning</a></li>
            </ul>
          </li>

        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default" >GO!</button>
        </form>
          <ul class="nav navbar-nav navbar-right ">
      <?php
          if (isset($_SESSION['status'])) {
            if($_SESSION['status']=='1'){
                echo "<li><a href=\"#\" style=\"color:white\">Hello Admin</a></li>";
            }else{
              echo "<li><a href=\"#\" style=\"color:white\">Hello ".$_SESSION['name']."</a></li>";
            }
          }
          ?>

          <?php if ($_SESSION){ ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white; text-decoration: cursive;">Action<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php 

                  if($_SESSION['status']=='1'){
                    echo "<li><a href=\"cabinet.php\" >Cabinet</a></li>
                          <li><a href=\"otherex.php\" >Experience</a></li>";
              }else{
                    echo "<li><a href=\"myexperience.php\" >My Experience</a></li>
                    <li><a href=\"otherex.php\" >Other Experience</a></li>";
                  }
                ?>
                <li role="separator" class="divider"></li>
                <?php
                  if ($_SESSION['status']==1) {
                    echo "<li><a href=\"addnews.php\" >Add news</a></li>";
                  }else{
                    echo "<li><a href=\"addexperience.php\" >Add experience</a></li>";
                  }
                ?>
              </ul>
            </li>
            <?php }?>

          <?php
          if (isset($_SESSION['status'])) {
             echo "<li><a href=\"logout.php\" style=\"color:white\">Log Out</a></li>";
          }else{
            echo "<li><a href=\"login.php\" style=\"color:white\">Log in</a></li>";
          }
          ?>
           </ul>
        </div>
       </div>
    </nav>
</body>
</html>
<!DOCTYPE HTML>
<html lang="eng"> 
    <head>     
        <meta charset="utf-8">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">       
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="icon" href="css/IMG/funny-icon-27.png">
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">       
        <title>Smart Dodging</title>
    </head>
    <body style="padding-top: 50px;">
    <?php session_start(); ?>
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a id="a-1" class="navbar-brand" href="home.php">Smart Dodging</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class=""><a href="home.php">Home</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">The Game <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Wiki</a></li>
                    <li><a href="download.php">Download (WIP)</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Community<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="leaderBoards.php">LeaderBoards</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <?php if (!isset($_SESSION['username'])): ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <?php else: ?>
                          <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Your Profile<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#">Your Account</a></li>
                                  <li><a href="#">Friends</a></li>
                                  <hr>
                                  <li><a href="#">Settings</a></li>
                                  <li><a href="#">Log Out</a></li>
                      </ul>
                  <?php endif; ?>
              </ul>
            </div>
          </div>
        </nav>
        <script src="js/jquery-2.2.4.min.js"></script>        
        <script src="js/bootstrap.min.js"></script> 
        <script src="java.js"></script>
    </body>
</html>
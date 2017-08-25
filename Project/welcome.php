<?php
   include'login.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Screen</title>
        <link href="../_css/bootstrap.min.css" rel="stylesheet">
        <link href="../_css/styles_main.css" rel="stylesheet" type="text/css">
        <script src="../_js/jquery-3.2.1.min.js"></script>
        <script src="../_css/bootstrap.min.css"></script>
    </head>
    
<!--Free Bootstrap Template Used: https://www.w3schools.com/bootstrap/bootstrap_templates.asp-->
    
    <body id="index">
        
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="#">Jobs4u.ca</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="welcome.php">Home</a></li>
                        <li><a href="search.php">Search</a></li>
                        <li><a href="profile.php">Profile</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container-fluid bg-1 text-center">    
            <div class="row content">
                <div class="col-sm-2 sidenav">
                   </div>
                
                <div class="col-sm-8 text-left"> 
                    <h1>Welcome to Jobs4u.ca <br><small>- The leading site for technology job postings</small></h1>
                    <p>Jobs4u is an industry leader in terms of search speed and user-base. You will find job postings related to your wants and needs as well as modify your profile on the fly as you see fit.</p>
                    <p>Our site stands out above the rest because our company users have the same search options available to them, and can seek out potential employees as opposed to just waiting for users to find their postings</p>
                
                    <hr>
                    <h1>Whats New in Technology?</h1>
                    <h2><small>-Top Trending Sites 2017</small></h2>
                    <h3><a href="https://www.Techcrunch.com">TechCrunch</a></h3>
                    <h3><a href="https://www.Thenextweb.com">TheNextWeb</a></h3>
                    <h3><a href="https://www.Wired.com">Wired</a></h3>
                </div>
                <div class="col-sm-2 sidenav">
                </div>
            </div>
        </div>

    </body>
</html>
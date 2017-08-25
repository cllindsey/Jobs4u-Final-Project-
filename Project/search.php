<?php
    include'jobinfo.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Screen</title>
        <link href="../_css/styles_profile.css" rel="stylesheet" type="text/css">
        <link href="../_css/bootstrap.min.css" rel="stylesheet">
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
                        <li><a href="../_php/welcome.php">Home</a></li>
                        <li class="active"><a href="search.php">Search</a></li>
                        <li><a href="../_php/profile.php">Profile</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../_php/logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container-fluid bg-1 text-center">    
            <div class="row content">
                <div class="col-sm-2 sidenav">
                  <form action="../_php/jobinfo.php" method="post">
                    <h1>Advanced Search</h1><hr>

                    <label for="Fos">Field of Study</label>
                    <select id="Fos" name="fos">
                        <option>-</option>
                        <option>test2</option>
                    </select><hr>

                    <label for="Location">Location</label>
                    <select id="Location" name="location">
                        <option>-</option>
                        <option>test2</option>
                    </select><hr>

                    <label for="Wage">Wage</label>
                    <select id="Wage" name="wage">
                        <option>-</option>
                        <option>test2</option>
                    </select><hr>

                    <label for="Hours">Hours</label>
                    <select id="Hours" name="hours">
                        <option>-</option>
                        <option>test2</option>
                    </select><hr>

                    <label for="Company">Company</label>
                    <select id="Company" name="company">
                        <option>-</option>
                        <option>test2</option>
                    </select><hr>

                    <label for="Exp">Experience</label>
                    <select id="Exp" name="experience">
                        <option>-</option>
                        <option>test2</option>
                    </select><hr>

                    <label for="Pos">Positions Available</label>
                    <select id="Pos" name="position">
                        <option>-</option>
                        <option>test2</option>
                    </select><hr>
                  </form>
                </div>
                
                <div class="col-sm-8 text-left"> 
                    <table><?php
                        getPostings();
                    ?></table>
                </div>
                <div class="col-sm-2 sidenav">
                    
                </div>
            </div>
        </div>
        
    </body>
</html>
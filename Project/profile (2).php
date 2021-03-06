<?php
    include'userinfo.php';
    session_start();
    $auth = $_SESSION['authentication'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Screen</title>
        <link href="../_css/bootstrap.min.css" rel="stylesheet">
        <link href="../_css/styles_profile.css" rel="stylesheet" type="text/css">
      
        <script src="../_js/jquery-3.2.1.min.js"></script>
        <script src="../_js/validate.js"></script>
        <script src="../_css/bootstrap.min.css"></script>
        
        <script>
        
            $(document).ready(function(){ 
                $('#FieldofStudy').hide();  
                $('#Schooling').hide();  
                $('#Experience').hide();  
                $('#Description').hide(); 
                $('#Change').hide();
                $('button').click(function() {
                    $('#FieldofStudy').show();  
                    $('#Schooling').show();  
                    $('#Experience').show();  
                    $('#Description').show();
                    $('#Change').show();
                }); 
            });
        </script>
        
    </head>
        
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
                        <li><a href="welcome.php">Home</a></li>
                        <li><a href="search.php">Search</a></li>
                        <li class="active"><a href="profile.php">Profile</a></li>
                        <li><a href="../_html/contact.html">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php" onclick="loadXMLDoc()"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container-fluid bg-1 text-center">    
            <div class="row content">
                <div class="col-sm-2 sidenav">
                    
                </div>
                
                <div class="col-sm-8 text-center bg-2 ">
                    <h1>My Profile</h1>
                    <button style="float:right; border: 1px solid black; padding: 8px; background-color: darkgray; font-weight: bold" id="reveal" >Update Profile</button>
                    <br>
                    <hr>
                    <form action="profile.php" method="post">
                        <label for="Field of Study">Field of Study:</label>
                        <p><?php fos(); ?></p>
                        <input type="text" placeholder="Update Field of Study" maxlength="100" size="30" id="FieldofStudy" name="fieldofstudy">
                        <br>
                        <label for="Schooling">Schooling:</label>
                        <p><?php schooling(); ?></p>
                        <input type="text" placeholder="Update Schooling" maxlength="100" size="30" id="Schooling" name="schooling">
                        <br>
                        <label for="Experience">Years of Experience:</label>
                        <p><?php experience(); ?></p>
                        <input type="text" placeholder="Update Years of Experience" maxlength="10" size="30" id="Experience" name="experience">
                        <br>
                        <label for="Description">Description:</label>
                        <p><?php description(); ?></p>
                        <input type="text" placeholder="Update Description" maxlength="5000" size="30" id="Description" name="description">
                        <br>
                        <input type="submit" value="Confirm Changes" id="Change">
                    </form>
                </div>
                <div class="col-sm-2 sidenav">
                   
                    </div>
                </div>
            </div>
        <footer class="container-fluid text-center">
            <p>&copy; 2017 Jobs4u.ca - A job finding site for everyone<p>
        </footer>

    </body>
</html>
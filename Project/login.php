<?php
   include("config.php");
   session_start();

   function fix_session_register(){ 
       function session_register(){ 
           $args = func_get_args(); 
           foreach ($args as $key){ 
              $_SESSION[$key]=$GLOBALS[$key]; 
           } 
       } 
       function session_is_registered($key){ 
           return isset($_SESSION[$key]); 
       } 
       function session_unregister($key){ 
          unset($_SESSION[$key]); 
       } 
   } 
if (!function_exists('session_register')) fix_session_register(); 

   
        $myemail = mysqli_real_escape_string($db,$_POST['email']);
        $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
       
        $mynewemail = mysqli_real_escape_string($db,$_POST['email_reg']);
        $mynewpassword = mysqli_real_escape_string($db,$_POST['password_reg']);
        $myconfirmedpassword = mysqli_real_escape_string($db,$_POST['reenter']);
        $myauthentication = mysqli_real_escape_string($db,$_POST['selector']);
        
        $myfirstname = mysqli_real_escape_string($db,$_POST['fname']);
        $mylastname = mysqli_real_escape_string($db,$_POST['lname']);

        if ($myemail != ""){

            $sql = "SELECT user_id,authentication FROM users WHERE email = '$myemail' and password = '$mypassword'";
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_assoc($result);
            $user = $row['user_id'];
            $auth = $row['authentication'];

            $count = mysqli_num_rows($result);

            // If result matched $myemail and $mypassword, table row must be 1 row

            if($count == 1) {
                session_register("myuser");
                $_SESSION['login_user'] = $user;
                $_SESSION['user_type'] = $auth;

                header("location: welcome.php");
            }else {
                $error = "Your Login Name or Password is invalid";
            }

        } elseif ($mynewemail != "" && $mynewpassword == $myconfirmedpassword) {
            
            $query = "INSERT INTO users VALUES(NULL,'$mynewemail','$mynewpassword','$myauthentication')";
            $result = $db->query($query);  
            if (!$result) die ("Database access failed: " . $db->error);
            elseif($result) {

                $sql = "SELECT user_id FROM users WHERE email = '$mynewemail' and password = '$mynewpassword'";
                $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_assoc($result);
                $user = $row['user_id'];

                session_register("user");
                $_SESSION['login_user'] = $user;

                $query = "INSERT INTO personal_information VALUES('$user','$myfirstname','$mylastname',NULL,NULL,NULL,NULL)";
                $result = $db->query($query);  
                if (!$result) die ("Database access failed: " . $db->error);

                header("location: welcome.php");
            }else {
                header("location: ../_html/login.html");
            }
       }
?>
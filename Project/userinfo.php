<?php
    include'login.php';
    session_start();

    $myfos = mysqli_real_escape_string($db,$_POST['fieldofstudy']);
    $myschooling = mysqli_real_escape_string($db,$_POST['schooling']);
    $myexperience = mysqli_real_escape_string($db,$_POST['experience']);
    $mydescription = mysqli_real_escape_string($db,$_POST['description']);

    $mycompany = mysqli_real_escape_string($db,$_POST['company']);
    $mytitle = mysqli_real_escape_string($db,$_POST['title']);
    $mydesc = mysqli_real_escape_string($db,$_POST['desc']);
    $myhours = mysqli_real_escape_string($db,$_POST['hours']);
    $myexp = mysqli_real_escape_string($db,$_POST['exp']);
    $mypositions = mysqli_real_escape_string($db,$_POST['position']);
    $mylocation = mysqli_real_escape_string($db,$_POST['location']);


    if ($_POST['company'] != "") {
        $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        $user = $_SESSION['login_user'];
        $query = "INSERT INTO job_description VALUES('$user',NULL,'$mycompany','$mytitle','$mydesc','0','$myhours','$myexp','$mypositions','$mylocation')";
        $result = $db->query($query);  
        if (!$result) die ("Database access failed: " . $db->error);
    }

    if ($_POST['fieldofstudy'] != "") {
        $user = $_SESSION['login_user'];
        $sql = "UPDATE personal_information SET field_of_study = '$myfos' WHERE user_id = '$user' LIMIT 1";
        $result = $db->query($sql);
        if (!$result) die ("Database access failed: " . $db->error);
    }
    if ($_POST['schooling'] != "") {
        $user = $_SESSION['login_user'];
        $sql = "UPDATE personal_information SET education = '$myschooling' WHERE user_id = '$user' LIMIT 1";
        $result = $db->query($sql);
        if (!$result) die ("Database access failed: " . $db->error);
    }
    if ($_POST['experience'] != "") {
        $user = $_SESSION['login_user'];
        $sql = "UPDATE personal_information SET experience = '$myexperience' WHERE user_id = '$user' LIMIT 1";
        $result = $db->query($sql);
        if (!$result) die ("Database access failed: " . $db->error);
    }
    if ($_POST['description'] != "") {
        $user = $_SESSION['login_user'];
        $sql = "UPDATE personal_information SET description = '$mydescription' WHERE user_id = '$user' LIMIT 1";
        $result = $db->query($sql);
        if (!$result) die ("Database access failed: " . $db->error);
    }    

    function fos() {  
        $user = $_SESSION['login_user'];
        $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        $sql = "SELECT field_of_study FROM personal_information WHERE user_id = '$user'";
        $result = mysqli_query($db, $sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row['field_of_study'] != "" ) {
                    echo $row['field_of_study'];
                } else {
                    echo "Please Fill Out This Section!";
                }
            }
        }
    }
    function schooling() {  
        $user = $_SESSION['login_user'];
        $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        $sql = "SELECT education FROM personal_information WHERE user_id = '$user'";
        $result = mysqli_query($db, $sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               if($row['education'] != "" ) {
                    echo $row['education'];
                } else {
                    echo "Please Fill Out This Section!";
                }
            }
        }
    }
    function experience() {  
        $user = $_SESSION['login_user'];
        $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        $sql = "SELECT experience FROM personal_information WHERE user_id = '$user'";
        $result = mysqli_query($db, $sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row['experience'] != "" ) {
                    echo $row['experience'];
                } else {
                    echo "Please Fill Out This Section!";
                }
            }
        }
    }
    function description() {  
        $user = $_SESSION['login_user'];
        $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        $sql = "SELECT description FROM personal_information WHERE user_id = '$user'";
        $result = mysqli_query($db, $sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {   
                if($row['description'] != "" ) {
                    echo $row['description'];
                } else {
                    echo "Please Fill Out This Section!";
                }
            }
        }
    }
?>
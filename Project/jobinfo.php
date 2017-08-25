<?php
    include'login.php';
    session_start();

    $fos = mysqli_real_escape_string($db,$_POST['fos']);
    $location = mysqli_real_escape_string($db,$_POST['location']);
    $wage = mysqli_real_escape_string($db,$_POST['wage']);    
    $company = mysqli_real_escape_string($db,$_POST['company']);
    $hours = mysqli_real_escape_string($db,$_POST['hours']);
    $experience = mysqli_real_escape_string($db,$_POST['experience']);
    $positions = mysqli_real_escape_string($db,$_POST['positions']);

    function getPostings() {
       $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
       $sql = "SELECT * FROM job_description ORDER BY posting_id DESC";
       $result = mysqli_query($db, $sql);

       if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
             echo "<tr><h2>" . $row['Company'] . " - " . $row['title'] . "</h2><h4>" . $row['description'] . "<br>Experience Required: " . 
                  $row['experience'] . "</h4></tr><hr>";
                  
          }  
       }
    }  

?>
<?php
    $database = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "loan";

    $conn = mysqli_connect($database, $dbusername, $dbpassword, $dbname);
    if (!$conn) {
        die(mysqli_error($conn));
        
    }else {

        // echo "Huuuureh!, Connection Successful";
    }
?>
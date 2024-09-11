<?php
// Variables declaration to connect database
    $username = "root";
    $password = "";
    $sever = "localhost";
    $dbname = "demo_one";

    // Create connection
    $conn = mysqli_connect($sever, $username, $password, $dbname);

    // Check connection and print message
    if($conn){
        // echo "Connected";
    }else{
        echo "Failed to connect";
    }
?>
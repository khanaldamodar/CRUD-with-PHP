<?php

//Importing from db.php file to check connection with database
require('db.php');

// Check if the form is submitted
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert data into the database
    $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";
    mysqli_query($conn, $sql);   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data insert</title>
</head>
<body>

<!-- Form to insert data into the database -->
<form action="index.php" method="POST">
    <input type="text" name="name" id="name" required placeholder="Name">
    <input type="email" name="email" id="email" placeholder="enter your name">
    <input type="password" name="password" id="password" placeholder="Enter your password">
    <input type="submit">
</form>

<!-- Print success message if the form is submitted -->
<?php
    if(isset($_POST['submit'])){
        echo "Data inserted successfully";
    }
?>
</body>
</html>
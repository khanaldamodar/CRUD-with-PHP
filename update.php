<?php
    // Include database connection
    require('db.php');
     
    // Check if the form is submitted
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_POST['id'];
        $sql = "UPDATE users SET name= 'RAM', email='ram@gmail.com' WHERE id='$id'";

        if(mysqli_query($conn, $sql) == TRUE){
            echo "Updated!!"; // Print success message
        }else{
            echo "Update Failed"; // Print error message
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    <!-- Form to update data in the database -->
    <form action="update.php" method="POST">
        <input type="number" name="id" id="id" placeholder="ID...">
        <input type="submit">
    </form>
    
</body>
</html>
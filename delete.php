<?php
    // Include database connection
    require('db.php');

    // Check if the form is submitted
    if($_SERVER['REQUEST_METHOD']== "POST"){
        $id = $_POST['id'];
        $sql = "DELETE FROM users WHERE id= '$id'";

        // Execute the query

        if(mysqli_query($conn, $sql) == TRUE){
            echo "Deleted Successfully"; // Print success message
        }else{
            echo "Failed to delete"; // Print error message
        }


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>

<body>
    <!-- Form to delete a user -->
    <form action="delete.php" method="post">
        <input type="number" name="id" id="id" placeholder="ID...">
        <input type="submit" name="" id="">
    </form>
    <?php
    // Print error message if the form is not submitted
    echo "<p style ='color: red'>ERROR</p>"
    ?>

</body>
</html>
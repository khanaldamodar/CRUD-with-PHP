<?php
// Include database connection
require('db.php');

$sql = "SELECT * FROM users";

// Execute the query
$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result)>0){

    // Fetch the data from the database
    while ($row = mysqli_fetch_assoc($result)){
       echo "ID = ". $row['id']. "<br> Name = ". $row['name']. "<br> Email = ". $row['email']. "<br> Password = ". $row['password']."<hr>";
    }
   
}else{
    echo "Data not found"; // Print error message if the data is not found
}
?>
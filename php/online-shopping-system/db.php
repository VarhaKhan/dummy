<?php

$servername = "db";
$username = "edureka";
$password = "admin";
$db = "database";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}

// Close the connection
mysqli_close($con);

?>



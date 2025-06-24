<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "snitch";

// Creating database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connected successfully";
}
?>
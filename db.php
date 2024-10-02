<?php
// Database connection parameters
$servername = "localhost";
$username = "myuser";  // Replace with your MariaDB username
$password = "mypassword";  // Replace with your MariaDB password
$dbname = "userdb";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

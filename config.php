<!-- atharva/aryaman -->
<?php
// Database configuration
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "phptodo"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!-- atharva/aryaman -->
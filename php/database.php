<!-- database.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "Root_user@1";
$database = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

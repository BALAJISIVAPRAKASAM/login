<!-- login.php -->
<?php
require_once("mongodb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    if (empty($username) || empty($password)) {
        die("Username and password are required.");
    }

    $userDetails = $mongoCollection->findOne(["username" => $username]);

    if ($userDetails && password_verify($password, $userDetails["password"])) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>

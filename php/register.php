<!-- register.php -->
<?php
require_once("database.php");
error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT);
    $age = htmlspecialchars($_POST["age"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $contact = htmlspecialchars($_POST["contact"]);

    if (empty($username) || empty($password) || empty($age) || empty($dob) || empty($contact)) {
        die("All fields are required.");
    }

    // Add additional validation as needed

    $stmt = $conn->prepare("INSERT INTO users (username, password, age, dob, contact) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $password, $age, $dob, $contact);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Registration successful']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error during registration: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    header("Allow: POST");
    echo json_encode(['status' => 'error', 'message' => 'Method Not Allowed']);
}
?>

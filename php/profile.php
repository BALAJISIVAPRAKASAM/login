<!-- profile.php -->
<?php
require_once("mongodb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);

    $userDetails = $mongoCollection->findOne(["username" => $username]);

    $profileData = [
        "age" => $userDetails["age"],
        "dob" => $userDetails["dob"],
        "contact" => $userDetails["contact"],
    ];

    echo json_encode($profileData);
}
?>

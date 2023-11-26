<!-- mongodb.php -->
<?php
require_once "vendor/autoload.php"; // Include Composer's autoloader

use MongoDB\Client;

// Replace the connection string and database name with your MongoDB configurations
$mongoClient = new Client("mongodb://localhost:27017");
$mongoDbName = "your_mongodb_database";

// Select the database
$mongoDb = $mongoClient->selectDatabase($mongoDbName);

// Select the collection (replace "users" with your desired collection name)
$mongoCollection = $mongoDb->selectCollection("users");
?>

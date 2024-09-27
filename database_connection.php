<?php
// Database configuration
$dbHost     = "localhost:80";
$dbUsername = "admin";
$dbPassword = "admin@%";
$dbName     = "websit";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

echo "Connected successfully";
?>
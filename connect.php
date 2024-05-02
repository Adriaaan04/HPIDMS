<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "dms";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully";
}

// Close connection
// $conn->close();
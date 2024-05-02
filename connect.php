<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "dms_database";

try {
    // PDO connection
    $con = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

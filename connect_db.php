<?php
// MySQL server configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "yourtatse";

function connectDb() {
    global $servername, $username, $password, $database;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Close connection
function disconnectDb($conn) {
    $conn->close();
}
?>

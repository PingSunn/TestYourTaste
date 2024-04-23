<?php
// MySQL server configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "yourtatse";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - " . $row["question_text"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>

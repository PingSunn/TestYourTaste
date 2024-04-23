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
<!-- 
<?php 
    $conn = connectDb(); 
    $sql1 = "SELECT * FROM questions";
    $resultQuestion = $conn->query($sql1);
    if ($resultQuestion->num_rows > 0) {
        $questionLoop = $resultQuestion->fetch_assoc();
        echo $questionLoop["id"] . ". " . $questionLoop["question_text"];
    }
    disconnectDb($conn);

?> -->
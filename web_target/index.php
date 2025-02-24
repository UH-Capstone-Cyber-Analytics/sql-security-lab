<?php
/**
 * index.php
 * A deliberately vulnerable PHP script for demonstrating SQL injection.
 */

$servername = "mysql_target";  // The container name or service name for MySQL
$username   = "testuser";      // Matches ENV vars used in MySQL Dockerfile
$password   = "testpass";      // Matches ENV vars used in MySQL Dockerfile
$dbname     = "testdb";        // Matches ENV var used in MySQL Dockerfile

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture the 'id' parameter from the URL
$id = isset($_GET["id"]) ? $_GET["id"] : 1;

// Construct a deliberately unsafe SQL query
// WARNING: This is intentionally vulnerable (no parameter binding or escaping).
$query = "SELECT * FROM users WHERE id = '$id'";

// Execute the query
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] 
           . " | Username: " . $row["username"] 
           . " | Password: " . $row["password"] 
           . "<br/>";
    }
} else {
    echo "0 results or query error.";
}

$conn->close();
?>


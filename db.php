<?php
$servername = "localhost";
$username = "root"; // default username for local server
$password = ""; // default password for local server
$dbname = "user_db"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

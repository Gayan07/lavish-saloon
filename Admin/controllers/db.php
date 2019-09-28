<?php
$servername = "localhost";
$database = "lavish_db";
$username = "root";
$password = "";
$projectName = "iwt";

// Create connection
$conn = new mysqli($servername, $username, $password,  $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}
?>
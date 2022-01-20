<?php
$servername = "dbsrv2.cs.fsu.edu";
$username = "brsmith";
$password = "9eeShT";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
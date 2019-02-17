<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$db = "motorboss";
$conn = new MySQLi($serverName,$userName,$password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully!<br>";
?>
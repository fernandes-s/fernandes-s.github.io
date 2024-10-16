<?php
// for a connection you need - host, user, password, connection name
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'portfolio';

// Use `$conn` to match the rest of the project
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo connected was just a text message to check if it is connected, 
//once connected you can comment it out
//echo "Connected";
// Connection established
?>

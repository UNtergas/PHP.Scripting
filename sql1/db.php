<?php
$servername = "localhost";
$username = "toaster";
$password = "Se7en_pleiku@";
$dbname = "loginsystem";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
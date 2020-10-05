<?php 


$servername = "localhost";
$username = "dbUserName";
$password = "dbPassWord";
$dbname = "onlinechess";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
echo "connection error";
  die("Connection failed: " . $conn->connect_error);
}









?>
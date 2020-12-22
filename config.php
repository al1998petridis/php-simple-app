<?php

$servername = "us-cdbr-east-02.cleardb.com";
$username = "b7fff282f5609e";
$password = "76573be1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else
	echo "Database connection succed";
?>



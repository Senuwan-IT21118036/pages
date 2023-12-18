<?php
$servername = "localhost";
$username = "website";
$password = "Donsenuwan1#";
$dbname = "phplogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<?php
$servername = "localhost"; // or the database server (e.g., 127.0.0.1)
$username = "root"; // phpMyAdmin username
$password = ""; // phpMyAdmin password (default is blank)
$dbname = "tourism_db"; // my database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
 

<?php
$servername = "localhost";
$username = "norbi";
$password = "admin";
$dbname = "pet";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
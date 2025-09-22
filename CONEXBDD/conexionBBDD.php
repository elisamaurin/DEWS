<?php
$servername = "mysql.cvooc68auzgf.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "cachorritos11";
$database = "Concesionario";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
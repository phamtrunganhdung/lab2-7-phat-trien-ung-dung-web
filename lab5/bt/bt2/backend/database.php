<?php
$servername = "localhost";
$username = "root";
$password = "anhdung0403";
$dbname = "qlsinhvien";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
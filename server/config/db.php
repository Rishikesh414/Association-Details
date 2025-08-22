<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "association_db"; // fixed space issue, use underscore instead of space

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

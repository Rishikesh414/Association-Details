<?php
// $host = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "association_db"; 

$host = "localhost";
$user = "nscet_association";
$pass = "nscet@9210";
$dbname = "nscet_association"; 

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

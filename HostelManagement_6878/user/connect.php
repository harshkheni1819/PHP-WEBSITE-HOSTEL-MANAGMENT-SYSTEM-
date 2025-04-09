<?php
$host = "localhost";
$user = "root";
$password = ""; // Add password if needed
$database = "hostelmanagement_67";

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "ecommerce";

$conn = mysqli_connect($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

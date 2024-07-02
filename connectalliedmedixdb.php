<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "AlliedMedix_db";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die("<p style='color:red'>" . "Connection failed:" . $conn->connect_error . "</p>");
}
<?php
$servername = "Localhost";
$username= "root";
$password = " ";
$db_name = "mms";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
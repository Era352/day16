<?php
$user = "root";
$password = " ";
$server = "localhost";
$dbname = "mms";

try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname" $user, $password, );
}

catch (PDO exception $e) {
    ("Connection failed: " . $conn->connect_error);
}
?>
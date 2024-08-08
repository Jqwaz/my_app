<?php
$servername = "localhost";
$username = "infusein_admin";
$password = "4rsf889J!";
$dbname = "infusein_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
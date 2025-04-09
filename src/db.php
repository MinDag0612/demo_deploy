<?php
$host = "db"; // Dùng tên service trong docker-compose
$username = "root";
$password = "root";
$database = "demo_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>

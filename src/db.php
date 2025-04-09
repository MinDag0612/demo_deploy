<?php
$host = getenv('DB_HOST'); // Dùng tên service trong docker-compose
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$database = getenv('DB_NAME');

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>

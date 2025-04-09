<?php
$host = getenv("DB_HOST");
$port = getenv("DB_PORT"); // Đừng quên port!
$db   = getenv("DB_NAME");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");

// Kết nối PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass");

if (!$conn) {
    die("❌ Kết nối tới PostgreSQL thất bại.");
} else {
    echo "✅ Kết nối PostgreSQL thành công!";
}
?>

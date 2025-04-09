<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $sql = "INSERT INTO users (name) VALUES ('$name')";
    $conn->query($sql);
}

header("Location: index.php");
exit();
?>

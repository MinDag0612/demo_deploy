<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Danh sách người dùng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Danh sách người dùng</h1>

    <form action="add_user.php" method="POST">
        <input type="text" name="name" placeholder="Nhập tên..." required>
        <button type="submit">Thêm</button>
    </form>

    <ul>
        <?php
        $result = $conn->query("SELECT * FROM users ORDER BY id DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row['name']) . "</li>";
        }
        ?>
    </ul>
</body>
</html>

<?php
global $conn;
include 'db_connection.php';

// 插入示例用户数据
$sql = "INSERT INTO user_info (name, phone, email, username, password) VALUES 
('User 1', '123456789', 'user1@example.com', 'user1', '" . password_hash('password1', PASSWORD_DEFAULT) . "'),
('User 2', '987654321', 'user2@example.com', 'user2', '" . password_hash('password2', PASSWORD_DEFAULT) . "'),
('Admin', '999999999', 'admin@example.com', 'admin', '" . password_hash('admin123', PASSWORD_DEFAULT) . "')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
}
else {
    echo "Error inserting data: " . $conn->error;
}

// 关闭数据库连接
$conn->close();
?>
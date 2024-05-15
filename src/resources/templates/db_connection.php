<?php
$servername = "localhost";
$username = "root"; // 您的MySQL用户名
$password = "password"; // 您的MySQL密码
$dbname = "users";

// 创建数据库连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
include 'db_connection.php';

global $conn;
$conn = mysqli_connect("localhost", "root", "", "database");

function someFunction() {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM examples");

    // 创建名为users的数据库
    $sql = "CREATE DATABASE IF NOT EXISTS users";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";}
    else {
    echo "Error creating database: " . $conn->error;}
    // 切换到users数据库

    $conn->select_db("users");
    // 创建名为user_info的用户表
    $sql = "CREATE TABLE IF NOT EXISTS user_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    phone VARCHAR(20),
    email VARCHAR(50),
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL)";

    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";}
    else {
    echo "Error creating table: " . $conn->error;}
    // 关闭数据库连接
    $conn->close();}
?>
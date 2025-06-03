<?php
require 'connect.php';
session_start();

if (isset($_GET['login'])) {
    $username = $_GET['admin'];
    $password = $_GET['admin'];
    $hashedPassword = md5($password);
    
    if (!empty($username) && !empty($password)) {
        // Sử dụng Prepared Statement để tránh lỗ hổng SQL Injection
        $sql = "SELECT * FROM `users` WHERE username = ? AND password = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $hashedPassword);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $_SESSION["login"] = $username;
            header("Location: 04.admin.php");
            exit();
        } else {
            header("Location: 11.dang_nhap_sai.php");
            exit();
        }
    }
}
?>
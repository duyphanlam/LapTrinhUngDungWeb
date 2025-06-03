<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];

    if (isset($_POST['forget'])) {
        // Kiểm tra thông tin người dùng trong bảng users
        $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `email` = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Thông tin người dùng tồn tại, tạo mã xác minh và cập nhật vào cơ sở dữ liệu
            $verificationCode = generateVerificationCode();
            $updateSql = "UPDATE `users` SET `verification_codefg` = '$verificationCode' WHERE `username` = '$username' AND `email` = '$email'";
            $conn->query($updateSql);

            // Chuyển hướng người dùng đến trang nhập mã xác minh
            header("Location: 14.xacminhmk.php");
            exit();
        } else {
            // Thông tin người dùng không tồn tại, xử lý lỗi tại đây
            header("Location: 11.dang_nhap_sai.php");
        }
    }
}

function generateVerificationCode($length = 6) {
    $characters = '0123456789';
    $code = '';

    $charactersLength = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charactersLength - 1);
        $code .= $characters[$randomIndex];
    }

    return $code;
}

?>

<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $verificationCodefg = $_POST['verification_codefg'];

    if (isset($_POST['xac_nhan'])) {
        // Kiểm tra mã xác minh
        $sql = "SELECT * FROM `users` WHERE `verification_codefg` = '$verificationCodefg'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mã xác minh đúng, cập nhật dữ liệu trong cơ sở dữ liệu
            $updateSql = "UPDATE `users` SET `verification_codefg` = NULL, `xm` = 1 WHERE `verification_codefg` = '$verificationCodefg'";
            $conn->query($updateSql);

            // Chuyển hướng đến trang thông báo thành công
            header("Location: 15.thaypass.php");
            exit(); 
        } else {
            // Mã xác minh không đúng, xử lý lỗi tại đây
            header("Location: 14.1.xacminhsaiqmk.php");
        }
    }
}
?>

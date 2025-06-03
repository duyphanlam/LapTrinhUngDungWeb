<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $verificationCode = $_POST['verification_code'];

    if (isset($_POST['xac_nhan'])) {
        // Kiểm tra mã xác minh
        $sql = "SELECT * FROM `users` WHERE `verification_code` = '$verificationCode'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mã xác minh đúng, cập nhật dữ liệu trong cơ sở dữ liệu
            $updateSql = "UPDATE `users` SET `verification_code` = NULL, `xm` = 1 WHERE `verification_code` = '$verificationCode'";
            $conn->query($updateSql);

            // Chuyển hướng đến trang thông báo thành công
            header("Location: 12.1.xac_minh_tc.php");
            exit();
        } else {
            // Mã xác minh không đúng, chuyển hướng đến trang thông báo mã xác minh sai
            header("Location: 12.2.xacminh_sai.php");
            exit();
        }
    }
}
?>
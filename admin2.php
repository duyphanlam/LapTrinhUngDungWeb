<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "store-data";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Câu lệnh SQL để tạo bảng
$sql = "CREATE TABLE admin (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
)";

// Thực thi câu lệnh
if (mysqli_query($conn, $sql)) {
    echo "Tạo bảng thành công<br>";
} else {
    echo "Lỗi trong quá trình tạo bảng: " . mysqli_error($conn) . "<br>";
}

// Câu lệnh SQL để thêm dữ liệu
$sql = "INSERT INTO admin (username, password) VALUES ('admin', 'password')";

// Thực thi câu lệnh
if (mysqli_query($conn, $sql)) {
    echo "Thêm dữ liệu vào bảng admin thành công<br>";
} else {
    echo "Lỗi trong quá trình thêm dữ liệu: " . mysqli_error($conn) . "<br>";
}

// Đóng kết nối
mysqli_close($conn);
?>
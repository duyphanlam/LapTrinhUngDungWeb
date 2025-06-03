<?php
require 'connect.php';

$emailErr = "";
$usernameErr = "";

if (isset($_POST['btn-reg'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: 10.2.dang_ky_sai.php");
        exit();
    } else {
        // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu hay chưa
        $checkEmailQuery = "SELECT * FROM `users` WHERE `email` = '$email'";
        $checkEmailResult = $conn->query($checkEmailQuery);

        if ($checkEmailResult->num_rows > 0) {
            // Email đã tồn tại, gán thông báo lỗi vào biến $emailErr
            $emailErr = "Email đã tồn tại trong hệ thống.";
        }

        // Kiểm tra xem username đã tồn tại trong cơ sở dữ liệu hay chưa
        $checkUsernameQuery = "SELECT * FROM `users` WHERE `username` = '$username'";
        $checkUsernameResult = $conn->query($checkUsernameQuery);

        if ($checkUsernameResult->num_rows > 0) {
            // Username đã tồn tại, gán thông báo lỗi vào biến $usernameErr
            $usernameErr = "Tên người dùng đã tồn tại trong hệ thống.";
        }

        if (empty($emailErr) && empty($usernameErr)) {
            // Email và username chưa tồn tại, tiếp tục xử lý
            $hashedPassword = md5($password);
            $verificationCode = generateVerificationCode();

            // Thêm người dùng vào cơ sở dữ liệu với trạng thái xác minh là 0
            $sql = "INSERT INTO `users` (`fullname`, `username`, `password`, `email`, `address`, `gender`, `verification_code`, `xm`,`verification_codefg`) VALUES ('$fullname', '$username', '$hashedPassword', '$email', '$address', '$gender', '$verificationCode', 0,0)";

            if ($conn->query($sql) === true) {
                // Chuyển hướng người dùng đến trang xác minh
                header("Location: 12.xac_minh.php?email=$email");
                exit();
            } else {
                echo "Lỗi {$sql}" . $conn->error;
            }
        }
    }
}

// Hàm tạo mã xác minh
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


<script>
    // Kiểm tra giá trị của biến $emailErr và $usernameErr
    var usernameErr = "<?php echo $usernameErr; ?>";
    var emailErr = "<?php echo $emailErr; ?>";
    

    if (usernameErr !== "") {
        // Hiển thị thông báo tên người dùng đã tồn tại
        alert(usernameErr);
        // Chuyển hướng người dùng đến trang đăng ký
        window.location.href = "10.dang_ky.php";
    }
    if (emailErr !== "") {
        // Hiển thị thông báo email đã tồn tại
        alert(emailErr);
        // Chuyển hướng người dùng đến trang đăng ký
        window.location.href = "10.dang_ky.php";
    }

    
</script>
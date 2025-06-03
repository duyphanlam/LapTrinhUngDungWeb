<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>lab4</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form-type1.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer-.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form-.css">
    <link rel="stylesheet" href="assets/css/Search-Field-With-Icon.css">
    <link rel="stylesheet" href="assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="assets/css/Search-Input-responsive.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider-slider.css">
    <link rel="stylesheet" href="assets/css/Swiper-Slider.css">
    <?php
    require 'connect.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $newPassword = $_POST['new_password'];
        $confirmPassword = $_POST['confirm_password'];

        // Kiểm tra xem mật khẩu mới và mật khẩu xác nhận có khớp nhau không
        if ($newPassword === $confirmPassword) {
            // Truy vấn cơ sở dữ liệu để kiểm tra thông tin người dùng
            $sql = "SELECT * FROM users WHERE username = '$username' AND email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Cập nhật mật khẩu mới vào cơ sở dữ liệu
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateSql = "UPDATE users SET password = '$hashedPassword' WHERE username = '$username' AND email = '$email'";
                $conn->query($updateSql);

                // Chuyển hướng đến trang thông báo thành công
                header("Location: 15.1.thay_doi_mk_thanh_cong.php");
                exit();
            }
        } else {
            // Mật khẩu mới và mật khẩu xác nhận không khớp, xử lý lỗi tại đây
            header("location: 15.2.mksai.php")
        }
    }
    ?>
</head>

<body>
    <?php include("header.php"); ?>
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-around"><form action="15.thaypass.php" method="post" class="col-md-6 bg-light p-3 my-3">
                    <h1 class="text-center text-uppercase h3 py-3">ĐỔI PASS</h1><br>
                    <h1 class="text-uppercase h5 py-3">Xin lỗi vì sự bất tiện này để chắc chắn rằng bạn không phải robot vui lòng nhập lại username và email</h1><br>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username" class="form-control" required="" value="<?php echo isset($email) ? $email : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required="" value="<?php echo isset($email) ? $email : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="new_password">Mật khẩu mới</label>
                        <input type="password" name="new_password" id="new_password" class="form-control" required="">
                        </div>
                    <div class="form-group">
                        <label for="confirm_password">Nhập lại mật khẩu</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required="">
                        </div>
        <input name="thaypass" id="thaypass" type="submit" class="block" value="Thay đổi mật khẩu"><br>
                </form></div>
        </div>
    </div>
    <footer id="footer_hotro">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#">SNeAkER VIETNAM</a></h3>
                <p class="links"><a href="1.trang_chu.php">TRANG CHỦ</a><strong> · </strong><a href="2.giay.php">GIÀY</a><strong> · </strong><a href="3.phu_kien.php">PHỤ KIỆN</a><strong> · </strong><a href="4.ho_tro.php">HỖ TRỢ</a></p>
                <p class="company-name">SNEAKER VIETNAM&nbsp;© 2022</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">29 Nơ Trang Long</span>TP.Hồ Chí Minh, Việt Nam</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +84 081508</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@sneakervn.com</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about">
                <h4>Về chúng tôi</h4>
                <p><span style="color: rgb(0, 0, 0); background-color: rgb(215, 212, 212);">Sneaker VietNam là một shop giày nổi tiếng và uy tín tại Việt Nam, chuyên cung cấp các loại giày sneaker chất lượng cao từ các thương hiệu danh tiếng trên thế giới</span></p>
                
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="assets/js/Multi-step-form-script.js"></script>
    <script src="assets/js/Multi-step-form-type1-multistep.js"></script>
    <script src="assets/js/Swiper-Slider-slider.js"></script>
</body>

</php>
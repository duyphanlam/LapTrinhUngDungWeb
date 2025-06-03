<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Form đăng ký</title>
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
    <script>
        function showErrorMessage() {
            document.getElementById('error-message').style.display = 'block';
        }
    </script>
    <style>
        #dctk:hover{
            color: blue;
        }
    </style>
</head>

<body>
    <?php include("header.php"); ?>
    <div id="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form action="reg.php" method="post" class="col-md-6 bg-light p-3 my-3">
                    <h1 class="text-center text-uppercase h3 py-3">Đăng ký tài khoản</h1>
                    <div class="form-group">
                        <label for="fullname">Họ và tên</label>
                        <input type="text" name="fullname" id="fullname" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username" class="form-control" required="">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                        <?php if (!empty($emailErr)) { ?>
        <div class="error"><?php echo $emailErr; ?></div>
    <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="gender">Giới tính</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="nam" value="nam" class="form-check-input" checked="">
                                <label for="nam" class="form-check-label">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="nu" value="nu" class="form-check-input">
                                <label for="nu" class="form-check-label">Nữ</label>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" id="address" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="number" name="phone" id="phone" class="form-control" required="">
                    </div>
                        <input type="submit" name="btn-reg" class="block" value="GỬI MÃ XÁC MINH VÀO EMAIL"><br>
                        <p>Bạn đã có tài khoản? <a id=dctk role="button"  href="11.dang_nhap.php">ĐĂNG NHẬP</a></p>
                </form>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>
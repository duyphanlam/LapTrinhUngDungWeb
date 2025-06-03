<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>lab4</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
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
</head>

<body>
    <?php include("header.php"); ?>
    <div class="jumbotron">
        <h1 class="text-center">XIN CHÀO, SNEAKER VIETNAM CÓ THỂ GIÚP GÌ CHO BẠN</h1>
        <form action="help.php" method="post">
            <div class="search-container">
                <input type="text" class="search-input" name="van_de" placeholder="Nhập vấn đề bạn cần hỗ trợ">
                    <button class="btn btn-dark search-btn" type="submit" style="margin-top: 1px;" name="searching"> 
                        <i class="far fa-paper-plane"></i>
                    </button>
            </div>
        </form>        
    </div>
    <?php include("footer_hotro.php"); ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="assets/js/Multi-step-form-script.js"></script>
    <script src="assets/js/Multi-step-form-type1-multistep.js"></script>
    <script src="assets/js/Swiper-Slider-slider.js"></script>
</body>

</php>
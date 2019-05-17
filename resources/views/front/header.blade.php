<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Home Theme Front End</title>
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="assets/css/main-core.css">
    <link rel="stylesheet" href="assets/css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
    <!-- endbuild -->
</head>
<body>
    <!-- Header -->
    <header class="header--primary">
        <div class="nav--top">
            <nav class="top--content">
                <div class="nav--top-icon">
                    <i class="far fa-phone"></i>
                    <span>123 456 7890 123</span>
                </div>
            <ul>
                @guest
                    <li><a href="#">Hỗ trợ</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                    <li><a href="#">Đăng ký</a></li>
                @else
                    <li>
                        <a href="#"><img src="assets/images/hoian.png" alt="">{{ Auth::user()->name }} <i class="far fa-angle-down"></i></a>

                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
            </nav>
        </div>
        <nav class="nav--primary">
            <div class="logo">
                <h1>Go<span>travel</span></h1>
            </div>

            <!-- Nav mobile -->
            <label class="hidden" for="mobileNav">
                <div class="nav--mobile">
                    <div class="icon-nav">
                        <span class="mobile-icon"></span>
                        <span class="mobile-icon"></span>
                        <span class="mobile-icon"></span>
                    </div>
                </div>
            </label>

            <input type="checkbox" class="nav--check" id="mobileNav">

            <label class="nav--overley" for="mobileNav"></label>

            <label for="mobileNav" class="close--button">
                <i class="far fa-times"></i>
            </label>

            <ul>
                <li><a href="#" class="active--primary">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Hướng dẫn</a></li>
                <li><a href="#">Chính sách</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </nav>
    </header>


    <!--build:js js/main.min.js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- endbuild -->
</body>
</html>

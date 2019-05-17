<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Go Home Theme Front End</title>
<!--build:css css/styles.min.css -->
<link rel="stylesheet" href="assets/css/search.css">
<link rel="stylesheet" href="assets/css/owl/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/ion.rangeSlider/css/ion.rangeSlider.css">
<link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">
<link rel="stylesheet" href="assets/css/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css">
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
                <li><a href="#">Việt Nam<i class="far fa-angle-down"></i></i></a></li>
                <li><a href="#">Đăng nhập</a></li>
                <li><a href="#">Đăng ký</a></li>
            </ul>
        </nav>
    </div>
    <nav class="nav--primary">
        <div class="logo">
            <h1>Travel<span>trip</span></h1>
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

<!-- Content -->
<section class="sub--content">
    <div class="content--tree">
        <h3>Tìm kiếm</h3>

        <nav class="nav">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Tìm kiếm</a></li>
            </ul>
        </nav>
    </div>
</section>

<!-- Banner -->
<section class="banner">
    <div class="search">
        <!-- Search Form  -->
        <div class="info__nav">
            <div class="overley"></div>

            <div class="tab-content">
              <div class="tab-pane show active" id="hotels" role="tabpanel">Homestays</div>
              <div class="tab-pane fade" id="homestay" role="tabpanel">How to picked homestay?</div>
              <div class="tab-pane fade" id="activity" role="tabpanel">I don't know activity?</div>
            </div>

            <form class="form__search">
                <div class="form__item form__input">
                    <input type="text" class="form-control" placeholder="Chọn thành phố, địa điểm hoặc homestay">
                    <i class="fas fa-map-marker-alt"></i>
                </div>

                <div class="form__item form__pick-datime">
                    <input type="text" name="daterange" class="form-control" placeholder="Bắt đầu và kết thúc" value="">
                    <i class="far fa-calendar" id="daterange"></i>
                </div>

                <div class="form__item form__picked-people">
                    <select name="" id="" class="form-control">
                        <option value="">
                            2 Người trong 1 phòng
                        </option>
                        <option value="">
                            2 Người trong 1 phòng
                        </option>
                    </select>
                    <i class="far fa-angle-down"></i>
                </div>

                <div class="form__button">
                    <button class="btn">
                        Search
                    </button>
                </div>
            </form>

            <div class="filter-more checkbox">
                <input type="checkbox" id="more" checked>
                <label for="more">Tùy chọn khác</label>
                <div class="filter-nav">
                    <div class="filter-row">
                        <h4>Lọc theo: </h4>
                            <nav class="nav">
                                <ul>
                                    <li><a href="#" ><i class="fas fa-dollar-sign"></i> Giá homestay</a></li>
                                </ul>
                            </nav>

                            <div class="range-slider">
                              <input class="range-slider__range" type="range" value="100" min="0" max="100000">
                              <span class="range-slider__value">0 đ</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <!-- Content-left -->
    <aside>
        <p class="result">69 kết quả tìm kiếm</p>
        <p>ở Hà Nội</p>
        
        <!-- Homestays name search -->
        <ul>
            <li>
                <input type="checkbox" class="nav--check">
                <i class="nav-icon"></i>
                <h3>Tìm kiếm theo tên</h3>

                <div class="show">
                    <input type="text" class="form-control"><button type="submit"><i class="far fa-search"></i></button>
                </div>
            </li>

            <li>
                <input type="checkbox" class="nav--check">
                <i class="nav-icon"></i>
                <h3>Giảm giá</h3>

                <div class="show">
                    <div class="offers">
                        <div class="item">
                            <input type="checkbox" id="offers-1">
                            <label for="offers-1">30% trở lên</label>
                        </div>

                        <div class="item">
                            <input type="checkbox" id="offers-2">
                            <label for="offers-2">50% trở lên</label>
                        </div>                      
                    </div>
                </div>
            </li>
            
            <li>
                <input type="checkbox" class="nav--check">
                <i class="nav-icon"></i>
                <h3>Giá</h3>

                <div class="show">
                    <div class="prices">
                        <div class="item">
                            <div class="item__flex">
                                <input type="checkbox" id="price-1">

                                <label for="price-1">Upto - $79</label>
                            </div>

                            
                            <label for="">69</label>
                        </div>

                        <div class="item">
                            <div class="item__flex">
                                <input type="checkbox" id="price-2">

                                <label for="price-2">$80 - $169</label>
                            </div>

                            
                            <label for="">69</label>
                        </div>

                        <div class="item">
                            <div class="item__flex">
                                <input type="checkbox" id="price-3">

                                <label for="price-3">$70 - $269</label>
                            </div>

                            
                            <label for="">69</label>
                        </div>

                        <div class="item">
                            <div class="item__flex">
                                <input type="checkbox" id="price-4">

                                <label for="price-4">$270 - $789</label>
                            </div>

                            
                            <label for="">69</label>
                        </div>          
                    </div>
                </div>
            </li>

            <li>
                <input type="checkbox" class="nav--check">
                <i class="nav-icon"></i>
                <h3>Đánh giá</h3>

                <div class="show">
                    <div class="rating">
                        <div class="item">
                            <div class="item__start item__flex">
                                <input type="checkbox" id="rate-1">
                                <label for="rate-1">1 sao</label>
                            </div>

                            <div class="item__end item__flex">
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                        </div>

                        <div class="item">
                            <div class="item__flex">
                                <input type="checkbox" id="rate-2">
                                <label for="rate-2">2 sao</label>
                            </div>
                            
                            <div class="item__flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>  


                        <div class="item">
                            <div class="item__flex">
                                <input type="checkbox" id="rate-3">
                                <label for="rate-3">3 sao</label>
                            </div>

                            <div class="item__flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>  


                        <div class="item">
                            <div class="item__flex">
                                <input type="checkbox" id="rate-4">
                                <label for="rate-4">4 sao</label>
                            </div>
                            
                            <div class="item__flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item__flex">
                                <input type="checkbox" id="rate-5">
                                <label for="rate-5">5 sao</label>
                            </div>

                            <div class="item__flex">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </aside>

    <!-- Content-right  -->
    <article>
        <h1>Kết quả tìm kiếm Homestays</h1>
        
        <!-- Sort -->
        <div class="sort">
            <label for="">Sort by:</label>

            <ul>
                <li>Đề xuất</li>
                <li>Đánh giá</li>
                <li>Giá</li>
                <li>Giảm giá</li>
            </ul>
        </div>

        <div class="featured--post">
            <!-- Post -->
            <div class="center--box">
                <div class="post">
                    <div class="post__detail item">
                        <div class="img__box">
                            <a href="">
                                <img src="assets/images/homestay-1.jpg" alt="">
                            </a>
                        </div>

                        <div class="flex-row">
                            <div class="detail-info">
                                <div class="title">
                                    <a href="">
                                        <h4>The Alient Homestay Cumback asdasdasdsa asas á á</h4>
                                    </a>

                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>                                      
                                </div>

                                <div class="descripton">
                                    <p class="location">Da Nang, Viet Nam</p>
                                    <p class="control">Entire home/aptt 2 beds 4 guests</p>
                                </div>

                                <div class="icon">
                                    <i class="fas fa-dumbbell"></i>
                                    <i class="far fa-swimmer"></i>
                                    <i class="fas fa-coffee"></i>
                                </div>
                            </div>


                            <div class="detail-function">
                                <div class="flex-end">
                                    <span class="price"> 1 đêm /<span> $250</span></span>

                                    <div class="review">
                                         <p>132 reviews</p>
                                    </div>
                                </div>

                                <div class="button-control">
                                    <a href=""><button>View Details</button></a>
                                </div>
                            </div>

                            <div class="tag">
                                <span class="pink">Tags: </span>
                                <span>#homestays</span>
                                <span>#alien</span>
                            </div>  
                        </div>              
                    </div>

                </div>

                <div class="post">
                    <div class="post__detail">
                        <div class="img__box">
                            <img src="assets/images/homestay-2.jpg" alt="">
                        </div>

                        <div class="flex-row">
                            <div class="detail-info">
                                <div class="title">
                                    <a href="">
                                        <h4>The Alient Homestay Cumback asdasdasdsa asas á á</h4>
                                    </a>

                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>                                      
                                </div>

                                <div class="descripton">
                                    <p class="location">Da Nang, Viet Nam</p>
                                    <p class="control">Entire home/aptt 2 beds 4 guests</p>
                                </div>

                                <div class="icon">
                                    <i class="fas fa-dumbbell"></i>
                                    <i class="far fa-swimmer"></i>
                                    <i class="fas fa-coffee"></i>
                                </div>
                            </div>


                            <div class="detail-function">
                                <div class="flex-end">
                                    <span class="price"> 1 đêm /<span> $250</span></span>

                                    <div class="review">
                                         <p>132 reviews</p>
                                    </div>
                                </div>

                                <div class="button-control">
                                    <a href=""><button>View Details</button></a>
                                </div>
                            </div>

                            <div class="tag">
                                <span class="pink">Tags: </span>
                                <span>#homestays</span>
                                <span>#alien</span>
                            </div>  
                        </div>                  
                    </div>

                </div>

                <div class="post">
                    <div class="post__detail">
                        <div class="img__box">
                            <img src="assets/images/homestay-3.jpg" alt="">
                        </div>

                        <div class="flex-row">
                            <div class="detail-info">
                                <div class="title">
                                    <a href="">
                                        <h4>The Alient Homestay Cumback asdasdasdsa asas á á</h4>
                                    </a>

                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>                                      
                                </div>

                                <div class="descripton">
                                    <p class="location">Da Nang, Viet Nam</p>
                                    <p class="control">Entire home/aptt 2 beds 4 guests</p>
                                </div>

                                <div class="icon">
                                    <i class="fas fa-dumbbell"></i>
                                    <i class="far fa-swimmer"></i>
                                    <i class="fas fa-coffee"></i>
                                </div>
                            </div>


                            <div class="detail-function">
                                <div class="flex-end">
                                    <span class="price"> 1 đêm /<span> $250</span></span>

                                    <div class="review">
                                         <p>132 reviews</p>
                                    </div>
                                </div>

                                <div class="button-control">
                                    <a href=""><button>View Details</button></a>
                                </div>
                            </div>

                            <div class="tag">
                                <span class="pink">Tags: </span>
                                <span>#homestays</span>
                                <span>#alien</span>
                            </div>  
                        </div>                  
                    </div>
                </div>

                <div class="post">
                    <div class="post__detail">
                        <div class="img__box">
                            <img src="assets/images/homestay-3.jpg" alt="">
                        </div>

                        <div class="flex-row">
                            <div class="detail-info">
                                <div class="title">
                                    <a href="">
                                        <h4>The Alient Homestay Cumback asdasdasdsa asas á á</h4>
                                    </a>

                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>                                      
                                </div>

                                <div class="descripton">
                                    <p class="location">Da Nang, Viet Nam</p>
                                    <p class="control">Entire home/aptt 2 beds 4 guests</p>
                                </div>

                                <div class="icon">
                                    <i class="fas fa-dumbbell"></i>
                                    <i class="far fa-swimmer"></i>
                                    <i class="fas fa-coffee"></i>
                                </div>
                            </div>


                            <div class="detail-function">
                                <div class="flex-end">
                                    <span class="price"> 1 đêm /<span> $250</span></span>

                                    <div class="review">
                                         <p>132 reviews</p>
                                    </div>
                                </div>

                                <div class="button-control">
                                    <a href=""><button>View Details</button></a>
                                </div>
                            </div>

                            <div class="tag">
                                <span class="pink">Tags: </span>
                                <span>#homestays</span>
                                <span>#alien</span>
                            </div>  
                        </div>                  
                    </div>
                </div>

                <div class="post">
                    <div class="post__detail">
                        <div class="img__box">
                            <img src="assets/images/homestay-3.jpg" alt="">
                        </div>

                        <div class="flex-row">
                            <div class="detail-info">
                                <div class="title">
                                    <a href="">
                                        <h4>The Alient Homestay Cumback asdasdasdsa asas á á</h4>
                                    </a>

                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>                                      
                                </div>

                                <div class="descripton">
                                    <p class="location">Da Nang, Viet Nam</p>
                                    <p class="control">Entire home/aptt 2 beds 4 guests</p>
                                </div>

                                <div class="icon">
                                    <i class="fas fa-dumbbell"></i>
                                    <i class="far fa-swimmer"></i>
                                    <i class="fas fa-coffee"></i>
                                </div>
                            </div>


                            <div class="detail-function">
                                <div class="flex-end">
                                    <span class="price"> 1 đêm /<span> $250</span></span>

                                    <div class="review">
                                         <p>132 reviews</p>
                                    </div>
                                </div>

                                <div class="button-control">
                                    <a href=""><button>View Details</button></a>
                                </div>
                            </div>

                            <div class="tag">
                                <span class="pink">Tags: </span>
                                <span>#homestays</span>
                                <span>#alien</span>
                            </div>  
                        </div>                      
                    </div>
                </div>

                <div class="post">
                    <div class="post__detail">
                        <div class="img__box">
                            <img src="assets/images/homestay-3.jpg" alt="">
                        </div>

                        <div class="flex-row">
                            <div class="detail-info">
                                <div class="title">
                                    <a href="">
                                        <h4>The Alient Homestay Cumback asdasdasdsa asas á á</h4>
                                    </a>

                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>                                      
                                </div>

                                <div class="descripton">
                                    <p class="location">Da Nang, Viet Nam</p>
                                    <p class="control">Entire home/aptt 2 beds 4 guests</p>
                                </div>

                                <div class="icon">
                                    <i class="fas fa-dumbbell"></i>
                                    <i class="far fa-swimmer"></i>
                                    <i class="fas fa-coffee"></i>
                                </div>
                            </div>


                            <div class="detail-function">
                                <div class="flex-end">
                                    <span class="price"> 1 đêm /<span> $250</span></span>

                                    <div class="review">
                                         <p>132 reviews</p>
                                    </div>
                                </div>

                                <div class="button-control">
                                    <a href=""><button>View Details</button></a>
                                </div>
                            </div>

                            <div class="tag">
                                <span class="pink">Tags: </span>
                                <span>#homestays</span>
                                <span>#alien</span>
                            </div>  
                        </div>                  
                    </div>
                </div>

                <div class="post">
                    <div class="post__detail">
                        <div class="img__box">
                            <img src="assets/images/homestay-3.jpg" alt="">
                        </div>

                        <div class="flex-row">
                            <div class="detail-info">
                                <div class="title">
                                    <a href="">
                                        <h4>The Alient Homestay Cumback asdasdasdsa asas á á</h4>
                                    </a>

                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>                                      
                                </div>

                                <div class="descripton">
                                    <p class="location">Da Nang, Viet Nam</p>
                                    <p class="control">Entire home/aptt 2 beds 4 guests</p>
                                </div>

                                <div class="icon">
                                    <i class="fas fa-dumbbell"></i>
                                    <i class="far fa-swimmer"></i>
                                    <i class="fas fa-coffee"></i>
                                </div>
                            </div>


                            <div class="detail-function">
                                <div class="flex-end">
                                    <span class="price"> 1 đêm /<span> $250</span></span>

                                    <div class="review">
                                         <p>132 reviews</p>
                                    </div>
                                </div>

                                <div class="button-control">
                                    <a href=""><button>View Details</button></a>
                                </div>
                            </div>

                            <div class="tag">
                                <span class="pink">Tags: </span>
                                <span>#homestays</span>
                                <span>#alien</span>
                            </div>  
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<!-- Footer -->
<footer>

    <section class="footer footer--content">
        <div class="page">
            <h5>Like Traveltrip để cập nhật những tin tức mới nhất.</h5>
        </div>

        <div class="about">
            <h5>Về chúng tôi</h5>

            <nav>
                <ul>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Điều khoản hoạt động</a></li>
                    <li><a href="">Chính sách bản quyền</a></li>
                    <li><a href="">Chính sách bảo mật</a></li>
                </ul>
            </nav>
        </div>

        <div class="suport">
            <h5>Hỗ trợ</h5>

            <nav>
                <ul>
                    <li><a href="">Câu hỏi thường gặp</a></li>
                    <li><a href="">Chính sách hủy</a></li>
                    <li><a href="">Hướng dẫn sử dụng</a></li>
                </ul>
            </nav>
        </div>

        <div class="friend">
            <h5>Bạn bè liên kết</h5>

            <nav>
                <ul>
                    <li><a href="">Luxstay</a></li>
                    <li><a href="">VNtrip</a></li>
                    <li><a href="">Agoda</a></li>
                </ul>
            </nav>
        </div>
        
    </section>

    <section class="footer--bottom">
        <div class="footer--width">
            <div class="logo-social">
                <img src="" alt="">

                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-google-plus-g"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-tumblr"></i>
            </div>

            <div class="copyright">
                <h5>Copyright 2018 Travel trip | ALl rights reserved</h5>
            </div>
        </div>

    </section>
</footer>


<!--build:js js/main.min.js -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/daterangepicker.js"></script>
<script src="assets/js/ion.rangeSlider.min.js"></script>
<script src="assets/js/main.js"></script>
<!-- endbuild -->
</body>
</html>

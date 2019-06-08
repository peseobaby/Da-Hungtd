<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Go Home Theme Front End</title>
<!--build:css css/styles.min.css -->
<link rel="stylesheet" href="assets/css/main.css">
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
				<li><a href="#">Hỗ trợ</a></li>
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

		<!-- End Nav Mobile -->

		<ul>
			<li><a href="#" class="active--primary">Trang chủ</a></li>
			<li><a href="#">Giới thiệu</a></li>
			<li><a href="#">Chính sách</a></li>
			<li><a href="#">Liên hệ</a></li>
			<li><a href="#">Hướng dẫn</a></li>
		</ul>

	</nav>
</header>

<!-- Banner -->
<section class="banner">
	<div class="search">
		<!-- Search Tab -->
		<nav class="search__nav">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="active" data-toggle="tab" href="#hotels">Hotels</a>
			  </li>
			  <li class="nav-item">
			    <a data-toggle="tab" href="#homestay">Homestay</a>
			  </li>
			  <li class="nav-item">
			    <a data-toggle="tab" href="#activity">Activity</a>
			  </li>
			</ul>
		</nav>

		<!-- Search Form  -->
		<div class="info__nav">
			<div class="overley"></div>

			<div class="tab-content">
			  <div class="tab-pane show active" id="hotels" role="tabpanel">Are you ready okay?</div>
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
					<input type="number" id="people" placeholder="Nhập số người" class="text-center">
					<i class="far fa-users"></i>
				</div>

				<div class="form__button">
					<button class="btn">
						Search
					</button>
				</div>
			</form>

			<div class="filter-more checkbox">
				<input type="checkbox" id="more">
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

<!-- Content -->

<!-- Homestay post -->
<section class="featured">
	<h2>Featured Homestay Deals</h2>

	<div class="featured--post">
		<div class="owl-carousel owl-theme" id="homestays">
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
								
								<span class="price">$250<span> / 1 đêm</span></span>		
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
							<div class="button-control">
								<a href=""><button>View Details</button></a>
							</div>

							<div class="flex-end">
								<div class="rating">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star-half-alt"></i>
								</div>

								<div class="review">
									 <p>132 reviews</p>
								</div>
							</div>
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
								
								<span class="price">$250<span> / 1 đêm</span></span>		
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
							<div class="button-control">
								<a href=""><button>View Details</button></a>
							</div>

							<div class="flex-end">
								<div class="rating">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star-half-alt"></i>
								</div>

								<div class="review">
									 <p>132 reviews</p>
								</div>
							</div>
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
								
								<span class="price">$250<span> / 1 đêm</span></span>		
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
							<div class="button-control">
								<a href=""><button>View Details</button></a>
							</div>

							<div class="flex-end">
								<div class="rating">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star-half-alt"></i>
								</div>

								<div class="review">
									 <p>132 reviews</p>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>			
		</div>
	</div>
</section>

<!-- Localtion -->
<section class="featured">
	<h2>Featured Location</h2>

	<div class="featured--location">
		<div class="grid grid-2-column">
			<div class="item">
				<a href="#">
					<img src="assets/images/hanoi.png" alt="">

					<div class="item-position">
						<div class="middle">
							<div class="place-name">
								<h4>Hà Nội</h4>
								<span>&nbsp;</span>
							</div>

							<div class="place-content">
								<p class="info"><i class="far fa-search"></i>1000 homestay Hà Nội</p>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="grid grid-1-column">
			<div class="item">
				<a href="#">
					<img src="assets/images/danang.png" alt="">

					<div class="item-position">
						<div class="middle">
							<div class="place-name">
								<h4>Hà Nội</h4>
								<span>&nbsp;</span>
							</div>

							<div class="place-content">
								<p class="info"><i class="far fa-search"></i>1000 homestay Hà Nội</p>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		
		<div class="grid grid-1-column">
			<div class="item">
				<a href="#">
					<img src="assets/images/hoian.png" alt="">

					<div class="item-position">
						<div class="middle">
							<div class="place-name">
								<h4>Hà Nội</h4>
								<span>&nbsp;</span>
							</div>

							<div class="place-content">
								<p class="info"><i class="far fa-search"></i>1000 homestay Hà Nội</p>
							</div>
						</div>
					</div>
				</a>
			</div>				
		</div>

		<div class="grid grid-2-column">
			<div class="item">
				<a href="#">
					<img src="assets/images/hcm.png" alt="">

					<div class="item-position">
						<div class="middle">
							<div class="place-name">
								<h4>Hà Nội</h4>
								<span>&nbsp;</span>
							</div>

							<div class="place-content">
								<p class="info"><i class="far fa-search"></i>1000 homestay Hà Nội</p>
							</div>
						</div>
					</div>
				</a>
			</div>				
		</div>

		<div class="grid grid-2-column">
			<div class="item">
				<a href="#">
					<img src="assets/images/phuquoc.png" alt="">

					<div class="item-position">
						<div class="middle">
							<div class="place-name">
								<h4>Hà Nội</h4>
								<span>&nbsp;</span>
							</div>

							<div class="place-content">
								<p class="info"><i class="far fa-search"></i>1000 homestay Hà Nội</p>
							</div>
						</div>
					</div>
				</a>
			</div>		
		</div>

		<div class="grid grid-2-column">
			<div class="item">
				<a href="#">
					<img src="assets/images/nhatrang.png" alt="">

					<div class="item-position">
						<div class="middle">
							<div class="place-name">
								<h4>Hà Nội</h4>
								<span>&nbsp;</span>
							</div>

							<div class="place-content">
								<p class="info"><i class="far fa-search"></i>1000 homestay Hà Nội</p>
							</div>
						</div>
					</div>
				</a>
			</div>				
		</div>


		<div class="grid grid-2-column">
			<div class="item">
				<a href="#">
					<img src="assets/images/datlat.png" alt="">

					<div class="item-position">
						<div class="middle">
							<div class="place-name">
								<h4>Hà Nội</h4>
								<span>&nbsp;</span>
							</div>

							<div class="place-content">
								<p class="info"><i class="far fa-search"></i>1000 homestay Hà Nội</p>
							</div>
						</div>
					</div>
				</a>
			</div>				
		</div>
	</div>

</section>


<!-- News -->
<section class="featured">
	<h2>Featured Post</h2>

	<div class="featured--news">
		<div class="owl-carousel owl-theme" id="news">
			<div class="item odd">
				<div class="item--img">
					<a href="#">
						<img src="assets/images/homestay-2.jpg" alt="">
					</a>
				</div>

				<div class="item--content">
					<a href="">
						<h3 class="title">Best homestays Viet Nam</h3>
					</a>
					

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat laborum beatae iure, dolore eligendi accusantium, molestias ut quos illum obcaecati sequi, nam enim ullam provident?</p>

					<div class="item--button">
						<a href="">Chi tiết</a>
					</div>
				</div>
			</div>

			<div class="item even">
				<div class="item--content">
					<a href="#">
						<h3 class="title">Best homestays Viet Nam</h3>
					</a>
					

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat laborum beatae iure, dolore eligendi accusantium, molestias ut quos illum obcaecati sequi, nam enim ullam provident?</p>

					<div class="item--button">
						<a href="">Chi tiết</a>
					</div>
				</div>

				<div class="item--img">
					<a href="">
						<img src="assets/images/homestay-3.jpg" alt="">
					</a>
				</div>

			</div>	

			<div class="item odd">
				<div class="item--img">
					<a href="#">
						<img src="assets/images/homestay-2.jpg" alt="">
					</a>
				</div>

				<div class="item--content">
					<h3 class="title">Best homestays Viet Nam</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat laborum beatae iure, dolore eligendi accusantium, molestias ut quos illum obcaecati sequi, nam enim ullam provident?</p>

					<div class="item--button">
						<a href="">Chi tiết</a>
					</div>
				</div>
			</div>				
		</div>
		
	</div>

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

<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Go Home Theme Front End</title>
	<!--build:css css/styles.min.css -->
	<link rel="stylesheet" href="assets/css/thanhtoan.css">
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">
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
				<li><a href="#">Homestay</a></li>
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
			<h3>Đặt phòng</h3>

			<nav class="nav">
				<ul>
					<li><a href="#">Trang chủ</a></li>
					<li><a href="#">Đặt phòng</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<section class="booking">
		<h2>Đặt homestay nhanh gọn trong 3 bước.</h2>

		<div class="booking--row">
			<ul class="progressbar">
				<li class="active">Điền thông tin</li>
				<li>Xác nhận</li>
				<li>Thanh toán</li>
				<li>Hoàn thành</li>
			</ul>
		</div>

		<form action="" class="booking--form">
			<div class="form--col-left">
				<div class="form form-field">
					<!-- Điền thông tin -->
					<fieldset class="field">
						<section class="info">
							<h3>Điền thông tin</h3>

							<div class="info--content">
								<div class="form-group">
									<label for="name">Họ và tên: </label>

									<div>
										<input type="text" class="form-control form-control-lg" placeholder="Nhập tên như CMT hoặc hộ chiếu">
									</div>
								</div>

								<div class="form-group info__row">
									<label for="name">Số điện thoại: </label>

									<div>
										<input type="text" class="form-control form-control-lg" placeholder="VD: +84965788674">
									</div>
								</div>

								<div class="form-group info__row">
									<label for="name">Email: </label>

									<div>
										<input type="text" class="form-control form-control-lg" placeholder="VD: hoangdhph04904@fpt.edu.vn">
									</div>	
								</div>

								<div class="form-group info__row">
									<label for="">Quốc gia</label>

									<div>
										<select name="" id="" class="form-control form-control-lg">
											<option value="">Việt Nam</option>
										</select>
									</div>
								</div>

								<div class="form-group purpose-parent">
									<label for="" class="title">Mục đích chuyến đi?</label>

									<div class="form-group purpose">
										<input type="radio" id="tochuc" name="purpose">
										<label for="tochuc">Tổ chức tiệc</label>
									</div>

									<div class="form-group purpose">
										<input type="radio" id="giadinh" name="purpose">
										<label for="giadinh">Dành cho gia đình</label>
									</div>

									<div class="form-group purpose">
										<input type="radio" id="congtac" name="purpose">
										<label for="congtac">Công tác</label>
									</div>

									<div class="form-group purpose">
										<input type="radio" id="khac" name="purpose">
										<label for="khac">Khác</label>
									</div>
								</div>

								<div class="form-group purpose">
									<input type="checkbox" id="nguoikhac">
									<label for="nguoikhac">Tôi đặt cho người khác</label>
								</div>
							</div>
						</section>
					</fieldset>

					<!-- Xác nhận -->
					<fieldset>
						<section class="confirm">
							<div class="confirm--thanksyou ">
								<h3>Xác nhận đặt homestay</h3>

								<div class="title confirm_box">
									<div class="title--description">
										<p>Cảm ơn bạn, Hãy xác nhận đơn đặt phòng ngay bây giờ </p>
										<span>Một email đã được gửi đến cho bạn ... </span>
									</div>
									<h1>Travel<span>chip</span></h1>
								</div>
							</div>

							<div class="confirm--info confirm_box">
								<h4>Thông tin đơn đặt phòng</h4>

								<p>Mã đơn đặt phòng: 5784-bd245</p>
								<p>Họ và tên: Đào Huy Hoàng</p>
								<p>E-mail: hoangdhph04904@fpt.edu.vn</p>
								<p>Địa chỉ: Kim Lan - Gia Lâm - Hà Nội</p>
								<p>Quốc tịch: Việt Nam</p>
							</div>
							<div class="confirm_box">
								<h4>Thanh toán</h4>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione et, vel repudiandae? Recusandae esse, molestiae magni in provident cumque maiores architecto laborum soluta illum quidem minus laboriosam officiis a vitae.30</p>
							</div>
						</section>
					</fieldset>

					<!-- Thanh toán -->
					<fieldset>
						<section class="payment">
							<div class="">
								
							</div>
						</section>
					</fieldset>

					<!-- Hoàn thành -->
					<fieldset>
						<section class="finish">
							d
						</section>
					</fieldset>
				</div>

				<div class="btn btn--control">
					<button class="pre">Quay Lại</button>
					<button class="next" type="button">Tiếp theo</button>
				</div>
			</div>

			<div class="form--col-right">
				<div class="form">
					<section class="form-fare">
						<h3>Thông tin phòng</h3>

						<div class="fare--header">
							<div class="fare__image">
								<div class="image-width">
									<img src="assets/images/homestay-1.jpg" alt="">
								</div>
								

								<div class="details">
									<h4 class="name">Homestay travelchip</h4>

									<span class="descripton">Homestay</span>
									<span class="descripton">Kim Lan - Gia Lâm - Hà nội</span>

								</div>
							</div>

							<div class="fare--details">
								<div class="form-group">
									<label for="">Số đêm</label>
									<label for="" class="bold">1 đêm</label>
								</div>
								<div class="form-group">
									<label for="">Ngày đến</label>
									<label for="" class="bold">17-09-2018</label>		
								</div>
								<div class="form-group">
									<label for="">Ngày đi</label>
									<label for="" class="bold">17-09-2018</label>	
								</div>
								<div class="form-group">
									<label for="">Số khách</label>
									<label for="" class="bold">2 người</label>
								</div>

								<div class="total">
									<label for="">Tổng giá</label>
									<h4>$550</h4>
								</div>
							</div>
						</div>
					</section>					
				</div>

			</div>
		</form>
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
	<script src="assets/js/thanhtoan.js"></script>
	<!-- endbuild -->
</body>
</html>

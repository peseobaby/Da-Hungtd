<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Go Home Theme Front End</title>
	<!--build:css css/styles.min.css -->
	<link rel="stylesheet" href="assets/css/hoso.css">
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
	<!-- endbuild -->
</head>
<body>
	<!-- Header -->
	<header class="header--host">
		<div class="container host--nav">
			<div class="logo">
				<h1>Travel<span>trip</span></h1>
			</div>
			
			<div class="nav__top">
				<ul>
					<li><img src="assets/images/hanoi.png" alt=""> Đào Huy Hoàng <i class="far fa-angle-down"></i>
						<ul>
							<li><a href="">Profile</a></li>
							<li><a href="">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>	
			
		</div>
	</header>
	
	<section class="host--content">
		<div class="container container-flex">
			<aside>
				<div class="info-profile">
					<img src="assets/images/nhatrang.png" alt="">

					<div class="name">
						<h3>Đào Huy Hoàng</h3>
						<p>hoangdhph04904@fpt.edu.vn</p>
					</div>
				</div>
				<nav class="nav">
					<ul>
						<li><a href="" class="active">Quản lý phòng</a></li>
						<li><a href="">Hồ sơ cá nhân</a></li>
						<li><a href="">Thay đổi mật khẩu</a></li>
						<li><a href="">Đăng xuất</a></li>
					</ul>
				</nav>
			</aside>

			<article>
				<h1>Hồ sơ cá nhân</h1>
				<p class="mt-3 mb-5">Hoàn thành hồ sơ cá nhân để giúp đặt homestay nhanh chóng hơn</p>

				<div class="form-box">
					<div class="form-group d-flex">
							<label class="col-form-label col-md-2" for="tieude" class="col-form-label label bold">Avatar <span class="important">*</span></label>
			
							<div class="col-md-9 upload-file">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="avatar" onchange="readURL(this)">
									<label class="custom-file-label" for="avatar">Choose file</label>	
								</div>
			
								<ul>
									<li>Some things</li>
								</ul>
							</div>
			
							<div class="image-center">
								<img src="" alt="" id="pre-avatar" class="hidden">
							</div>
						</div>
					<div class="form-group d-flex">
						<label for="" class="col-form-label col-md-2">Họ và tên <span class="important">*</span></label>

						<div class="col-9">
							<input type="text" class="form-control form-control-lg" placeholder="Họ và tên">
						</div>
					</div>

					<div class="form-group d-flex">
						<label for="" class="col-form-label col-md-2">Email <span class="important">*</span></label>

						<div class="col-9">
							<input type="text" class="form-control form-control-lg" placeholder="Email">
							<span>Email sẽ được dùng để đăng nhập, nhận thông báo và đặt lại mật khẩu.</span>
						</div>
					</div>

					<div class="form-group d-flex">
						<label for="" class="col-form-label col-md-2">Số điện thoại <span class="important">*</span></label>

						<div class="col-9">
							<input type="text" class="form-control form-control-lg" placeholder="Số điện thoại">
							<span>Số di động sẽ được dùng để đăng nhập và đặt lại mật khẩu.</span>
						</div>
						
					</div>

					<div class="form-group d-flex">
						<label for="" class="col-form-label col-md-2">Ngày sinh</label>

						<div class="col-9 d-flex">
							<select name="custom" class="form-control form-control-lg col-3" id="">
								<option value="">1</option>
							</select>

							<select name="custom" class="form-control form-control-lg col-3" id="">
								<option value="">2</option>
							</select>

							<select name="custom" class="form-control form-control-lg col-3" id="">
								<option value="">3</option>
							</select>
						</div>
					</div>

					<div class="form-group d-flex">
						<label for="" class="col-form-label col-md-2">Địa chỉ</label>

						<div class="col-9">
							<input type="text" class="form-control form-control-lg" placeholder="Nơi bạn sống">
						</div>
					</div>

					<div class="form-group d-flex">
						<label for="" class="col-form-label col-md-2">Mô tả về bạn</label>

						<div class="col-9">
							<textarea name="" id="" class="form-control form-control-lg" rows="10"></textarea>
							<span>Giúp người khác biết về bạn. Chia sẻ về bạn: thói quen, điểm đến du lịch ưa thích, sách, phim ảnh, thức ăn, vv</span>
						</div>

						
					</div>

					<div class="form-group d-flex">
						<label for="" class="col-form-label col-md-2">CMND</label>

						<div class="col-9">
							<input type="text" class="form-control form-control-lg">
						</div>
					</div>
				</div>

				<div class="button--control">
					<button class="btn">
						Cập nhật
					</button>
				</div>
			</article>		 
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
	<script src="assets/js/dangphongchu.js"></script>
	<!-- endbuild -->
</body>
</html>

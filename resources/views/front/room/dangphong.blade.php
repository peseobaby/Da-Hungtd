<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Go Home Theme Front End</title>
	<!--build:css css/styles.min.css -->
	<link rel="stylesheet" href="assets/css/dangphongchu.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
	<!-- endbuild -->
</head>
<body>

	@include('layout.header')
	
	<!-- Content -->
	<section class="host--content">
		<h2 class="title">Đăng phòng</h2>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
		  <li class="nav-item">
		    <a class="nav-link active" data-toggle="tab" href="{{ route('add.room') }}">Mô tả</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="{{ route('convenince.room') }}">Tiện ích</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="{{ route('image.room') }}">Hình ảnh</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="{{ route('price.room') }}">Giá cả và chính sách</a>
		  </li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane container active" id="mota">

		  	<p class="font-weight-bold">Tiêu đề, tóm tắt và mô tả căn hộ sẽ được hiển thị công khai trên trang của bạn.</p>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="tieude" class="col-form-label label bold">Avatar <span class="important">*</span></label>

			  	<div class="input input--width">
			  		<div class="custom-file ">
					  <input type="file" class="custom-file-input" id="avatar" onchange="readURL(this)">
					  <label class="custom-file-label" for="avatar">Choose file</label>	
			  		</div>

			  		<ul>
					  	<li>Hãy chọn bức ảnh đẹp nhất để làm avatar nhé yasou</li>
					  	<li>Chỗ này trống quá mình không biết cho gì vào.</li>
					 </ul>
				</div>

				<div class="image-center">
					<img src="" alt="" id="pre-avatar" class="hidden">
				</div>
		  	</div>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="tieude" class="col-form-label label bold">Tiêu đề <span class="important">*</span></label>
		  		<div class="input">
		  			<input type="text" class="form-control form-control-lg">
		  		</div>
		  	</div>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="tieude" class="col-form-label label bold">Mô tả ngắn <span class="important">*</span></label>
		  		<div class="input">
		  			<textarea class="form-control form-control-lg" rows="5"></textarea>
		  		</div>
		  	</div>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="tieude" class="col-form-label label bold">Mô tả ngắn <span class="important">*</span></label>
		  		<div class="input">
		  			<textarea class="form-control form-control-lg" rows="15"></textarea>
		  		</div>
		  	</div>

		  	<h3>Thông tin khác</h3>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="loaicanho">Loại căn hộ</label>

		  		<div class="input">
		  			<select name="" id="" class="form-control form-control-lg">
		  				<option value="">Homestays</option>
		  			</select>
		  		</div>
		  	</div>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="loaicanho">Địa chỉ <span class="important">*</span></label>

		  		<div class="input">
		  			<input type="text" class="form-control form-control-lg">
		  		</div>
		  	</div>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="loaicanho">Số nhà</label>

		  		<div class="input">
		  			<input type="text" class="form-control form-control-lg">
		  		</div>
		  	</div>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="loaicanho">Số người</label>

		  		<div class="input">
		  			<input type="number" class="form-control form-control-lg">
		  		</div>
		  	</div>


		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="loaicanho">Tỉnh</label>

		  		<div class="input">
		  			<select name="" id="" class="form-control form-control-lg">
		  				<option value="">Hà Nội</option>
		  			</select>
		  		</div>
		  	</div>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="loaicanho">Quận/Huyện</label>

		  		<div class="input">
		  			<select name="" id="" class="form-control form-control-lg">
		  				<option value="">Gia Lâm</option>
		  			</select>
		  		</div>
		  	</div>

		  </div>
		  <div class="tab-pane container fade" id="tienich">
		  	<p class="font-weight-bold">Thêm các tiện nghi để làm nổi bật căn hộ của bạn với khách hàng</p>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="" class="col-form-label label">Phòng bếp</label>
		  		<div class="d-flex input">
		  			<div class="d-flex">
		  				<input type="number" id="bepga">
		  				<label class="col-form-label" for="bepga" class="col-form-label">Bếp ga</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="number" id="beptu">
		  				<label class="col-form-label" for="beptu" class="col-form-label">Bếp từ</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="number" id="lovisong">
		  				<label class="col-form-label" for="lovisong" class="col-form-label">Lò vi sóng</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="number" id="tulanh">
		  				<label class="col-form-label" for="tulanh" class="col-form-label ">Tủ lạnh</label>
		  			</div>
		  		</div>
		  	</div>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="" class="col-form-label label">Giải trí</label>
		  		<div class="d-flex input">
		  			<div class="d-flex">
		  				<input type="checkbox" id="beboi">
		  				<label class="col-form-label" for="beboi" class="col-form-label">Bể bơi</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="gym">
		  				<label class="col-form-label" for="gym" class="col-form-label">Mini gym</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="cauca">
		  				<label class="col-form-label" for="cauca" class="col-form-label">Câu cá</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="bbq">
		  				<label class="col-form-label" for="bbq" class="col-form-label ">BBQ</label>
		  			</div>
		  		</div>
		  	</div>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="" class="col-form-label label">Giải trí</label>
		  		<div class="d-flex input">
		  			<div class="d-flex">
		  				<input type="checkbox" id="wifi">
		  				<label class="col-form-label" for="wifi" class="col-form-label">Wifi</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="tv">
		  				<label class="col-form-label" for="tv" class="col-form-label">TV</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="dieuhoa">
		  				<label class="col-form-label" for="dieuhoa" class="col-form-label">Điều hòa</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="maygiat">
		  				<label class="col-form-label" for="maygiat" class="col-form-label ">Máy giặt</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="khantam">
		  				<label class="col-form-label" for="khantam" class="col-form-label ">Khăn tắm</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="thangmay">
		  				<label class="col-form-label" for="thangmay" class="col-form-label ">Thang máy</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="maysay">
		  				<label class="col-form-label" for="maysay" class="col-form-label ">Máy sấy</label>
		  			</div>
		  		</div>
		  	</div>

		  	<div class="form-group d-flex">
		  		<label class="col-form-label" for="" class="col-form-label label">Tiện ích cao cấp</label>
		  		<div class="d-flex input">
		  			<div class="d-flex">
		  				<input type="checkbox" id="phongxemphim">
		  				<label class="col-form-label" for="phongxemphim" class="col-form-label">Phòng xem phim</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="smarttv">
		  				<label class="col-form-label" for="smarttv" class="col-form-label">Smart TV</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="tudungruou">
		  				<label class="col-form-label" for="tudungruou" class="col-form-label">Tủ đựng rượu</label>
		  			</div>

		  			<div class="d-flex">
		  				<input type="checkbox" id="buasang">
		  				<label class="col-form-label" for="buasang" class="col-form-label">Phục vụ bữa sáng</label>
		  			</div>
		  		</div>
		  	</div>
		  </div>
		  <div class="tab-pane container fade" id="hinhanh">
			<p class="font-weight-bold">Hãy thu hút người dùng bằng những bức ảnh thật đẹp ở căn hộ của bạn</p>

			<div class="d-flex form-group">
				<div class="image-primary">
					
				</div>

				<div class="image-list">
					
				</div>
			</div>

		  </div>

		  <div class="tab-pane container fade" id="gia">
			<p class="font-weight-bold">Giá cả và các chính sách</p>

			<div class="form-group d-flex">
				<label class="col-form-label" for="">Đơn vị tiền tệ</label>

				<div class="col-md-3">
					<select name="" id="" class="form-control form-control-lg">
						<option value="">Việt Nam Đồng</option>
						<option value="">USD</option>
					</select>
				</div>
			</div>

			<p class="font-weight-bold">Giá cơ bản</p>

			<div class="form-group d-flex twins">
				<label class="col-form-label" for="gia1dem">Giá 1 đêm</label>

				<div class="input d-flex">
					<input type="number" class="form-control form-control-lg">
					<label class="col-form-label" for="" class="col-auto">$ / đêm</label>
					<i>Giá đã bao gồm 15% hoa hồng cho traveltrip. </i>
				</div>
			</div>

			<div class="form-group d-flex">
				<label class="col-form-label" for="gia1dem">Giá cuối tuần</label>

				<div class="input d-flex">
					<input type="number" class="form-control form-control-lg">
					<label class="col-form-label" for="" class="col-auto">$ / đêm</label>
					<i>Cuối tuần bao gồm: thứ sáu, thứ bảy, chủ nhật.</i>
				</div>
			</div>

			<p class="font-weight-bold sm-padding">Giá dài hạn</p>
			<span class="md-padding">Nếu bạn muốn có mức giá hàng tuần hoặc hàng tháng cho kỳ nghỉ dài hạn, bạn có thể sử dụng tùy chọn này. Chủ nhà sử dụng tùy chọn này để cung cấp giá chiết khấu cho khách có lưu trú dài hơn.</span>

			<div class="form-group d-flex">
				<label class="col-form-label" for="gia1dem">Giá theo tháng</label>

				<div class="input d-flex">
					<input type="number" class="form-control form-control-lg">
					<label class="col-form-label" for="" class="col-auto">$ / đêm</label>
					<i>Khách sẽ được áp dụng giá này cho bất kỳ đặt phòng nào là 30 đêm trở lên .</i>
				</div>
			</div>
		  </div>

		<div class="btn-control">
			<button class="btn">Tiếp</button>
			<button class="btn" disabled="">Lưu</button>
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
	<script src="assets/js/dangphongchu.js"></script>
	<!-- endbuild -->
</body>
</html>

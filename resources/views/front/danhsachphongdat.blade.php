<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Go Home Theme Front End</title>
	<!--build:css css/styles.min.css -->
	<link rel="stylesheet" href="assets/css/danhsachphongdat.css">
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
			<h1>Quản lý đặt phòng</h1>
			<div class="total">
				<p>Tổng số phòng đã đặt (1)</p>
			</div>

			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>Mã đặt homestay</th>
						<th>Địa điểm đặt</th>
						<th>Ngày đến</th>
						<th>Ngày đi</th>
						<th>Tổng tiền</th>
						<th>Tình trạng</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td><a href="">69X969</a></td>
						<td><a href="">Homestay</a></td>
						<td>23-10-2018</td>
						<td>24-10-2018</td>
						<td>1 củ năm</td>
						<td>Incomplete</td>
						<td><a class="btn">Chi tiết đặt phòng</a></td>
					</tr>
				</tbody>
			</table>
		</article>		 

		</div>
	</section>

	<!--build:js js/main.min.js -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- endbuild -->
</body>
</html>

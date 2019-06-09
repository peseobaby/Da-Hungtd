@extends('front.layout.layout-front')
@section('title')
    <title>Thanh toán</title>
@endsection
@section('before_scripts')
	<!--build:css css/styles.min.css -->
	<link rel="stylesheet" href="{{ asset('assets/css/thanhtoan.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/all.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
	<!-- endbuild -->
@endsection

<body>
	<!-- Header -->
	@section('header')
		@include('front.layout.header-primary')
	@endsection
	@section('content')
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
										<input type="text" class="form-control form-control-lg" placeholder="Nhập tên như CMT hoặc hộ chiếu" value="{{ $order->user->num_id }}">
									</div>
								</div>

								<div class="form-group info__row">
									<label for="name">Số điện thoại: </label>

									<div>
										<input type="text" class="form-control form-control-lg" placeholder="VD: +84965788674" value="{{ $order->user->phone }}>
									</div>
								</div>

								<div class="form-group info__row">
									<label for="name">Email: </label>

									<div>
										<input type="text" class="form-control form-control-lg" placeholder="VD: abc@viralsoft.vn" value="{{ $order->user->email }}>
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

								<p>Họ và tên: {{ $order ->user->name }}</p>
								<p>E-mail: {{ $order ->user->email }}</p>
								<p>Địa chỉ: {{ $order ->user->address }}</p>
								<p>Quốc tịch: Việt Nam</p>
							</div>
							<div class="confirm_box">
								<h4>Thanh toán</h4>

								<p></p>
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
									<h4 class="name">{{  }}</h4>

									<span class="descripton">{{ $order ->room->name }}</span>
									<span class="descripton">{{ $order ->hotel->address }}</span>

								</div>
							</div>

							<div class="fare--details">
								<div class="form-group">
									<label for="">Ngày đến</label>
									<label for="" class="bold">{{ $order ->create_at }}</label>
								</div>
								<div class="form-group">
									<label for="">Ngày đi</label>
									<label for="" class="bold">{{ $order ->end_at }}</label>
								</div>
								<div class="form-group">
									<label for="">Số khách</label>
									<label for="" class="bold">2 người</label>
								</div>

								<div class="total">
									<label for="">Tổng giá</label>
									<h4>{{ $order ->price }}</h4>
								</div>
							</div>
						</div>
					</section>
				</div>

			</div>
		</form>
	</section>
	@endsection

@section('after_scripts')
	<!--build:js js/main.min.js -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/thanhtoan.js') }}"></script>
	<!-- endbuild -->
@endsection
</body>

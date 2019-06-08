@extends('front.layout.layout-front')
@section('title')
    <title>Cập nhật thông tin</title>
@endsection
@section('before_scripts')
	<!--build:css css/styles.min.css -->
	<link rel="stylesheet" href="{{ asset('assets/css/hoso.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/all.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
	<!-- endbuild -->
@endsection
</head>	
<body>
	<!-- Header -->
	@section('header')
		@include('front.layout.header-host')
	@endsection
	@section('content')
	<section class="host--content">
		<div class="container container-flex">
			<aside>
				<div class="info-profile">
					<img src="assets/images/nhatrang.png" alt="">

					<div class="name">
						<h3>{{ $user->name }}</h3>
						<p>{{ $user->email }}</p>
					</div>
				</div>
				<nav class="nav">
					<ul>
						<li><a href="{{-- {{ route('front.hotel.index', $user->hotel->id) }} --}}" class="active">Quản lý khách sạn</a></li>
						<li><a href="{{ route('show.user', $user->id) }}">Hồ sơ cá nhân</a></li>
						<li><a href="">Thay đổi mật khẩu</a></li>
						<li><a href="{{-- {{ route('logout') }} --}}">Đăng xuất</a></li>
					</ul>
				</nav>
			</aside>

			<article>
				<h1>Hồ sơ cá nhân</h1>
				<p class="mt-3 mb-5">Hoàn thành hồ sơ cá nhân để giúp đặt homestay nhanh chóng hơn</p>

				<form method="post" action="{{ route('update.user', $user->id) }}" role="form" enctype="multipart/form-data" >
					<div class="form-group d-flex">
						 {{ csrf_field() }}
							<label class="col-form-label col-md-2" for="tieude" class="col-form-label label bold">Avatar <span class="important">*</span></label>
			
							<div class="col-md-9 upload-file">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="avatar" name="cover" onchange="readURL(this)" required="true">
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
							<input type="text" class="form-control form-control-lg" value="{{ $user->name }}" name="name" placeholder="Họ và tên">
						</div>
					</div>

					<div class="form-group d-flex">
						<label for="" class="col-form-label col-md-2">Email <span class="important">*</span></label>

						<div class="col-9">
							{{ $user->email }}
							<span>Email sẽ được dùng để đăng nhập, nhận thông báo và đặt lại mật khẩu.</span>
						</div>
					</div>

					<div class="form-group d-flex">
						<label for="" class="col-form-label col-md-2">Số điện thoại <span class="important">*</span></label>

						<div class="col-9">
							<input type="text" class="form-control form-control-lg" name="phone" value="{{ $user->phone }}">
							<span>Số di động sẽ được dùng để đăng nhập và đặt lại mật khẩu.</span>
						</div>
						
					</div>

					<div class="form-group d-flex">
						<label for="" class="col-form-label col-md-2">Địa chỉ</label>

						<div class="col-9">
							<input type="text" class="form-control form-control-lg" name="address" value="{{ $user->address }}" placeholder="Nơi bạn sống">
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
							<input type="text" class="form-control form-control-lg" name ="serial_number" value="{{ $user->serial_number }}">
						</div>
					</div>
					<div class="button--control">
						<button class="btn submit">Cập nhật</button>
					</div>
				</form>
			</article>
		</div>
	</section>
	@endsection

@section('after_scripts')
	<!--build:js js/main.min.js -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/dangphongchu.js') }}"></script>
	<!-- endbuild -->
@endsection
</body>

@extends('front.layout.layout-front')
@section('title')
	<title>Danh sách phòng đặt</title>
@endsection
@section('before_scripts')
	<!--build:css css/styles.min.css -->
	<link rel="stylesheet" href="{{ asset('assets/css/danhsachphongdat.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/all.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
	<!-- endbuild -->
@endsection

<body>
	@section('header')
	<!-- Header -->
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
					<li><a href="{{ route('all.room', backpack_user()->hotels->first()->id) }}" class="active">Quản lý phòng</a></li>
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
					@foreach($orders as $order)
					<tr>
						<td>{{ $order->id }}</td>
						<td>{{ $order->hotel->name }}</td>
						<td>{{ $order->create_at }}</td>
						<td>{{ $order->create_at }}</td>
						<td>{{ $order->price }}</td>
						<td>Incomplete</td>
						<td><a class="btn">Chi tiết đặt phòng</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</article>		 

		</div>
	</section>
	@endsection
	
	@section('after_scripts')
	<!--build:js js/main.min.js -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- endbuild -->
	@endsection
</body>
</html>

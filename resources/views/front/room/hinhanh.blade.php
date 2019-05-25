@extends('front.layout.layout-front')
@section('title')
    <title>Hình ảnh phòng</title>
@endsection
@section('before_scripts')
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dangphongchu.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
@endsection
    <!-- endbuild -->
<body>

@section('header')
    @include('front.layout.header-host')
@endsection
@section('content')
   
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
          <div class="tab-pane container fade" id="hinhanh">
            <p class="font-weight-bold">Hãy thu hút người dùng bằng những bức ảnh thật đẹp ở căn hộ của bạn</p>

            <div class="d-flex form-group">
                <div class="image-primary">
                    
                </div>

                <div class="image-list">
                    
                </div>
            </div>
          </div>

        <div class="btn-control">
            <button class="btn">Tiếp</button>
            <button class="btn" disabled="">Lưu</button>
        </div>
    </section>
@endsection

    @section('after_scripts')
    <!--build:js js/main.min.js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/dangphongchu.js') }}"></script>
    <!-- endbuild -->
    @endsection
</body>
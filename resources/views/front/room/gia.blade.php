@extends('front.layout.layout-front')
@section('title')
    <title>Giá phòng</title>
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

        <div class="btn-control">
            <button class="btn">Tiếp</button>
            <button class="btn" disabled="">Lưu</button>
        </div>
    </section>
    @endsection
    <!-- Footer -->
    @section('after_scripts')
    <!--build:js js/main.min.js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/dangphongchu.js') }}"></script>
    <!-- endbuild -->
    @endsection
</body>

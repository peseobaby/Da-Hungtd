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
            <a class="nav-link " data-toggle="tab" href="">Mô tả</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="">Tiện ích</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="">Hình ảnh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="">Giá cả và chính sách</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <form method="POST" action="{{ route('price.room', $id) }}">
            @csrf
            <div class="tab-content">
              <div class="tab-pane container active" id="gia">
                <p class="font-weight-bold">Giá cả và các chính sách</p>

                <div class="form-group d-flex">
                    <label class="col-form-label" for="">Đơn vị tiền tệ</label>

                    <div class="col-md-3">
                            <span value="">Việt Nam Đồng</span>
                    </div>
                </div>

                <p class="font-weight-bold">Giá cơ bản</p>

                <div class="form-group d-flex twins">
                    <label class="col-form-label" for="gia1dem">Giá 1 đêm</label>

                    <div class="input d-flex">
                        <input type="number" name="price" class="form-control form-control-lg">
                        <label class="col-form-label" for="" class="col-auto">VNĐ / đêm</label>
                        <i>Giá đã bao gồm 15% hoa hồng cho gotravel. </i>
                    </div>
                </div>

                <p class="font-weight-bold sm-padding">Chính sách</p>
                <span class="md-padding">Giá cơ bản đã bao gồm 15$ hoa hồng cho gotravel , nếu bạn muốn đàm phán hoặc không hiểu rõ chính sách của chúng tôi , xin hãy liên hệ với Mr.Hưng qua số điện thoại : 0962642655</span>

            <div class="btn-control">
                <button class="btn submit" >Lưu</button>
            </div>
        </form>
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

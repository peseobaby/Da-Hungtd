@extends('front.layout.layout-front')
@section('title')
    <title>Thông tin khách sạn</title>
    <!--build:css css/styles.min.css -->
@endsection
@section('before_scripts')
    <link rel="stylesheet" href="{{ asset('assets/css/dangphongchu.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
@endsection

<body>

@section('header')
    @include('front.layout.header-host')
@endsection
    @section('content')

    <!-- Content -->
        <section class="host--content">
            <h2 class="title">Thông tin khách sạn</h2>
            <!-- Nav tabs -->

            @if($hotel == null)
                <p class="font-weight-bold">Bạn chưa đăng khách sạn nào vào hệ thống , hãy tạo mới khách sạn cho bạn</p>
                <a class="btn" href="{{ route('front.hotel.create') }}">Danh sách phòng của khách sạn</a>
            @else
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane container active" id="mota">

                <p class="font-weight-bold">Tiêu đề, tóm tắt và mô tả căn hộ sẽ được hiển thị công khai trên trang của bạn.</p>

                <div class="form-group d-flex">
                    <label class="col-form-label" for="loaicanho">Tên khách sạn</label>

                    <div class="input">
                        {{ $hotel->name }}
                    </div>
                </div>

                <div class="form-group d-flex">
                    <label class="col-form-label" for="tieude" class="col-form-label label bold">Ảnh đại diện<span class="important">*</span></label>

                    <div class="input input--width">
                        <img src="{{ asset('assets/images/hanoi.png') }}">
                    </div>
                </div>
                <div class="form-group d-flex">
                    <label class="col-form-label" for="loaicanho">Tỉnh</label>

                    <div class="input">
                        <label class="col-form-label" for="loaicanho">{{ $hotel->provide->name }}</label>
                    </div>
                </div>

                <div class="form-group d-flex">
                    <label class="col-form-label" for="loaicanho">Quận/Huyện</label>

                    <div class="input">
                             <label class="col-form-label" for="loaicanho">{{ $hotel->city->name }}</label>
                    </div>
                </div>
                <div class="btn-control">
                    <a href="{{ route('guest.in', $hotel->id) }}"><button class="btn" >Thông tin đơn đăt phòng</button>
                    <a href="{{ route('all.room', $hotel->id) }}"><button class="btn" >Danh sách phòng của khách sạn</button>
                </div>
              </div>
            @endif
        </section>
    @endsection

    @section('after_scripts')
        <!--build:js js/main.min.js -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/dangphongchu.js') }}"></script>
        <!-- endbuild -->
    @endsection
</body>

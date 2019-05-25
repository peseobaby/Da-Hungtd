@extends('front.layout.layout-front')
@section('title')
    <title>Mô tả căn phòng</title>
@endsection
@section('before_scripts')
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="'{{ asset('assets/css/dangphongchu.css') }}">
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
          <div class="tab-pane container fade" id="tienich">
            <p class="font-weight-bold">Thêm các tiện nghi để làm nổi bật căn hộ của bạn với khách hàng</p>
        <form method="post" action="{{ route('create.convenince') }}" role="form">
            <div class="form-group d-flex">
                @foreach($conveninces as $convenince)
                    <div class="d-flex">
                        <input type="radio" name="convenince" value="{{ $convenince->id }}"/> {{ $convenince->name }}<br/>
                    </div>
                @endforeach
            </div>
            <div class="btn-control">
                <button class="btn submit">Tiếp</button>
            </div>
        </form>
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

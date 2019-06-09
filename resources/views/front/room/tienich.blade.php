@extends('front.layout.layout-front')
@section('title')
    <title>Mô tả căn phòng</title>
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
            <a class="nav-link active" data-toggle="tab" href="">Tiện ích</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="">Hình ảnh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="">Giá cả và chính sách</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane container active">
            <p class="font-weight-bold">Thêm các tiện nghi để làm nổi bật căn hộ của bạn với khách hàng</p>
        <form method="post" action="{{ route('convenience.update', $id) }}" role="form">
            @csrf
            <div class="form-group d-flex row">
                @foreach($conveniences as $convenience)
                    <div class="d-flex col-md-2">
                        <input type="checkbox" name="convenince[]" value="{{ $convenience->id }}">
                        <label class="col-form-label" for="beboi" class="col-form-label">{{ $convenience->name }}</label>
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

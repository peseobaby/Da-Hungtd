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
    <!-- Content -->
    <section class="host--content">
        <h2 class="title">Đăng phòng</h2>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#mota">Mô tả</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tienich">Tiện ích</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#hinhanh">Hình ảnh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#gia">Giá cả và chính sách</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#xacthuc">Xác thực</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane container active" id="mota">
        <form method="post" action="{{ route('store.room') }}" role="form">
            @csrf
            <p class="font-weight-bold">Tiêu đề, tóm tắt và mô tả căn hộ sẽ được hiển thị công khai trên trang của bạn.</p>

            <div class="form-group d-flex">
                <label class="col-form-label" for="tieude" class="col-form-label label bold">Tên Phòng <span class="important">*</span></label>
                <div class="input">
                    <input type="text" name = "name" class="form-control form-control-lg">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="tieude" class="col-form-label label bold">Mô tả ngắn <span class="important">*</span></label>
                <div class="input">
                    <input type="text" name="description" class="form-control form-control-lg"></input>
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="tieude" class="col-form-label label bold">Chi tiết <span class="important">*</span></label>
                <div class="input">
                    <textarea class="form-control form-control-lg" rows="15"></textarea>
                </div>
            </div>

            <h3>Thông tin khác</h3>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Loại căn hộ</label>

                <div class="input">
                    <select name="type_id" class="form-control form-control-lg">
                        @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Diện tích <span class="important">*</span></label>

                <div class="input">
                    <input type="number" name = "area" class="form-control form-control-lg">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Số phòng ngủ</label>

                <div class="input">
                    <input type="number" name = "num_bed_room" class="form-control form-control-lg">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Số người</label>

                <div class="input">
                    <input type="number" name= "capacity" class="form-control form-control-lg">
                </div>
            </div>
          </div>
        <div class="btn-control">
            <button class="btn" type="submit">Tiếp</button>
            <button class="btn" disabled="">Lưu</button>
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
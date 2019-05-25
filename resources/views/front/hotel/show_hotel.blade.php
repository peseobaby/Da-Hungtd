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
                        {{ $hotel->cover }}
                    </div>

                <div class="form-group d-flex">
                    <label class="col-form-label" for="loaicanho">Tỉnh</label>

                    <div class="input">
                        <select name="" id="" class="form-control form-control-lg">
                            <option value="">Hà Nội</option>
                        </select>
                    </div>
                </div>

                <div class="form-group d-flex">
                    <label class="col-form-label" for="loaicanho">Quận/Huyện</label>

                    <div class="input">
                        <select name="" id="" class="form-control form-control-lg">
                            <option value="">Gia Lâm</option>
                        </select>
                    </div>
                </div>
                <div class="btn-control">
                    <button class="btn" href="{{ route('all.room') }}">Danh sách phòng của khách sạn</button>
                </div>
            </form>

              </div>
        </section>
    @endsection

    @section('after_scripts')
        <!--build:js js/main.min.js -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/dangphongchu.js') }}"></script>
        <!-- endbuild -->
    @endsection
</body>

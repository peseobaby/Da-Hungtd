@extends('front.layout.layout-front')
@section('title')
    <title>Tạo mới Khách sạn</title>
@endsection
@section('before_styles')
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="../assets/css/dangphongchu.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
    <!-- endbuild -->
@endsection

<body>
    @section('header')
        @include('front.layout.header-host')
    @endsection
    @section('content')

    <!-- Content -->
    <section class="host--content">
    <h2 class="title">Đăng thông tin khách sạn</h2>

        <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="mota">

        <p class="font-weight-bold">Tiêu đề, tóm tắt và mô tả căn hộ sẽ được hiển thị công khai trên trang của bạn.</p>
            <form method="post" action="{{ route('create.hotel') }}" role="form"  enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group d-flex">
                    <label class="col-form-label" for="loaicanho">Tên khách sạn</label>

                    <div class="input">
                        <input type="text" name="name" class="form-control form-control-lg">
                    </div>
                </div>

                <div class="form-group d-flex">
                    <label class="col-form-label" for="tieude" class="col-form-label label bold">Ảnh đại diện <span class="important">*</span></label>

                    <div class="input input--width">
                        <div class="custom-file ">
                          <input type="file" class="custom-file-input" name="cover" required="true" onchange="readURL(this)">
                          <label class="custom-file-label" for="avatar">Choose file</label> 
                        </div>

                        <ul>
                            <li>Chọn ảnh đại diện của bạn</li>
                            <li>Hãy chọn bức ảnh chụp rõ thông tin khách sạn của bạn.</li>
                         </ul>
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
                            <option value="">ed</option>
                        </select>
                    </div>
                </div>
                <div class="btn-control">
                    <button class="btn submit">Tạo mới</button>
                </div>
            </form>
        </div>
    </div>
    </section>
@endsection


    <!--build:js js/main.min.js -->
@section('after_scripts')
    <script src="../assets/js/dangphongchu.js"></script>
@endsection
    <!-- endbuild -->
</body>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Home Theme Front End</title>
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="assets/css/dangphongchu.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
    <!-- endbuild -->
</head>
<body>

@include('header')
        
    
    <!-- Content -->
    <div class="bg--nav">
        <nav class="nav__primary">
            <ul>
                <li><a href="" class="active">Bảng thông tin</a></li>
                <li><a href="">Lịch</a></li>
                <li><a href="">Đặt phòng</a></li>
                <li><a href="">Căn hộ của bạn</a></li>
                <li><a href="">Thanh toán</a></li>
            </ul>
        </nav>
    </div>
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
          <div class="tab-pane container active" id="mota">

            <p class="font-weight-bold">Tiêu đề, tóm tắt và mô tả căn hộ sẽ được hiển thị công khai trên trang của bạn.</p>
        <form method="post" action="{{ route('create.room') }}" role="form">

            <div class="form-group d-flex">
                <label class="col-form-label" for="tieude" class="col-form-label label bold">Tiêu đề <span class="important">*</span></label>
                <div class="input">
                    <input type="text" class="form-control form-control-lg" name="name">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="tieude" class="col-form-label label bold">Mô tả ngắn <span class="important">*</span></label>
                <div class="input">
                    <textarea class="form-control form-control-lg" rows="15"></textarea>
                </div>
            </div>

            <h3>Thông tin khác</h3>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Loại căn hộ</label>

                <div class="input">
                    <select name="type" class="form-control form-control-lg">
                        @foreach($types as $type)
                        <option value="{{ $type->name }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Số người</label>

                <div class="input">
                    <input type="number" name="capacity" class="form-control form-control-lg">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Số lượng phòng ngủ</label>

                <div class="input">
                    <input type="number" name="num_bed_room" class="form-control form-control-lg">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Diện tích</label>

                <div class="input">
                    <input type="number" name="area" class="form-control form-control-lg">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Giá tiền</label>

                <div class="input">
                    <input type="number" name="area" class="form-control form-control-lg">
                </div>
                <label class="col-form-label" for="" class="col-auto">$ / đêm</label>
            </div>

            {{-- <div class="form-group d-flex">
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
            </div> --}}
            <div class="btn-control">
                <button class="btn submit">Tiếp</button>
            </div>
        </form>

          </div>

        
    </section>

    <!-- Footer -->
    @include('layout.footer')


    <!--build:js js/main.min.js -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/dangphongchu.js"></script>
    <!-- endbuild -->
</body>
</html>

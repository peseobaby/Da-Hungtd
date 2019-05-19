<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Home Theme Front End</title>
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="../assets/css/dangphongchu.css">
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
                <li><a href="">Khách sạn của bạn</a></li>
                <li><a href="">Thanh toán</a></li>
            </ul>
        </nav>
    </div>
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

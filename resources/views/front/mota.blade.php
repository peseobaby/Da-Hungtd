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
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane container active" id="mota">

            <p class="font-weight-bold">Tiêu đề, tóm tắt và mô tả căn hộ sẽ được hiển thị công khai trên trang của bạn.</p>
            <div class="form-group d-flex">
                <label class="col-form-label" for="tieude" class="col-form-label label bold">Avatar <span class="important">*</span></label>

                <div class="input input--width">
                    <div class="custom-file ">
                      <input type="file" class="custom-file-input" id="avatar" onchange="readURL(this)">
                      <label class="custom-file-label" for="avatar">Choose file</label> 
                    </div>

                    <ul>
                        <li>Hãy chọn bức ảnh đẹp nhất để làm avatar</li>
                     </ul>
                </div>

                <div class="image-center">
                    <img src="" alt="" id="pre-avatar" class="hidden">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="tieude" class="col-form-label label bold">Tiêu đề <span class="important">*</span></label>
                <div class="input">
                    <input type="text" class="form-control form-control-lg">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="tieude" class="col-form-label label bold">Mô tả ngắn <span class="important">*</span></label>
                <div class="input">
                    <textarea class="form-control form-control-lg" rows="5"></textarea>
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
                    <select name="" id="" class="form-control form-control-lg">
                        <option value="">Homestays</option>
                    </select>
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Địa chỉ <span class="important">*</span></label>

                <div class="input">
                    <input type="text" class="form-control form-control-lg">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Số nhà</label>

                <div class="input">
                    <input type="text" class="form-control form-control-lg">
                </div>
            </div>

            <div class="form-group d-flex">
                <label class="col-form-label" for="loaicanho">Số người</label>

                <div class="input">
                    <input type="number" class="form-control form-control-lg">
                </div>
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

          </div>

        <div class="btn-control">
            <button class="btn">Tiếp</button>
            <button class="btn" disabled="">Lưu</button>
        </div>
    </section>

    <!-- Footer -->
    <footer>

        <section class="footer footer--content">
            <div class="page">
                <h5>Like Traveltrip để cập nhật những tin tức mới nhất.</h5>
            </div>

            <div class="about">
                <h5>Về chúng tôi</h5>

                <nav>
                    <ul>
                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="">Điều khoản hoạt động</a></li>
                        <li><a href="">Chính sách bản quyền</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                    </ul>
                </nav>
            </div>

            <div class="suport">
                <h5>Hỗ trợ</h5>

                <nav>
                    <ul>
                        <li><a href="">Câu hỏi thường gặp</a></li>
                        <li><a href="">Chính sách hủy</a></li>
                        <li><a href="">Hướng dẫn sử dụng</a></li>
                    </ul>
                </nav>
            </div>

            <div class="friend">
                <h5>Bạn bè liên kết</h5>

                <nav>
                    <ul>
                        <li><a href="">Luxstay</a></li>
                        <li><a href="">VNtrip</a></li>
                        <li><a href="">Agoda</a></li>
                    </ul>
                </nav>
            </div>
            
        </section>

        <section class="footer--bottom">
            <div class="footer--width">
                <div class="logo-social">
                    <img src="" alt="">

                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-google-plus-g"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-tumblr"></i>
                </div>

                <div class="copyright">
                    <h5>Copyright 2018 Travel trip | ALl rights reserved</h5>
                </div>
            </div>

        </section>
    </footer>


    <!--build:js js/main.min.js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/dangphongchu.js"></script>
    <!-- endbuild -->
</body>
</html>

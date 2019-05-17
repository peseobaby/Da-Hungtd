<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt phòng nhanh gọn, giá rẻ</title>
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="assets/css/dashbroad-host.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
    <!-- endbuild -->
</head>
<body>

   @include('header')
    <!-- Content -->
    <section class="container">
        <button class="btn create" href="{{ route('add.room') }}">Thêm căn hộ mới</button>
    </section>

    <section class="host--content">
        <div class="container d-flex">
            

            <article>
                <section class="homqua">
                    <div class="day">
                        <h1>Hôm qua</h1>

                        <div class="calender">
                            <input type="text" name="checkday" placeholder="Check phòng theo ngày" />
                        </div>
                    </div>

                    <div class="checker">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="{{ route('guest.in') }}">Khách nhận phòng</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="{{ route('guest.out') }}">Khách trả phòng</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="{{ route('guest.at') }}">Lưu trú qua đêm</a>
                          </li>
                        </ul>

                        <!-- Tab contents -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="khachnhan">
                            @foreach($users as $user)
                            <div class="item">
                                <div class="left">
                                    <div class="image">
                                        <img src="{{ $user->avatar }}" alt="">
                                    </div>

                                    <div class="detail">
                                        <a href=""><h1>{{ $user->name }}</h1></a>
                                        
                                        <div class="day-picker">
                                            <span>May 24 - May 25 &#8226; Requested </span>
                                        </div>

                                    </div>
                                </div>

                                <div class="right">
                                    <div class="end">
                                        <p>1 người &#8226; 1 ngày &#8226; <span class="price">{{ $room->price }}</span></p>

                                        <div class="button-control">
                                            <button class="btn btn-success" >Approve</button>

                                            <button class="btn btn-danger">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                          </div>
                        </div>
                    </div>  
                </section>
                <div class="dangcho">
                    <div class="day">
                        <h1>Yêu cầu đang chờ</h1>
                    </div>

                    <div class="checker">
                        <!-- Tab contents -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="khachnhan">
                            @foreach($users as $user)
                            <div class="item">
                                <div class="left">
                                    <div class="image">
                                        <img src="{{ $user->avatar }}" alt="">
                                    </div>

                                    <div class="detail">
                                        <a href=""><h1>{{ $user->name }}</h1></a>
                                        
                                        <div class="day-picker">
                                            <span>May 24 - May 25 &#8226; Requested </span>
                                        </div>

                                    </div>
                                </div>

                                <div class="right">
                                    <div class="end">
                                        <p>1 người &#8226; 1 ngày &#8226; <span class="price">{{ $room->price }}</span></p>

                                        <div class="button-control">
                                            <button class="btn btn-success" >Approve</button>

                                            <button class="btn btn-danger">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

            </article>

            <aside>
                <div class="total mb-4">
                    <h1>Thống kê</h1>

                    <div class="total--log">
                        <p class="log-detail">Tổng số đặt phòng tháng</p>

                        <span class="log-total">0</span>
                    </div>
                </div>

                <div class="message">
                    <h1>Tin nhắn</h1>

                    <div class="message--log">
                        <p class="log-detail">Không có tin nhắn nào</p>
                    </div>
                </div>
            </aside>
        </div>

    </section>

    <!-- Footer -->
    @include('footer')

    <!--build:js js/main.min.js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/daterangepicker.js"></script>
    <!-- endbuild -->
    <script>
        $(function() {
          $('input[name="checkday"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            locale: {
              format: 'M/DD/YYYY'
            }
          });
        });
    </script>

</body>
</html>

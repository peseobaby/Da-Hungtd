@extends('front.layout.layout-front')
@section('title')
    <title>Danh sách phòng đặt</title>
@endsection
@section('before_scripts')
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashbroad-host.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
    <!-- endbuild -->
</head>
<body>
    @section('header')
        @include('front.layout.header-host')
    @endsection
    @section('content')
    <!-- Content -->
    <section class="container">
        <button class="btn create" href="{{ route('add.room') }}">Thêm căn hộ mới</button>
    </section>

    <section class="host--content">
        <div class="container d-flex">
            

            <article>
                <section class="homqua">
                    <div class="day">
                        <h1>Hôm nay</h1>

                        <div class="calender">
                            <input type="text" name="checkday" placeholder="Check phòng theo ngày" />
                        </div>
                    </div>

                    <div class="checker">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                          <li class="nav-item">
                            <a class="nav-link active"  href="{{ route('guest.in', $id) }}">Khách nhận phòng</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link"  href="{{ route('guest.out', $id) }}">Khách trả phòng</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('guest.at', $id) }}">Lưu trú qua đêm</a>
                          </li>
                        </ul>

                        <!-- Tab contents -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="khachnhan">
                            @foreach($orders as $order)
                            <div class="item">
                                <div class="left">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/hanoi.png') }}" alt="">
                                    </div>

                                    <div class="detail">
                                        <a href=""><h1>{{ $order->user->name }}</h1></a>
                                        <a href=""><h1>{{ $order->room->name }}</h1></a>
                                        <div class="day-picker">
                                            <span>{{ $order->create_at }} Requested </span>
                                        </div>

                                    </div>
                                </div>

                                <div class="right">
                                    <div class="end">
                                        <p>Tổng giá &#8226; <span class="price">{{ $order->price }}</span></p>

                                        <div class="button-control">
                                            <a href="{{ route('accept.order', $order->id) }}"><button class="btn btn-success" >Approve</button></a>

                                            <a href="{{ route('destroy.order', $order->id) }}"><button class="btn btn-danger">Decline</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
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
                            @foreach($waits as $wait)
                            <div class="item">
                                <div class="left">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/hanoi.png') }}" alt="">
                                    </div>

                                    <div class="detail">
                                        <a href=""><h1>{{ $wait->user->name }}</h1></a>
                                        
                                        <div class="day-picker">
                                            <span>{{ $wait->create_at }} &#8226; Requested </span>
                                        </div>

                                    </div>
                                </div>

                                <div class="right">
                                    <div class="end">
                                        <p>1 người &#8226; 1 ngày &#8226; <span class="price">{{ $wait->price }}</span></p>

                                        <div class="button-control">
                                            <a href="{{ route('accept.order', $wait->id) }}"><button class="btn btn-success" >Approve</button></a>

                                            <a href="{{ route('destroy.order', $wait->id) }}"><button class="btn btn-danger">Decline</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
    @endsection

    @section('after_scripts')
    <!--build:js js/main.min.js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
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
    @endsection

</body>


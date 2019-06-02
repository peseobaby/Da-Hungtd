@extends('front.layout.layout-front')
@section('title')
    <title>Trang chủ</title>
@endsection
@section('before_scripts')
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider/css/ion.rangeSlider.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css') }}">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
@endsection
<body>

@section('header')
    @include('front.layout.header-primary')
@endsection

@section('content')
<section class="banner">
    <div class="search">
        <!-- Search Tab -->
        <nav class="search__nav">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="active" data-toggle="tab" href="#hotels">Hotels</a>
              </li>
              <li class="nav-item">
                <a data-toggle="tab" href="#homestay">Homestay</a>
              </li>
              <li class="nav-item">
                <a data-toggle="tab" href="#activity">Activity</a>
              </li>
            </ul>
        </nav>

        <!-- Search Form  -->
        <div class="info__nav">
            <div class="overley"></div>

            <div class="tab-content">
              <div class="tab-pane show active" id="hotels" role="tabpanel">Are you ready okay?</div>
              <div class="tab-pane fade" id="homestay" role="tabpanel">How to picked homestay?</div>
              <div class="tab-pane fade" id="activity" role="tabpanel">I don't know activity?</div>
            </div>

            <form class="form__search">
                <div class="form__item form__input">
                    <input type="text" class="form-control" name="query" placeholder="Chọn thành phố, địa điểm hoặc homestay">
                    <i class="fas fa-map-marker-alt"></i>
                </div>

                <div class="form__item form__pick-datime">
                    <input type="text" name="time" class="form-control" placeholder="Bắt đầu và kết thúc" value="">
                    <i class="far fa-calendar" id="daterange"></i>
                </div>

                <div class="form__item form__picked-people">
                    <input type="number" id="people" name="number" placeholder="Nhập số người" class="text-center">
                    <i class="far fa-users"></i>
                </div>

                <div class="form__button">
                    <button class="btn">
                        Search
                    </button>
                </div>
            </form>

            <div class="filter-more checkbox">
                <input type="checkbox" id="more">
                <label for="more">Tùy chọn khác</label>
                <div class="filter-nav">
                    <div class="filter-row">
                        <h4>Lọc theo: </h4>
                            <nav class="nav">
                                <ul>
                                    <li><a href="#" ><i class="fas fa-dollar-sign"></i> Giá homestay</a></li>
                                </ul>
                            </nav>

                            <div class="range-slider">
                              <input class="range-slider__range" type="range" name ="price" min="0" max="10000000">
                              <span class="range-slider__value">0 đ</span>
                            </div>
                    </div>
            </div>



            </div>
        </div>
    </div>

</section>

<!-- Content -->

<!-- Homestay post -->
<section class="featured">
    <h2>Featured Homestay Deals</h2>

    @foreach($rooms as $room)
    <div class="featured--post">
        <div class="owl-carousel owl-theme" id="homestays">
            <div class="post">
                <div class="post__detail item">
                    <div class="img__box">
                        <a href="">
                            <img src="assets/images/homestay-1.jpg" alt="">
                        </a>
                    </div>

                    <div class="flex-row">
                        <div class="detail-info">
                            <div class="title">
                                <a href="">
                                    <h4>{{$room->name}}</h4>
                                </a>
                                
                                <span class="price">{{$room->price}}<span> vnd / 1 đêm</span></span>
                            </div>

                            <div class="descripton">
                                <p class="location">{{-- {{$hotel->address->city->name}} / {{$hotel->address->provide->name}} --}}</p>
                                <p class="control">
                                    @foreach($conveniences as $convenience)
                                    {{ $convenience->name }} / 
                                    @endforeach
                                </p>
                            </div>

                            <div class="icon">
                                <i class="fas fa-dumbbell"></i>
                                <i class="far fa-swimmer"></i>
                                <i class="fas fa-coffee"></i>
                            </div>
                        </div>


                        <div class="detail-function">
                            <div class="button-control">
                                <a href="">View Details</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endforeach
</section>

<!-- Localtion -->
<section class="featured">
    <h2>Featured Location</h2>
    @foreach($provides as $provide)
    <div class="featured--location">
        <div class="grid grid-2-column">
            <div class="item">
                <a href="#">
                    <img src="assets/images/hanoi.png" alt="">

                    <div class="item-position">
                        <div class="middle">
                            <div class="place-name">
                                <h4>{{ $provide->name }}</h4>
                                <span>&nbsp;</span>
                            </div>

                            <div class="place-content">
                                <p class="info"><i class="far fa-search"></i>1000 homestay in {{ $provide->name }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</section>


<!-- News -->
<section class="featured">
    <h2>Featured Event</h2>
    @foreach($events as $event)
    <div class="featured--news">
        <div class="owl-carousel owl-theme" id="news">
            <div class="item odd">
                <div class="item--img">
                    <a href="#">
                        <img src="assets/images/homestay-2.jpg" alt="">
                    </a>
                </div>

                <div class="item--content">
                    <a href="">
                        <h3 class="title">{{ $event->title }}</h3>
                    </a>
                    

                    <p>{{ $event->slug }}</p>

                    <div class="item--button">
                        <a href="">Chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection

@section('after_scripts')
<!--build:js js/main.min.js -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- endbuild -->
@endsection
</body>

@extends('front.layout.layout-front')
@section('title')
    Trang chủ
@endsection
@section('before_scripts')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
@endsection

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
                        <a class="active" data-toggle="tab" href="#hotels">Rooms</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a data-toggle="tab" href="#homestay">Homestay</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a data-toggle="tab" href="#activity">Activity</a>--}}
{{--                    </li>--}}
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

                <form class="form__search" action="{{ route('show.search') }}" method="POST">
                    @csrf
                    <div class="form__item form__input">
                        <input type="text" class="form-control" name="query"
                               placeholder="Chọn thành phố, địa điểm, tiện nghi, tên phòng">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>

                    <div class="form__item form__pick-datime">
                        <input type="text" name="start_at" class="form-control" placeholder="Thời gian Bắt đầu" value="">
                        <i class="far fa-calendar" id="daterange"></i>
                    </div>

                    <div class="form__item form__pick-datime">
                        <input type="text" name="end_at" class="form-control" placeholder="Thời gian kết thúc" value="">
                        <i class="far fa-calendar" id="daterange"></i>
                    </div>

                    <div class="form__item form__picked-people"  style="width: 40%">
                        <input type="number" id="capacity" name="capacity" placeholder="Nhập số người" class="text-center">
                        <i class="far fa-users"></i>
                    </div>

                    <div class="form__button">
                        <button class="btn" type="submit">
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
                                    <li><a href="#"><i class="fas fa-dollar-sign"></i> Giá homestay</a></li>
                                </ul>
                            </nav>

                            <div class="range-slider">
                                <input class="range-slider__range" type="range" name="price" min="0" max="10000000">
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
        <div class="featured--post">
            <div class="owl-carousel owl-theme" id="homestays">
                @foreach($rooms as $room)
                    <div class="post">
                        <div class="post__detail item">
                            <div class="img__box">
                                <a href="{{ route('show.room', $room->id) }}">
                                    <img src="{{ asset(@$room->images->first()->url) }}" alt="">
                                </a>
                            </div>

                            <div class="flex-row">
                                <div class="detail-info">
                                    <div class="title">
                                        <a href="">
                                            <h4>{{$room->name}}</h4>
                                        </a>

                                        <span class="price">{{$room->price}}<span> $ </span></span>
                                    </div>

                                    <div class="descripton">
                                        <p class="location">{{-- {{$hotel->address->city->name}} / {{$hotel->address->provide->name}} --}}</p>
                                        <p class="control">
                                            @foreach($room->getAllConvenience() as $convenience)
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
                                        <a href="{{ route('show.room', $room->id) }}">View Details</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Localtion -->
    <section class="featured">
        <h2>Featured Location</h2>
        <div class="featured--location">
            <div class="row" style="width: 100%">
                @foreach($provides as $provide)
                    <div class="col-4">
                        <div class="item">
                            <a href="{{ route('show.search-province', $provide->id) }}">
                                <img src="{{ asset(@$provide->images->first()->url) }}" alt="">

                                <div class="item-position">
                                    <div class="middle">
                                        <div class="place-name">
                                            <h4>{{ $provide->name }}</h4>
                                            <span>&nbsp;</span>
                                        </div>

                                        <div class="place-content">
                                            <p class="info"><i class="far fa-search"></i>1000 homestay
                                                in {{ $provide->name }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- News -->
    <section class="featured">
        <h2>Featured Event</h2>
        <div class="featured--news">
            <div class="owl-carousel owl-theme" id="news">
                @foreach($events as $event)
                    <div class="item odd">
                        <div class="item--img">
                            <a href="#">
                                <img src="{{ asset(@$event->images->first()->url) }}" alt="">
                            </a>
                        </div>

                        <div class="item--content">
                            <a href="">
                                <h3 class="title">{{ $event->name }}</h3>
                            </a>
                            <p>{{ $event->discount }}</p>
                            <div class="item--button">
                                <a href="">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
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
    <script>
        $(function() {
            $('input[name="start_at"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                    format: 'DD-MM-YYYY'
                }
            });

            $('input[name="end_at"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                    format: 'DD-MM-YYYY'
                }
            });
        });
    </script>
    <!-- endbuild -->
@endsection

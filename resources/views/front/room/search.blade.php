@extends('front.layout.layout-front')
@section('title')
    Search result
@endsection
@section('before_scripts')

@endsection

@section('before_styles')
    <link rel="stylesheet" href="{{ asset('assets/css/search.css') }}">
@endsection

@section('header')
    @include('front.layout.header-primary')
@endsection

@section('content')
    <section class="sub--content">
        <div class="content--tree">
            <h3>Tìm kiếm</h3>

            <nav class="nav">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Tìm kiếm</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Banner -->
    <section class="banner">
        <div class="search">
            <!-- Search Form  -->
            <div class="info__nav">
                <div class="overley"></div>

                <div class="tab-content">
                    <div class="tab-pane show active" id="hotels" role="tabpanel">Rooms</div>
                </div>

                <form class="form__search" action="{{ route('show.search') }}" method="POST">
                    @csrf
                    <div class="form__item form__input">
                        <input type="text" class="form-control" name="query"
                               placeholder="Chọn thành phố, địa điểm">
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

{{--                <div class="filter-more checkbox">--}}
{{--                    <input type="checkbox" id="more" checked>--}}
{{--                    <label for="more">Tùy chọn khác</label>--}}
{{--                    <div class="filter-nav">--}}
{{--                        <div class="filter-row">--}}
{{--                            <h4>Lọc theo: </h4>--}}
{{--                            <nav class="nav">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#" ><i class="fas fa-dollar-sign"></i> Giá homestay</a></li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}

{{--                            <div class="range-slider">--}}
{{--                                <input class="range-slider__range" type="range" value="100" min="0" max="100000">--}}
{{--                                <span class="range-slider__value">0 đ</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

    <section class="content">
        <!-- Content-right  -->
        <aside>
            <!-- Homestays name search -->
            <ul>
                <li>
                    <input type="checkbox" class="nav--check">
                    <i class="nav-icon"></i>
                    <h3>Tìm kiếm theo tên</h3>

                    <div class="show">
                        <input type="text" class="form-control"><button type="submit"><i class="far fa-search"></i></button>
                    </div>
                </li>

                <li>
                    <input type="checkbox" class="nav--check">
                    <i class="nav-icon"></i>
                    <h3>Giảm giá</h3>

                    <div class="show">
                        <div class="offers">
                            <div class="item">
                                <input type="checkbox" id="offers-1">
                                <label for="offers-1">30% trở lên</label>
                            </div>

                            <div class="item">
                                <input type="checkbox" id="offers-2">
                                <label for="offers-2">50% trở lên</label>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <input type="checkbox" class="nav--check">
                    <i class="nav-icon"></i>
                    <h3>Giá</h3>

                    <div class="show">
                        <div class="prices">
                            <div class="item">
                                <div class="item__flex">
                                    <input type="checkbox" id="price-1">

                                    <label for="price-1">Upto - $79</label>
                                </div>


                                <label for="">69</label>
                            </div>

                            <div class="item">
                                <div class="item__flex">
                                    <input type="checkbox" id="price-2">

                                    <label for="price-2">$80 - $169</label>
                                </div>


                                <label for="">69</label>
                            </div>

                            <div class="item">
                                <div class="item__flex">
                                    <input type="checkbox" id="price-3">

                                    <label for="price-3">$70 - $269</label>
                                </div>


                                <label for="">69</label>
                            </div>

                            <div class="item">
                                <div class="item__flex">
                                    <input type="checkbox" id="price-4">

                                    <label for="price-4">$270 - $789</label>
                                </div>


                                <label for="">69</label>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <input type="checkbox" class="nav--check">
                    <i class="nav-icon"></i>
                    <h3>Đánh giá</h3>

                    <div class="show">
                        <div class="rating">
                            <div class="item">
                                <div class="item__start item__flex">
                                    <input type="checkbox" id="rate-1">
                                    <label for="rate-1">1 sao</label>
                                </div>

                                <div class="item__end item__flex">
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                            </div>

                            <div class="item">
                                <div class="item__flex">
                                    <input type="checkbox" id="rate-2">
                                    <label for="rate-2">2 sao</label>
                                </div>

                                <div class="item__flex">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>


                            <div class="item">
                                <div class="item__flex">
                                    <input type="checkbox" id="rate-3">
                                    <label for="rate-3">3 sao</label>
                                </div>

                                <div class="item__flex">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>


                            <div class="item">
                                <div class="item__flex">
                                    <input type="checkbox" id="rate-4">
                                    <label for="rate-4">4 sao</label>
                                </div>

                                <div class="item__flex">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>

                            <div class="item">
                                <div class="item__flex">
                                    <input type="checkbox" id="rate-5">
                                    <label for="rate-5">5 sao</label>
                                </div>

                                <div class="item__flex">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </aside>
        <article>
            <h1>Kết quả tìm kiếm Homestays</h1>
            <div class="featured--post">
                <!-- Post -->
                <div class="center--box">
                    @foreach($rooms as $room)
                        <div class="post">
                            <div class="post__detail item">
                                <div class="img__box">
                                    <a href="">
                                        <img src="{{ asset($room->images->first()->url) }}" alt="">
                                    </a>
                                </div>

                                <div class="flex-row">
                                    <div class="detail-info">
                                        <div class="title">
                                            <a href="">
                                                <h4>{{ $room->name }}</h4>
                                            </a>
                                            <div class="rating">
                                                @for($i = 0; $i < $room->average; $i++)
                                                    <i class="fas fa-star"></i>
                                                @endfor
                                            </div>
                                        </div>

                                        <div class="descripton">
                                            <p class="location">{{ @$room->hotel->address }}</p>
                                            <p class="control">{{ $room->capacity }} người / {{ $room->num_bed_room }} giường</p>
                                        </div>

                                        <div class="icon">
                                            <i class="fas fa-dumbbell"></i>
                                            <i class="far fa-swimmer"></i>
                                            <i class="fas fa-coffee"></i>
                                        </div>
                                    </div>


                                    <div class="detail-function">
                                        <div class="flex-end">
                                            <span class="price"> 1 đêm /<span> {{ $room->price }}</span></span>
                                        </div>

                                        <div class="button-control">
                                            <a href="{{ route('show.room', $room->id) }}"><button>View Details</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </article>
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
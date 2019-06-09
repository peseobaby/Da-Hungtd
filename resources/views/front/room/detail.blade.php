@extends('front.layout.layout-front')
@section('title')
    Mô tả căn phòng
@endsection
@section('before_scripts')
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dangphongchu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
@endsection

@section('header')
    @if (backpack_auth()->guest())
        @include('front.layout.header-primary')
    @else
        @include('front.layout.header-host')
    @endif
@endsection
@section('content')
    <section class="host--content" style="margin: 0">
        <div class="row"style="padding-top: 100px; padding-left: 100px">
            <!-- Tab panes -->
            <div class="col-md-4">
                @foreach($room->images as $image)
                    <img width="400" src="{{ asset($image->url) }}">
                @endforeach
            </div>
           <div class="col-md-8" style="padding-left: 100px">
                <div class="tab-content" style="padding-left: 120px">
                    <p style="font-weight: bold; font-size: 1.5em">Thông tin</p>
                    <p>Tiêu đề: <span>{{ $room->name }}</span></p>
                    <p>Mô tả ngắn: <span>{{ $room->description }}</span></p>
                    <h3>Thông tin khác</h3>

                    <div class="form-group d-flex">
                        <label class="col-form-label" for="loaicanho">Loại căn hộ</label>

                        <div class="input">
                            <p>{{ $room->type->name }}</p>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <label class="col-form-label" for="loaicanho">Số người</label>

                        <div class="input">
                            <p>{{ $room->capacity }}</p>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <label class="col-form-label" for="loaicanho">Số lượng phòng ngủ</label>

                        <div class="input">
                            <p>{{ $room->num_bed_room }}</p>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <label class="col-form-label" for="loaicanho">Diện tích</label>

                        <div class="input">
                            <p>{{ $room->area }}</p>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <label class="col-form-label" for="loaicanho">Giá tiền</label>

                        <div class="input">
                            <p>{{ $room->price }}<span>VND / đêm</span></p>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <label class="col-form-label" for="loaicanho">Tỉnh</label>

                        <div class="input">
                            <p>{{ @$room->hotel->province->name }}</p>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <label class="col-form-label" for="loaicanho">Quận/Huyện</label>

                        <div class="input">
                            <p>{{ @$room->hotel->city->name }}</p>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <label class="col-form-label" for="loaicanho">Đánh giá của khách hàng</label>
                        <div class="input">
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
        </div>
        </div>

    </section>
@endsection

@section('after_scripts')
    <!--build:js js/main.min.js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/dangphongchu.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
    <!-- endbuild -->
    <script>
        $(function() {
            $('input[name="create_at"]').daterangepicker({
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

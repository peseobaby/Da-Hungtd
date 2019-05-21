@extends('front.layout.layout-front')
@section('title')
    Tạo mới Khách sạn
@endsection
@section('before_styles')
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dangphongchu.css') }}">
    <!-- endbuild -->
@endsection

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
                <p class="font-weight-bold">Tiêu đề, tóm tắt và mô tả căn hộ sẽ được hiển thị công khai trên trang
                    của bạn.</p>
                <form method="post" action="{{ route('front.hotel.store') }}" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-form-label" for="loaicanho">Tên khách sạn<span class="important">*</span></label>

                        <div class="input">
                            <input type="text" name="name" class="form-control form-control-lg" required>
                        </div>
                        @if ($errors->has('name'))
                            <span class="error">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="tieude" class="col-form-label label bold">Ảnh đại diện
                            <span class="important">*</span>
                        </label>

                        <div class="input input--width">
                            <div class="custom-file ">
                                <input type="file" name="image" required>
                                {{--<label class="custom-file-label" for="avatar">Choose file<span class="important">*</span></label>--}}
                            </div>
                            @if ($errors->has('image'))
                                <span class="error">{{ $errors->first('image') }}</span>
                            @endif
                            <ul>
                                <li>Chọn ảnh đại diện của bạn</li>
                                <li>Hãy chọn bức ảnh chụp rõ thông tin khách sạn của bạn.</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Địa chỉ<span class="important">*</span></label>
                            <div class="input">
                                <input type="text" class="custom-file-input" style="opacity: 1" name="address" required>
                            </div>
                            @if ($errors->has('address'))
                                <span class="error">{{ $errors->first('address') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="loaicanho">Tỉnh<span class="important">*</span></label>

                            <div class="input">
                                <select name="province_id" id="" class="form-control form-control-lg">
                                    @foreach($provinces as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('province_id'))
                                <span class="error">{{ $errors->first('province_id') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="loaicanho">Quận/Huyện<span class="important">*</span></label>
                            <div class="input">
                                <select name="city_id" id="" class="form-control form-control-lg">
                                    @foreach($cities as $city)
                                        <option value="{{ $city['id'] }}">{{ $city['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('city_id'))
                                <span class="error">{{ $errors->first('city_id') }}</span>
                            @endif
                        </div>
                        <div class="btn-control" style="justify-content: center">
                            <button class="btn submit">Tạo mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection


@section('after_scripts')
    <script src="{{ asset('assets/js/dangphongchu.js') }}"></script>
@endsection

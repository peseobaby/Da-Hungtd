@extends('front.layout.layout-front')
@section('title')
    Tạo mới sự kiện
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
        <h2 class="title">Tạo sự kiện cho khách sạn </h2>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="mota">
                <p class="font-weight-bold">Tiêu đề sự kiện của bạn</p>
                <form method="post" action="{{ route('front.hotel.store') }}" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-form-label" for="loaicanho">Tên sự kiện<span class="important">*</span></label>

                        <div class="input">
                            <input type="text" name="name" class="form-control form-control-lg" required>
                        </div>
                        @if ($errors->has('name'))
                            <span class="error">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="tieude" class="col-form-label label bold">Discount
                            <span class="important">*</span>
                        </label>

                        <div class="input">
                            <input type="number" name="discount" class="form-control form-control-lg" required>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Thời gian bắt đầu <span class="important">*</span></label>
                            <div class="input">
                                <input type="text" class="custom-file-input" style="opacity: 1" name="start_at" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Thời gian kết thúc <span class="important">*</span></label>
                            <div class="input">
                                <input type="text" class="custom-file-input" style="opacity: 1" name="end_at" required>
                            </div>
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

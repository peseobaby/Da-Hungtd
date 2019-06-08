@extends('front.layout.layout-front')
@section('title')
    <title>Cập nhật thông tin</title>
@endsection
@section('before_scripts')
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/hoso.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
    <!-- endbuild -->
@endsection
</head>
<body>
    <!-- Header -->
    @section('header')
        @include('front.layout.header-host')
    @endsection
    @section('content')
    <section class="host--content">
        <div class="container container-flex">
            <aside>
                <div class="info-profile">
                    <img src="{{ asset('assets/images/nhatrang.png') }}" alt="">

                    <div class="name">
                        <h3>{{ $user->name }}</h3>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="{{ route('front.hotel.show', $user->id) }}">Quản lý phòng</a></li>
                        <li><a href="{{ route('show.user', $user->id) }}"  class="active">Hồ sơ cá nhân</a></li>
                        <li><a href="">Thay đổi mật khẩu</a></li>
                        <li><a href="{{-- {{ route('logout') }} --}}">Đăng xuất</a></li>
                    </ul>
                </nav>
            </aside>

            <article>
                <h1>Hồ sơ cá nhân</h1>
                    <div class="form-group d-flex">
                            <label class="col-form-label col-md-2" for="tieude" class="col-form-label label bold">Avatar <span class="important">*</span></label>
            
                            <div class="col-md-9 upload-file">
                                <img src="{{ asset('assets/images/hanoi.png') }}">
            
                            </div>
            
                            <div class="image-center">
                                <img src="" alt="" id="pre-avatar" class="hidden">
                            </div>
                        </div>
                    <div class="form-group d-flex">
                        <label for="" class="col-form-label col-md-2">Họ và tên <span class="important">*</span></label>

                        <div class="col-9">
                            {{ $user->name }}
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <label for="" class="col-form-label col-md-2">Email <span class="important">*</span></label>

                        <div class="col-9">
                            {{ $user->email }}
                            <p><span>Email sẽ được dùng để đăng nhập, nhận thông báo và đặt lại mật khẩu.</span></p>
                        </div>
                    </div>

                    <div class="form-group d-flex">
                        <label for="" class="col-form-label col-md-2">Số điện thoại <span class="important">*</span></label>

                        <div class="col-9">
                            {{ $user->phone }}
                            <p><span>Số di động sẽ được dùng để đăng nhập và đặt lại mật khẩu.</span></p>
                        </div>
                        
                    </div>

                    <div class="form-group d-flex">
                        <label for="" class="col-form-label col-md-2">Địa chỉ</label>

                        <div class="col-9">
                            {{ $user->address }}
                        </div>
                    </div>

                    

                    <div class="form-group d-flex">
                        <label for="" class="col-form-label col-md-2">CMND</label>

                        <div class="col-9">
                            {{ $user->serial_number}}
                        </div>
                    </div>
                    <div class="button--control">
                        <a class="btn" type="button" href="{{ route('edit.user', $user->id) }}">Cập nhật</a>
                    </div>
                </form>
            </article>
        </div>
    </section>
    @endsection

@section('after_scripts')
    <!--build:js js/main.min.js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/dangphongchu.js') }}"></script>
    <!-- endbuild -->
@endsection
</body>

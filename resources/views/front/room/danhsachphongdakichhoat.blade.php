@extends('front.layout.layout-front')
@section('title')
    <title>Danh sách phòng đã kích hoạt</title>
@endsection
@section('before_scripts')
    <link rel="stylesheet" href="{{ asset('assets/css/danhsachphongdang.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
    <!-- endbuild -->
@endsection
<body>
    @section('header')
        @include('front.layout.header-host')
    @endsection
    @section('content')
    <section class="host--content">
        <div class="container-center">
            <a href="{{ route('add.room') }}"><button class="btn create" >Thêm căn hộ mới</button></a>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="nav-item">
               <a class="nav-link" href="{{ route('all.room', 1) }}">Tất cả</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('unactive.room', 1) }}">Chưa duyệt</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('active.room', 1) }}">Đã duyệt</a>
              </li>

              <div class="sort">
                <select name="" id="" class="form-control form-control-lg">
                    <option value="">Order by</option>
                    <option value="">ID</option>
                </select>
              </div>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="actived">
                @foreach($rooms as $room)
                    <div class="item">
                        <div class="left">
                            <div class="image">
                                <img src="{{asset($room->images->first()->url) }}" alt="">
                            </div>
                            <div class="details">
                                <h2>{{ $room->name }}<span class="active">{{ $room->active }}</span></h2>
                                <p>Cập nhật lần cuối ngày 30-05-2019</p>

                                <div class="crud">
                                    <a href=""><button class="btn" href="{{ route('edit.room', $room->id) }}">Cập nhật</button></a>
                                    <a href=""><button class="btn" href="{{-- {{ route('show.room') }} --}}">Xem</button></a>
                                    <a href=""><button class="btn" href="{{-- {{ route('delete.room') }} --}}">Xóa</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="right">
                            <div class="end">
                                <p><span>{{$room->price}}</span> / ngày</p>
                                <p>Số khách tối đa: {{$room->capacity}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

              </div>
            </div>
        
    </section>
    @endsection

        <!-- Footer -->
    @section('after_scripts')
    <!--build:js js/main.min.js -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @endsection
</body>
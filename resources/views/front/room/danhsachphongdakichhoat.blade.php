<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Home Theme Front End</title>
    <!--build:css css/styles.min.css -->
    <link rel="stylesheet" href="assets/css/danhsachphongdang.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
    <!-- endbuild -->
</head>
<body>
    <!-- Header -->
    @include('header')
    
    <section class="host--content">
        <div class="container-center">
            <button class="btn create" href="{{ route('add.room') }}">Thêm căn hộ mới</button>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="{{ route('all.room') }}">Tất cả</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="{{ route('unactive.room') }}">Chưa duyệt</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="{{ route('active.room') }}">Đã duyệt</a>
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
                                <img src="{{ $room->image->image }}" alt="">
                            </div>
                            <div class="details">
                                <h2>{{ $room->name }}<span class="active">{{ $room->active }}</span></h2>
                                <p>Cập nhật lần cuối ngày 30-05-2019</p>

                                <div class="crud">
                                    <a href=""><button class="btn" href="{{ route('update.room') }}">Cập nhật</button></a>
                                    <a href=""><button class="btn" href="{{ route('show.room') }}">Xem</button></a>
                                    <a href=""><button class="btn" href="{{ route('delete.room') }}">Xóa</button></a>
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

        <!-- Footer -->
    @include('footer');

    <!--build:js js/main.min.js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- endbuild -->
</body>
</html>

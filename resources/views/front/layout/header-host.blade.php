<header class="header--host">
    <div class="container host--nav">
        <div class="logo">
            <h1>Travel<span>trip</span></h1>
        </div>

        <div class="nav__top">
            <ul>
                <li><img src="{{ asset('assets/images/hanoi.png') }}" alt=""> {{ backpack_auth()->user()->name }} <i class="far fa-angle-down"></i>
                    <ul>
                        <li><a href="{{ route('show.user', backpack_auth()->user()->id ) }}">Profile</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

    <div class="bg--nav">
        <nav class="nav__primary">
            <ul>
                <li><a href="" class="active">Bảng thông tin</a></li>
                <li><a href="{{route('front.hotel.search') }}">Tìm kiếm</a></li>
                <li><a href="">Đặt phòng</a></li>
                @if(!backpack_user()->hotels->first())
                    <li><a href="{{ route('front.hotel.create') }}">Đăng khách sạn của bạn</a></li>
                @else
                    <li><a href="{{ route('front.hotel.show', backpack_user()->hotels->first()->id) }}">khách sạn của bạn</a></li>
                    <li><a href="{{ route('show.order', backpack_user()->hotels->first()->id) }}">Danh sách đơn đặt phòng của khách sạn</a></li>
                @endif
                <li><a href="{{ route('show.user', backpack_user()->id) }}">Thông tin cá nhân</a></li>
                
            </ul>
        </nav>
    </div>
</header>

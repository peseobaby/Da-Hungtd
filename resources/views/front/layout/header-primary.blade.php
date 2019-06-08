<!-- Header -->
<header class="header--primary">
    <div class="nav--top">
        <nav class="top--content">
            <div class="nav--top-icon">
                <i class="far fa-phone"></i>
                <span>123 456 7890 123</span>
            </div>
            <ul>
                @if (backpack_auth()->check())
                    <a href="{{ route('backpack.account.info') }}">{{ backpack_auth()->user()->name }}</a>
                @endif
                @if (backpack_auth()->guest())
                    <li>
                        <a href="{{ route('front.auth.login') }}">{{ trans('backpack::base.login') }}</a>
                    </li>
                    <li><a href="{{ route('front.auth.register') }}">{{ trans('backpack::base.register') }}</a></li>
                @else
                <!-- Topbar. Contains the right part -->
                    <li><a href="{{ route('front.auth.logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a></li>
                @endif
            </ul>
        </nav>
    </div>
    <nav class="nav--primary">
        <div class="logo">
            <h1>Go<span>travel</span></h1>
        </div>

        <!-- Nav mobile -->
        <label class="hidden" for="mobileNav">
            <div class="nav--mobile">
                <div class="icon-nav">
                    <span class="mobile-icon"></span>
                    <span class="mobile-icon"></span>
                    <span class="mobile-icon"></span>
                </div>
            </div>
        </label>

        <input type="checkbox" class="nav--check" id="mobileNav">

        <label class="nav--overley" for="mobileNav"></label>

        <label for="mobileNav" class="close--button">
            <i class="far fa-times"></i>
        </label>

        <ul>
            <li><a href="#" class="active--primary">Trang chủ</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Hướng dẫn</a></li>
            <li><a href="#">Chính sách</a></li>
            <li><a href="#">Liên hệ</a></li>
        </ul>
    </nav>
</header>

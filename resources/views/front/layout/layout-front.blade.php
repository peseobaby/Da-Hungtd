<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('front.layout.head')
</head>
<body>

@yield('header')

<!-- Main content -->
@yield('content')
<!-- /.content -->


@yield('before_scripts')
@stack('before_scripts')

@yield('content')
@include('front.layout.footer')

@yield('after_scripts')
@stack('after_scripts')

</body>
</html>

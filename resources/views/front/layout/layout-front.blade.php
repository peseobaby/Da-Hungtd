<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('front.layout.head')
</head>
<body>
@if (Session::has('message'))
    <div class="alert alert-error" style="position: absolute; width: 100px; height: 50px;
    background: #39c049; color: #ffffff; font-size: 1.2em" id="message_hide">{{ \Session::get('message') }}</div>
 @endif
@yield('header')

@yield('before_scripts')
@stack('before_scripts')

@yield('content')
@include('front.layout.footer')

@yield('after_scripts')
@stack('after_scripts')

</body>
</html>

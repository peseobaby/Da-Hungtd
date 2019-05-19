<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
    @yield('title')
</title>
@yield('before_styles')
@stack('before_styles')
<!--build:css css/styles.min.css -->
<link rel="stylesheet" href="{{ asset('assets/css/owl/owl-carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ion-rangeSlider/css/ion-rangeSlider.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/all.min.css') }}/">
<link rel="stylesheet" href="{{ asset('assets/css/ion-rangeSlider/css/ion-rangeSlider-skinFlat.css') }}">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;subset=vietnamese" rel="stylesheet">
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
@yield('after_styles')
@stack('after_styles')
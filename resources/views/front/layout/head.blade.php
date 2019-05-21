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
<style>
    .bg--nav {
        height: 50px;
    }
    .error{
        color: red;
    }
    #message_hide {
        -moz-animation: message_cssAnimation 0s ease-in 2s forwards;
        /* Firefox */
        -webkit-animation: message_cssAnimation 0s ease-in 2s forwards;
        /* Safari and Chrome */
        -o-animation: message_cssAnimation 0s ease-in 2s forwards;
        /* Opera */
        animation: message_cssAnimation 0s ease-in 2s forwards;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }
    @keyframes message_cssAnimation {
        to {
            /*width:0;*/
            /*height:0;*/
            /*overflow:hidden;*/
            visibility:hidden;


        }
    }
    @-webkit-keyframes message_cssAnimation {
        to {
            /*width:0;*/
            /*height:0;*/
            visibility:hidden;

        }
    }
</style>
@yield('after_styles')
@stack('after_styles')
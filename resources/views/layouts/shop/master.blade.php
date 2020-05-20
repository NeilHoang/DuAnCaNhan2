<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- Basic page needs
    ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flower Shop</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <meta name="description" content="">--}}
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <!-- font awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

{{--    <link rel="shortcut icon" type="image/x-icon"--}}
{{--          href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">--}}
{{--    <link rel="mask-icon" type=""--}}
{{--          href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg"--}}
{{--          color="#111">--}}
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <!-- carousel Theme CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.my_theme.css')}}">
    <!-- carousel transitions CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
    <!-- nivo slider slider css -->
    <link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Price jquery-ui  -->
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <!-- fancy-box theme -->
    <link rel="stylesheet" href="{{asset('fancy-box/jquery.fancybox.css')}}">
    <!-- normalizer -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!-- main -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- modernizr JS -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
@include('layouts.shop.header')


@include('layouts.shop.menu')
@yield('content')

@include('layouts.shop.footer')
<!-- jquery JS -->
<script src="{{asset('js/vendor/jquery-1.11.3.min.js')}}"></script>
<!-- bootstrap JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Mobile menu JS -->
<script src="{{'js/jquery.meanmenu.js'}}"></script>
<!-- jquery.easing js -->
<script src="{{asset('js/jquery.easing.1.3.min.js')}}"></script>
<!-- knob circle js -->
<script src="{{asset('js/jquery.knob.js')}}"></script>
<!-- fancybox JS -->
<script src="{{asset('fancy-box/jquery.fancybox.pack.js')}}"></script>
<!-- price slider JS  -->
<script src="{{asset('js/price-slider.js')}}"></script>
<!-- nivo slider JS -->
<script src="{{asset('js/jquery.nivo.slider.pack.js')}}"></script>
<!-- wow JS -->
<script src="{{asset('js/wow.js')}}"></script>
<!-- nivo-plugin JS -->
<script src="{{asset('js/nivo-plugin.js')}}"></script>
<!-- scrollUp JS -->
<script src="{{asset('js/jquery.scrollUp.js')}}"></script>
<!-- carousel JS -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- plugins JS -->
<script src="{{asset('js/plugins.js')}}"></script>
<!-- main JS  -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('js/my.js')}}"></script>



</body>
</html>

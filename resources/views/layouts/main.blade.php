<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Apexa - Business Consulting HTML Template</title>
    <script src="{{url('assets/js/vendor/color-modes.js')}}"></script>
    <meta name="description" content="GROWTH HUB - CONSULTANT AGENCY" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/odometer.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
</head>
<body>
<!--Preloader-->
<div id="preloader">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="loader-icon"><img src="{{asset('assets/img/logo/preloader.png')}}" alt="Preloader" /></div>
        </div>
    </div>
</div>
<!--Preloader-end -->
<!-- Scroll-top -->
<button class="scroll__top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->
<!-- header-area -->

@include('components.header')
<!-- header-area-end -->
<!-- main-area -->
<main class="fix">
    <!-- slider-area -->
@yield('content')
    <!-- blog-post-area-end -->
</main>
<!-- main-area-end -->
<!-- footer-area -->
@include('components.footer')
<!-- footer-area-end -->
<!-- JS here -->
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.odometer.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/gsap.js')}}"></script>
<script src="{{asset('assets/js/ScrollTrigger.js')}}"></script>
<script src="{{asset('assets/js/SplitText.js')}}"></script>
<script src="{{asset('assets/js/gsap-animation.js')}}"></script>
<script src="{{asset('assets/js/jquery.parallaxScroll.min.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.js')}}"></script>
<script src="{{asset('assets/js/ajax-form.js')}}"></script>
<script src="{{asset('assets/js/wow.min.j')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>

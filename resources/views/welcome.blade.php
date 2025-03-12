
@extends('layouts.main')







@section('content')



    @include('components.home_components.slider')
    <!-- slider-area-end -->
    <!-- features-area -->
    @include('components.home_components.features')
    <!-- features-area-end -->
    <!-- about-area -->
    @include('components.home_components.about')
    <!-- about-area-end -->
    <!-- services-area -->
    @include('components.home_components.services')
    <!-- services-area-end -->
    <!-- choose-area -->
    @include('components.home_components.choose')
    <!-- choose-area-two -->
    <!-- counter-area -->
    @include('components.home_components.counter')
    <!-- counter-area-end -->
    <!-- request-area -->
{{--    @include('components.home_components.request')--}}
    <!-- request-area-end -->
    <!-- project-area -->
{{--    @include('components.home_components.project')--}}
    <!-- project-area-end -->
    <!-- marquee-area -->
{{--    @include('components.home_components.marquee')--}}
    <!-- marquee-area-end -->
    <!-- team-area -->
    @include('components.home_components.team')
    <!-- team-area-end -->
    <!-- testimonial-area -->
    @include('components.home_components.testimonial')
    <!-- testimonial-area-end -->
    <!-- brand-area -->
    @include('components.home_components.brand')
    <!-- brand-area-end -->
    <!-- blog-post-area -->
    @include('components.home_components.blog')

@endsection

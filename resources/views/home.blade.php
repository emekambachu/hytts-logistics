@extends('layout')

@section('title')
    Home
@endsection

@section('content')
    <div class="wrapper">
        <!-- ========== Slider Parallax ========== -->
        <header class="main-slider  has-horizontal p-relative w-100 h-100-v dsn-header-animation">
            <div class="content-slider p-relative w-100 h-100 over-hidden v-dark-head">
                <div class="bg-container  dsn-hero-parallax-img p-relative w-100 h-100">
                    <div class="slide-inner h-100">
                        <div class="swiper-wrapper">
                            <div class="slide-item swiper-slide over-hidden">
                                <div class="image-bg cover-bg w-100 h-100 " data-overlay="2"
                                     data-swiper-parallax="50%" data-swiper-parallax-scale="1.1">
                                    <img class="cover-bg-img"
                                         src="{{ asset('/images/slider/slider1.jpg') }}"
                                         data-dsn-src="{{ asset('/images/slider/slider1.jpg') }}" alt="">
                                </div>
                                <div class="slide-content p-absolute ">
                                    <div class="content p-relative">
                                        <div class="metas d-inline-block mb-20">
                                            <a href="{{ url('/about') }}">
                                                <span>About us</span>
                                            </a>
                                            <a href="{{ url('/reservation') }}">
                                                <span>Reservation</span>
                                            </a>
                                        </div>
                                        <div class="d-block"></div>
                                        <h1 class="title user-no-selection d-inline-block ">
                                            <a href="" class="effect-ajax"
                                               data-dsn-ajax="slider">HYTTS LUXURY DESTINATIONS</a>
                                        </h1>
                                        <hr class="mt-20" />
                                        <p class="max-w570 mt-20 description">
                                            Where Is Your Next Adventure?</p>
                                    </div>
                                </div>

                            </div>

                            <div class="slide-item swiper-slide over-hidden">
                                <div class="image-bg cover-bg w-100 h-100" data-overlay="3"
                                     data-swiper-parallax="50%" data-swiper-parallax-scale="1.1">
                                    <img class="cover-bg-img"
                                         src="{{ asset('/images/slider/slider2.jpg') }}"
                                         data-dsn-src="{{ asset('/images/slider/slider2.jpg') }}" alt="">
                                </div>
                                <div class="slide-content p-absolute  ">
                                    <div class="content p-relative">
                                        <div class="metas d-inline-block mb-20">
                                            <a href="{{ url('/about') }}">
                                                <span>About us</span>
                                            </a>
                                            <a href="{{ url('/reservation') }}">
                                                <span>Reservation</span>
                                            </a>
                                        </div>
                                        <div class="d-block"></div>
                                        <h1 class="title user-no-selection d-inline-block ">
                                            <a href="" class="effect-ajax"
                                               data-dsn-ajax="slider">HYTTS LUXURY DESTINATIONS</a>
                                        </h1>
                                        <hr class="mt-20" />
                                        <p class="max-w570 mt-20 description">
                                            Where Is Your Next Adventure?</p>
                                    </div>
                                </div>

                            </div>

                            <div class="slide-item swiper-slide over-hidden">
                                <div class="image-bg cover-bg w-100 h-100 " data-overlay="6"
                                     data-swiper-parallax="50%" data-swiper-parallax-scale="1.1">
                                    <img class="cover-bg-img" src="{{ asset('/images/slider/slider3.jpg') }}"
                                         data-dsn-src="{{ asset('/images/slider/slider3.jpg') }}" alt="">
                                </div>
                                <div class="slide-content p-absolute  ">
                                    <div class="content p-relative">
                                        <div class="metas d-inline-block mb-20">
                                            <a href="{{ url('/about') }}">
                                                <span>About us</span>
                                            </a>
                                            <a href="{{ url('/reservation') }}">
                                                <span>Reservation</span>
                                            </a>
                                        </div>
                                        <div class="d-block"></div>
                                        <h1 class="title user-no-selection d-inline-block ">
                                            <a href="" class="effect-ajax"
                                               data-dsn-ajax="slider">HYTTS LUXURY DESTINATIONS</a>
                                        </h1>
                                        <hr class="mt-20" />
                                        <p class="max-w570 mt-20 description">
                                            Where Is Your Next Adventure?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dsn-slider-content p-absolute h-100 w-100 ">
                    <div class="dsn-container d-flex align-items-end "></div>
                </div>
            </div>
            <div
                class="control-nav dsn-load-animate p-absolute w-100 d-flex justify-content-end  dsn-container v-dark-head">
                <div class="prev-container">
                    <div class="container-inner">
                        <div class="triangle"></div>
                        <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round"
                               stroke-miterlimit="10">
                                <circle cx="12" cy="12" r="10.5"></circle>
                            </g>
                        </svg>
                    </div>
                </div>

                <div class="slider-counter d-flex align-items-center">
                    <span class="slider-current-index">01</span>
                    <span class="slider-counter-delimiter"></span>
                    <span class="slider-total-index">05</span>
                </div>

                <div class="next-container">
                    <div class="container-inner">
                        <div class="triangle"></div>
                        <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24">
                            <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round"
                               stroke-miterlimit="10">
                                <circle cx="12" cy="12" r="10.5"></circle>
                            </g>
                        </svg>
                    </div>
                </div>

            </div>
        </header>
        <!-- ========== End Slider Parallax ========== -->

        <!-- ========== About Section ========== -->
        <section class="about-section p-relative section-margin " data-dsn-title="How We Are"
                 data-dsn-animate-multi data-dsn-animate="section">
            <div class="container">
                <div class="row fill-right-container">
                    <div class="col-lg-6">
                        <div class="box-info pt-60 pb-60">
                            <div class="title-move z-index-1 " data-dsn-grid="move-section"
                                 data-dsn-move="-70" data-dsn-duration="100%" data-dsn-opacity="1.2"
                                 data-dsn-responsive="tablet">
                                <h2 class="section-title mb-30 dsn-text-shadow text-transform-upper">
                                    Who We are</h2>
                            </div>
                            <h6 class="mt-80 pb-30 mb-30 border-bottom title-block">
                                HYTTS Logistics Ltd is an exclusive travel company, offering luxurious holidays at unbeatable prices.
                            </h6>
                            <p class="max-w570 dsn-up mb-10 ">
                                We are a renowned travel management company which over the years has been dedicated equally to provide best quality service to individual and group travelers for both leisure and business clients. Every staff is flexible for fulfilling customer’s requirements while being determined to uphold the commitment.
                            </p>

                            <div class="box-awards d-grid grid-md-2  mt-30">
                                <div class="box-awards-item has-border dsn-up ">
                                    <h5 class="number background-section p-10">
                                        <span class="has-animate-number title">6</span>
                                        <span class="sm-title-block">Business
                                                        <br> partner</span>
                                    </h5>
                                </div>

                                <div class="box-awards-item has-border dsn-up">
                                    <h5 class="number background-section p-10">
                                        <span class="has-animate-number title">19</span>
                                        <span class="sm-title-block">SUTISFIED <br> CUSTOMERS</span>
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="background-mask p-20 p-absolute h-100 w-100">
                            <div class="line line-top"></div>
                            <div class="line line-bottom"></div>
                            <div class="line line-left"></div>
                            <div class="line line-right"></div>

                            <div class="img-box h-100">
                                <div class="img-container h-100 before-z-index" data-dsn-grid="move-up"
                                     data-overlay="3">
                                    <img class="cover-bg-img"
                                         src="{{ asset('/images/intro.jpg') }}"
                                         data-dsn-src="{{ asset('/images/intro.jpg') }}" alt="">
                                </div>
                            </div>

                            <div
                                class="box-awards-item has-border big-number p-absolute left-0 bottom-0 ml-40 mb-40 dsn-up v-dark-head">
                                <h5 class="number  p-10">
                                    <span class="has-animate-number title">10</span>
                                    <span class="sm-title-block d-block">
                                                    YEARS OF <br /> EXPERIENCE
                                                </span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- ========== End About Section ========== -->


        <!-- ========== Service Section ========== -->
        <section class="services with-line with-number p-relative section-margin dsn-col"
                 data-dsn-title="Our Services">
            <div class="container mb-70 d-flex text-center flex-column align-items-center">
                <h2 class="section-title title-cap">
                    Our Services
                </h2>
            </div>

            <div class="container">
                <div class=" grid dsn-isotope dsn-col">
                    <div
                        class="col-md-6 col-lg-4 dsn-col-lg-3 dsn-col-md-2 dsn-col-sm-1 services-item grid-item dsn-up">
                        <div class="services-item-inner">
                            <div class="line line-top"></div>
                            <div class="line line-bottom"></div>
                            <div class="line line-left"></div>
                            <div class="line line-right"></div>

                            <div class="services-content background-section">
                                <div class="icon">
                                    <i class="fa fa-plane theme-color fa-4x"></i>
                                </div>
                                <div class="service-description">
                                    <h4 class="title-block mb-15">International and local flight ticketing</h4>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div
                        class="col-md-6 col-lg-4 dsn-col-lg-3 dsn-col-md-2 dsn-col-sm-1 services-item grid-item dsn-up">
                        <div class="services-item-inner">
                            <div class="line line-top"></div>
                            <div class="line line-bottom"></div>
                            <div class="line line-left"></div>
                            <div class="line line-right"></div>

                            <div class="services-content background-section">
                                <div class="icon">
                                    <i class="fa fa-plane-arrival fa-4x theme-color"></i>
                                </div>
                                <div class="service-description">
                                    <h4 class="title-block mb-15">Organise corporate, local and international conferences</h4>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div
                        class="col-md-6 col-lg-4 dsn-col-lg-3 dsn-col-md-2 dsn-col-sm-1 services-item grid-item dsn-up">
                        <div class="services-item-inner">
                            <div class="line line-top"></div>
                            <div class="line line-bottom"></div>
                            <div class="line line-left"></div>
                            <div class="line line-right"></div>

                            <div class="services-content background-section">
                                <div class="icon">
                                    <i class="fa fa-hotel fa-4x theme-color"></i>
                                </div>
                                <div class="service-description">
                                    <h4 class="title-block mb-15">Hotel Reservations</h4>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div
                        class="col-md-6 col-lg-4 dsn-col-lg-3 dsn-col-md-2 dsn-col-sm-1 services-item grid-item dsn-up">
                        <div class="services-item-inner">
                            <div class="line line-top"></div>
                            <div class="line line-bottom"></div>
                            <div class="line line-left"></div>
                            <div class="line line-right"></div>

                            <div class="services-content background-section">
                                <div class="icon">
                                    <i class="fa fa-map-location fa-4x theme-color"></i>
                                </div>
                                <div class="service-description">
                                    <h4 class="title-block mb-15">Travel advice and trip planning</h4>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div
                        class="col-md-6 col-lg-4 dsn-col-lg-3 dsn-col-md-2 dsn-col-sm-1 services-item grid-item dsn-up">
                        <div class="services-item-inner">
                            <div class="line line-top"></div>
                            <div class="line line-bottom"></div>
                            <div class="line line-left"></div>
                            <div class="line line-right"></div>

                            <div class="services-content background-section">
                                <div class="icon">
                                    <i class="fa fa-earth-americas fa-4x theme-color"></i>
                                </div>
                                <div class="service-description">
                                    <h4 class="title-block mb-15">Visa Processing</h4>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div
                        class="col-md-6 col-lg-4 dsn-col-lg-3 dsn-col-md-2 dsn-col-sm-1 services-item grid-item dsn-up">
                        <div class="services-item-inner">
                            <div class="line line-top"></div>
                            <div class="line line-bottom"></div>
                            <div class="line line-left"></div>
                            <div class="line line-right"></div>

                            <div class="services-content background-section">
                                <div class="icon">
                                    <i class="fa fa-plane-circle-check fa-4x theme-color"></i>
                                </div>
                                <div class="service-description">
                                    <h4 class="title-block mb-15">Flight Charter</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-md-6 col-lg-4 dsn-col-lg-3 dsn-col-md-2 dsn-col-sm-1 services-item grid-item dsn-up">
                        <div class="services-item-inner">
                            <div class="line line-top"></div>
                            <div class="line line-bottom"></div>
                            <div class="line line-left"></div>
                            <div class="line line-right"></div>

                            <div class="services-content background-section">
                                <div class="icon">
                                    <i class="fa fa-car-on fa-4x theme-color"></i>
                                </div>
                                <div class="service-description">
                                    <h4 class="title-block mb-15">Car hire and road travel logistics</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ========== End Service Section ========== -->

        <!-- ========== Work Section ========== -->
        <section class="work-section work-no-scale not-filter p-relative dsn-swiper over-hidden v-dark-head"
                 data-dsn-title="our Work"
                 data-dsn-option='{"slidesPerView":3,"autoplay":true,"centeredSlides":false}'>

            <div class="container mb-70 d-flex text-center flex-column align-items-center">
                <h2 class="section-title title-cap">
                    Our Services
                </h2>
            </div>

            <div class="swiper-container" data-swiper-autoplay="5000">
                <div class="swiper-wrapper">

                    <div class="work-item  swiper-slide over-hidden">
                        <div class="box-img p-relative over-hidden" data-overlay="6">
                            <img class="cover-bg-img"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 data-dsn-src="assets/img/project/project1/1.jpg" alt="">
                        </div>

                        <div class="box-content">
                            <h4 class="sec-title">
                                <a class="effect-ajax" data-dsn-ajax="work"
                                   href="javascript:void(0);">International and local flight ticketing</a></h4>
                        </div>
                    </div>

                    <div class="work-item  swiper-slide over-hidden">
                        <div class="box-img p-relative over-hidden" data-overlay="6">
                            <img class="cover-bg-img"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 data-dsn-src="assets/img/project/project2/1.jpg" alt="">
                        </div>

                        <div class="box-content">
                            <h4 class="sec-title">
                                <a class="effect-ajax" data-dsn-ajax="work"
                                   href="javascript:void(0);">
                                    Organise corporate, local and international conferences</a></h4>
                        </div>
                    </div>

                    <div class="work-item  swiper-slide over-hidden">
                        <div class="box-img p-relative over-hidden" data-overlay="2">
                            <img class="cover-bg-img"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 data-dsn-src="assets/img/project/project4/1.jpg" alt="">
                        </div>

                        <div class="box-content">
                            <h4 class="sec-title">
                                <a class="effect-ajax" data-dsn-ajax="work" href="">
                                    Hotel Reservations</a>
                            </h4>
                        </div>
                    </div>

                    <div class="work-item  swiper-slide over-hidden">
                        <div class="box-img p-relative over-hidden" data-overlay="6">
                            <img class="cover-bg-img"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 data-dsn-src="assets/img/project/project3/1.jpg" alt="">
                        </div>

                        <div class="box-content">
                            <h4 class="sec-title">
                                <a class="effect-ajax" data-dsn-ajax="work" href="">
                                    Travel advice and trip planning</a>
                            </h4>
                        </div>
                    </div>

                    <div class="work-item  swiper-slide over-hidden">
                        <div class="box-img p-relative over-hidden" data-overlay="4">
                            <img class="cover-bg-img"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 data-dsn-src="assets/img/project/project6/1.jpg" alt="">
                        </div>

                        <div class="box-content">
                            <h4 class="sec-title">
                                <a class="effect-ajax" data-dsn-ajax="work"
                                   href="">Visa Processing</a></h4>
                        </div>
                    </div>

                    <div class="work-item swiper-slide over-hidden">
                        <div class="box-img p-relative over-hidden" data-overlay="5">
                            <img class="cover-bg-img"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 data-dsn-src="assets/img/project/project5/1.jpg" alt="">
                        </div>

                        <div class="box-content">
                            <h4 class="sec-title">
                                <a class="effect-ajax" data-dsn-ajax="work"
                                   href="">Flight Charter</a></h4>
                        </div>
                    </div>

                    <div class="work-item swiper-slide over-hidden">
                        <div class="box-img p-relative over-hidden" data-overlay="5">
                            <img class="cover-bg-img"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 data-dsn-src="assets/img/project/project5/1.jpg" alt="">
                        </div>

                        <div class="box-content">
                            <h4 class="sec-title">
                                <a class="effect-ajax" data-dsn-ajax="work"
                                   href="">Car hire and road travel logistics</a></h4>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- ========== End Work Section ========== -->


        <!-- ========== testimonial Section ========== -->
    {{--                <section class="testimonials testimonials-half section-margin" data-dsn-title="testimonials">--}}
    {{--                    <div class="container">--}}
    {{--                        <div class="testimonials-box box-padding p-relative w-100 background-section">--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col-lg-4 ">--}}
    {{--                                    <div class="text-left">--}}
    {{--                                        <h2 class="section-title" data-dsn-grid="move-section"--}}
    {{--                                            data-dsn-move="-60"--}}
    {{--                                            data-dsn-duration="100%" data-dsn-opacity="1"--}}
    {{--                                            data-dsn-responsive="tablet">Feedback from our clients.</h2>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="col-lg-8">--}}
    {{--                                    <div class="testimonials-inner p-relative text-left dsn-swiper "--}}
    {{--                                         data-dsn-controller=".testimonial-content"--}}
    {{--                                         data-dsn-option='{"slidesPerView":2,"spaceBetween":50,"centeredSlides":false }'>--}}
    {{--                                        <div class="testimonial-nav">--}}
    {{--                                            <div class="testimonial-nav-inner">--}}
    {{--                                                <div class="swiper-container">--}}
    {{--                                                    <div class="swiper-wrapper">--}}
    {{--                                                        <div class="swiper-slide d-flex align-items-center">--}}
    {{--                                                            <div class="box-img mr-15"--}}
    {{--                                                                 data-swiper-parallax-scale="0.7">--}}
    {{--                                                                <img  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="assets/img/team/2.jpg" alt="">--}}
    {{--                                                            </div>--}}
    {{--                                                            <div class="box-text" data-swiper-parallax="30%"--}}
    {{--                                                                 data-swiper-parallax-opacity="0">--}}
    {{--                                                                <h4 class="title-block mb-10">HellstarWorks</h4>--}}
    {{--                                                                <h5 class="sm-title-block">Envato Customer</h5>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                        <div class="swiper-slide d-flex align-items-center">--}}
    {{--                                                            <div class="box-img mr-15"--}}
    {{--                                                                 data-swiper-parallax-scale="0.7">--}}
    {{--                                                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="assets/img/team/1.jpg" alt="">--}}
    {{--                                                            </div>--}}
    {{--                                                            <div class="box-text" data-swiper-parallax="30%"--}}
    {{--                                                                 data-swiper-parallax-opacity="0">--}}
    {{--                                                                <h4 class="title-block mb-10">lindamiku</h4>--}}
    {{--                                                                <h5 class="sm-title-block">Marketing Manager</h5>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}

    {{--                                                        <div class="swiper-slide d-flex align-items-center">--}}
    {{--                                                            <div class="box-img mr-15"--}}
    {{--                                                                 data-swiper-parallax-scale="0.7">--}}
    {{--                                                                <img src="{{ asset('/assets/img/team/3.jpg') }}"--}}
    {{--                                                                     data-dsn-src="{{ asset('/assets/img/team/3.jpg') }}" alt="">--}}
    {{--                                                            </div>--}}
    {{--                                                            <div class="box-text" data-swiper-parallax="30%"--}}
    {{--                                                                 data-swiper-parallax-opacity="0">--}}
    {{--                                                                <h4 class="title-block mb-10">makrandpatne</h4>--}}
    {{--                                                                <h5 class="sm-title-block">Web Designer</h5>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}

    {{--                                                        <div class="swiper-slide d-flex align-items-center">--}}
    {{--                                                            <div class="box-img mr-15"--}}
    {{--                                                                 data-swiper-parallax-scale="0.7">--}}
    {{--                                                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="assets/img/team/3.jpg" alt="">--}}
    {{--                                                            </div>--}}
    {{--                                                            <div class="box-text" data-swiper-parallax="30%"--}}
    {{--                                                                 data-swiper-parallax-opacity="0">--}}
    {{--                                                                <h4 class="title-block mb-10">MTLGraphic</h4>--}}
    {{--                                                                <h5 class="sm-title-block">Graphic Design</h5>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}

    {{--                                                    </div>--}}
    {{--                                                </div>--}}

    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="testimonial-content ">--}}
    {{--                                            <div class="swiper-container">--}}
    {{--                                                <div class="swiper-wrapper">--}}
    {{--                                                    <div class="swiper-slide">--}}
    {{--                                                        <p>"The designer is just amazing! Very good quality and--}}
    {{--                                                            taste.--}}
    {{--                                                            This template is incredible beautiful. The overall--}}
    {{--                                                            impression--}}
    {{--                                                            is more than good.The support cannot be better. I wish--}}
    {{--                                                            the--}}
    {{--                                                            team all success!"</p>--}}
    {{--                                                    </div>--}}

    {{--                                                    <div class="swiper-slide">--}}
    {{--                                                        <p>"First of all, I really enjoyed setting this up. What a--}}
    {{--                                                            great--}}
    {{--                                                            layout and design. The support is fast and high quality.--}}
    {{--                                                            They--}}
    {{--                                                            really made an effort to make sure I got the help I--}}
    {{--                                                            needed.--}}
    {{--                                                            keep in mind that it is not only a great design, but--}}
    {{--                                                            also it--}}
    {{--                                                            is easy to change it up with little effort. Great Job!"--}}
    {{--                                                        </p>--}}
    {{--                                                    </div>--}}

    {{--                                                    <div class="swiper-slide">--}}
    {{--                                                        <p>"This theme is awesome and the designer is very helpful.--}}
    {{--                                                            I--}}
    {{--                                                            had a few questions before purchase. He/She helped me--}}
    {{--                                                            with--}}
    {{--                                                            all the doubts. Also, they provide quick support. Thank--}}
    {{--                                                            you--}}
    {{--                                                            so much for a beautiful theme"</p>--}}
    {{--                                                    </div>--}}

    {{--                                                    <div class="swiper-slide">--}}
    {{--                                                        <p>"Basically im using this theme as a base for my new--}}
    {{--                                                            website--}}
    {{--                                                            and i couldnt be happier. Ran into some bumps but the--}}
    {{--                                                            team--}}
    {{--                                                            who developed this theme was there to help me with any--}}
    {{--                                                            problems. Very slick nice ajax portfolio theme"</p>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}

    {{--                                        <div--}}
    {{--                                            class="dsn-pagination mt-30 dsn-container d-flex justify-content-between">--}}
    {{--                                            <div class="swiper-next">--}}
    {{--                                                <div class="next-container">--}}
    {{--                                                    <div class="container-inner">--}}
    {{--                                                        <div class="triangle"></div>--}}
    {{--                                                        <svg class="circle" xmlns="http://www.w3.org/2000/svg"--}}
    {{--                                                             width="24" height="24" viewBox="0 0 24 24">--}}
    {{--                                                            <g class="circle-wrap" fill="none" stroke-width="1"--}}
    {{--                                                               stroke-linejoin="round" stroke-miterlimit="10">--}}
    {{--                                                                <circle cx="12" cy="12" r="10.5"></circle>--}}
    {{--                                                            </g>--}}
    {{--                                                        </svg>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="swiper-pagination"></div>--}}
    {{--                                            <div class="swiper-prev">--}}
    {{--                                                <div class="prev-container">--}}
    {{--                                                    <div class="container-inner">--}}
    {{--                                                        <div class="triangle"></div>--}}
    {{--                                                        <svg class="circle" xmlns="http://www.w3.org/2000/svg"--}}
    {{--                                                             viewBox="0 0 24 24">--}}
    {{--                                                            <g class="circle-wrap" fill="none" stroke-width="1"--}}
    {{--                                                               stroke-linejoin="round" stroke-miterlimit="10">--}}
    {{--                                                                <circle cx="12" cy="12" r="10.5"></circle>--}}
    {{--                                                            </g>--}}
    {{--                                                        </svg>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </section>--}}
    <!-- ========== End testimonial Section ========== -->


        <!-- ========== blog Section ========== -->
        <section class="our-blog section-margin p-relative dsn-swiper" data-dsn-animate="section"
                 data-dsn-option='{"slidesPerView":1.5  }' data-dsn-title="Lasts post">
            <div class="container mb-70 d-flex text-center flex-column align-items-center">
                <h2 class="section-title  title-cap">
                    Latest posts
                </h2>
            </div>

            <div class="dsn-container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide blog-classic-item">
                            <div class=" blog-item p-relative d-flex align-items-center h-100 w-100"
                                 data-swiper-parallax-scale="0.85">
                                <div class="box-meta">
                                    <div class="entry-date">
                                        <span class="author">Dsn Grid</span>
                                        <a href="#">March , 17th 2020</a>
                                    </div>
                                </div>

                                <div class="box-img over-hidden">
                                    <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                         data-dsn-src="assets/img/blog/1.jpg" alt="">
                                </div>
                                <div class="box-content p-relative">

                                    <div class="box-content-body">
                                        <div class="metas">
                                            <span class="mb-5">Lifestyle</span>
                                        </div>
                                        <h4 class="title-block mb-20 ">
                                            <a href="#">Extreme Athleticism Is the New Midlife Crisis</a>
                                        </h4>
                                        <p>Whoever said “It’s not about the destination. It’s the journey”
                                            never
                                            flew on a long ...</p>
                                        <a href="#" class="link-vist p-relative mt-20">

                                            <span class="link-vist-text">Load More</span>

                                            <div class="link-vist-arrow">
                                                <svg viewBox="0 0 80 80">
                                                    <polyline points="19.89 15.25 64.03 15.25 64.03 59.33">
                                                    </polyline>
                                                    <line x1="64.03" y1="15.25" x2="14.03" y2="65.18">
                                                    </line>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide blog-classic-item">
                            <div class=" blog-item p-relative d-flex align-items-center h-100 w-100"
                                 data-swiper-parallax-scale="0.85">
                                <div class="box-meta">
                                    <div class="entry-date">
                                        <span class="author">Dsn Grid</span>
                                        <a href="#">March , 17th 2020</a>
                                    </div>
                                </div>

                                <div class="box-img over-hidden">
                                    <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                         data-dsn-src="assets/img/blog/2.jpg" alt="">
                                </div>
                                <div class="box-content p-relative">

                                    <div class="box-content-body">
                                        <div class="metas">
                                            <span class="mb-5">Travel</span>
                                        </div>
                                        <h4 class="title-block mb-20">
                                            <a href="#">The Day I Lost My Child in Charles de Gaulle
                                                Airport</a>
                                        </h4>
                                        <p>Whoever said “It’s not about the destination. It’s the journey”
                                            never
                                            flew on a long ...</p>
                                        <a href="#" class="link-vist p-relative mt-20">

                                            <span class="link-vist-text">Load More</span>

                                            <div class="link-vist-arrow">
                                                <svg viewBox="0 0 80 80">
                                                    <polyline points="19.89 15.25 64.03 15.25 64.03 59.33">
                                                    </polyline>
                                                    <line x1="64.03" y1="15.25" x2="14.03" y2="65.18">
                                                    </line>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide blog-classic-item">
                            <div class=" blog-item p-relative d-flex align-items-center h-100 w-100"
                                 data-swiper-parallax-scale="0.85">
                                <div class="box-meta">
                                    <div class="entry-date">
                                        <span class="author">Dsn Grid</span>
                                        <a href="#">March , 17th 2020</a>
                                    </div>
                                </div>

                                <div class="box-img over-hidden">
                                    <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                         data-dsn-src="assets/img/blog/3.jpg" alt="">
                                </div>
                                <div class="box-content p-relative">

                                    <div class="box-content-body">
                                        <div class="metas">
                                            <span class="mb-5">Health</span>
                                        </div>
                                        <h4 class="title-block mb-20">
                                            <a href="#">Relationships Aren’t Easy, But They’re Worth It</a>
                                        </h4>
                                        <p>Whoever said “It’s not about the destination. It’s the journey”
                                            never
                                            flew on a long ...</p>
                                        <a href="#" class="link-vist p-relative mt-20">

                                            <span class="link-vist-text">Load More</span>

                                            <div class="link-vist-arrow">
                                                <svg viewBox="0 0 80 80">
                                                    <polyline points="19.89 15.25 64.03 15.25 64.03 59.33">
                                                    </polyline>
                                                    <line x1="64.03" y1="15.25" x2="14.03" y2="65.18">
                                                    </line>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="dsn-pagination mt-30 dsn-container d-flex justify-content-between">
                        <div class="swiper-next">
                            <div class="next-container">
                                <div class="container-inner">
                                    <div class="triangle"></div>
                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24">
                                        <g class="circle-wrap" fill="none" stroke-width="1"
                                           stroke-linejoin="round" stroke-miterlimit="10">
                                            <circle cx="12" cy="12" r="10.5"></circle>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-prev">
                            <div class="prev-container">
                                <div class="container-inner">
                                    <div class="triangle"></div>
                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24">
                                        <g class="circle-wrap" fill="none" stroke-width="1"
                                           stroke-linejoin="round" stroke-miterlimit="10">
                                            <circle cx="12" cy="12" r="10.5"></circle>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ========== End blog Section ========== -->

        <!-- ========== End brand-client Section ========== -->
        <section class="brand-client section-margin" data-dsn-animate="section"
                 data-dsn-title="our clients">

            <div class="container mb-70 d-flex text-center flex-column  align-items-center">
                <p class="sub-heading line-shap line-shap-before mb-15">
                            <span class="line-bg-right">
                                Our clients
                            </span>
                </p>
                <h2 class="section-title  title-cap">
                    Your success, our <br />reputation
                </h2>

            </div>
            <div class="container">
                <div class="wrapper-client dsn-up">
                    <div class="logo-box">
                        <div class="logo-box-inner">
                            <img src="{{ asset('/images/clients/1.png') }}"
                                 data-dsn-src="{{ asset('/images/clients/1.png') }}" alt="">
                        </div>
                    </div>

                    <div class="logo-box">
                        <div class="logo-box-inner">
                            <img src="{{ asset('/images/clients/2.png') }}"
                                 data-dsn-src="{{ asset('/images/clients/2.png') }}" alt="">
                        </div>
                    </div>

                    <div class="logo-box">
                        <div class="logo-box-inner">
                            <img src="{{ asset('/images/clients/3.png') }}"
                                 data-dsn-src="{{ asset('/images/clients/3.png') }}" alt="">
                        </div>
                    </div>

                    <div class="logo-box">
                        <div class="logo-box-inner">
                            <img src="{{ asset('/images/clients/4.png') }}"
                                 data-dsn-src="{{ asset('/images/clients/4.png') }}" alt="">
                        </div>
                    </div>

                    <div class="logo-box">
                        <div class="logo-box-inner">
                            <img src="{{ asset('/images/clients/5.png') }}"
                                 data-dsn-src="{{ asset('/images/clients/5.png') }}" alt="">
                        </div>
                    </div>

                    <div class="logo-box">
                        <div class="logo-box-inner">
                            <img src="{{ asset('/images/clients/6.png') }}"
                                 data-dsn-src="{{ asset('/images/clients/6.png') }}" alt="">
                        </div>
                    </div>

                    <div class="logo-box">
                        <div class="logo-box-inner">
                            <img src="{{ asset('/images/clients/7.png') }}"
                                 data-dsn-src="{{ asset('/images/clients/7.png') }}" alt="">
                        </div>
                    </div>

                    <div class="logo-box">
                        <div class="logo-box-inner">
                            <img src="{{ asset('/images/clients/8.png') }}"
                                 data-dsn-src="{{ asset('/images/clients/8.png') }}" alt="">
                        </div>
                    </div>

                    <div class="logo-box">
                        <div class="logo-box-inner">
                            <img src="{{ asset('/images/clients/9.jpg') }}"
                                 data-dsn-src="{{ asset('/images/clients/9.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="logo-box">
                        <div class="logo-box-inner">
                            <img src="{{ asset('/images/clients/10.jpg') }}"
                                 data-dsn-src="{{ asset('/images/clients/10.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="logo-box">
                        <div class="logo-box-inner">
                            <img src="{{ asset('/images/clients/11.jpg') }}"
                                 data-dsn-src="{{ asset('/images/clients/11.jpg') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ========== End brand-client Section ========== -->

        <!-- ==========  next page  ========== -->
        <section class="next-page p-relative section-padding border-top background-section">
            <div class="bg-circle-dotted"></div>
            <div class="bg-circle-dotted bg-circle-dotted-right"></div>
            <div class="container">
                <div class="c-wapp d-flex justify-content-between">
                    <div class="d-flex flex-column">
                        <p class="sub-heading line-shap line-shap-after ">
                                        <span class="line-bg-left">
                                            Book now
                                        </span>
                        </p>
                        <h2 class="section-title max-w750 mt-15">
                            Send us a reservation request and we will call you
                        </h2>
                    </div>

                    <div class="button-box d-flex justify-content-end align-items-center">
                        <div>
                            <a href="{{ url('/reservation') }}" class="mt-30 effect-ajax dsn-button p-relative">
                                <span class="dsn-border-rdu "></span>Reservation
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ========== End next page ========== -->

    </div>
@endsection

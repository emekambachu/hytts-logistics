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
                                 src="{{ asset('/images/services/1.jpg') }}"
                                 data-dsn-src="{{ asset('/images/services/1.jpg') }}" alt="">
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
                                 src="{{ asset('/images/services/2.jpg') }}"
                                 data-dsn-src="{{ asset('/images/services/2.jpg') }}" alt="">
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
                                 src="{{ asset('/images/services/3.jpg') }}"
                                 data-dsn-src="{{ asset('/images/services/3.jpg') }}" alt="">
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
                                 src="{{ asset('/images/services/4.jpg') }}"
                                 data-dsn-src="{{ asset('/images/services/4.jpg') }}" alt="">
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
                                 src="{{ asset('/images/services/5.jpg') }}"
                                 data-dsn-src="{{ asset('/images/services/5.jpg') }}" alt="">
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
                                 src="{{ asset('/images/slider/slider3.jpg') }}"
                                 data-dsn-src="{{ asset('/images/slider/slider3.jpg') }}" alt="">
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
                                 src="{{ asset('/images/services/7.jpg') }}"
                                 data-dsn-src="{{ asset('/images/services/7.jpg') }}" alt="">
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
                                <div class="box-img over-hidden">
                                    <img class="cover-bg-img" src="{{ asset('/images/blog/1.jpg') }}"
                                         data-dsn-src="{{ asset('/images/blog/1.jpg') }}" alt="">
                                </div>
                                <div class="box-content p-relative">

                                    <div class="box-content-body">
                                        <div class="metas">
                                            <span class="mb-5">Lifestyle</span>
                                        </div>
                                        <h4 class="title-block mb-20">
                                            <a href="#">Visa-free Countries for Nigerian Passport Holders</a>
                                        </h4>
                                        <p>No Visa, No Hassles, because you too can fly with your international passport, round trip ticket, proof of the reason for travel and sufficient funds. below is the list of countries to visit in this category which some are limited to the duration given upon entrance by the Immigration authorities.</p>
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
                                <div class="box-img over-hidden">
                                    <img class="cover-bg-img" src="{{ asset('/images/blog/2.jpg') }}"
                                         data-dsn-src="{{ asset('/images/blog/2.jpg') }}" alt="">
                                </div>
                                <div class="box-content p-relative">
                                    <div class="box-content-body">
                                        <div class="metas">
                                            <span class="mb-5">Travel</span>
                                        </div>
                                        <h4 class="title-block mb-20">
                                            <a href="#">Live Border-less: But in safety and awareness</a>
                                        </h4>
                                        <p>Traveling could be really fun but there are a lot to look out for from your Visa, Flight ticket, Accommodation, Reason for travel , Departure airport and Arrival Airport</p>
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

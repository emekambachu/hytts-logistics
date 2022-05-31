@extends('layout')

@section('title')
    Services
@endsection

@section('content')
    <div class="wrapper">

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

    </div>
@endsection

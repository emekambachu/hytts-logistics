@extends('layout')

@section('title')
    Services
@endsection

@section('content')
    <div class="wrapper">

        <!-- ========== Work Section ========== -->
        <section class="work-section p-relative section-margin dsn-swiper over-hidden"
                 data-dsn-title="our Portfolio" data-dsn-option='{"slidesPerView":1.5,"spaceBetween":50}'>
            <div class="container mb-70 d-flex text-center flex-column align-items-center">

                <p class="sub-heading line-shap line-shap-before mb-15">
                        <span class="line-bg-right">
                            Our team of experts source mouth watering special offers from private islands to award winning, secluded beaches, our collection is irresistible.
                        </span>

                </p>
                <h2 class="section-title  title-cap">
                    Our services
                </h2>

            </div>

{{--            <div class="swiper-container">--}}
{{--                <div class="swiper-wrapper v-dark-head">--}}

{{--                    <div class="swiper-slide over-hidden work-item">--}}
{{--                        <div class="box-img p-relative over-hidden before-z-index" data-overlay="5"--}}
{{--                             data-swiper-parallax-scale="0.85">--}}
{{--                            <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="--}}
{{--                                 data-dsn-src="assets/img/project/project5/1.jpg" alt="">--}}
{{--                        </div>--}}

{{--                        <div class="box-content" data-swiper-parallax-opacity="0">--}}
{{--                            <div class="metas d-inline-block mb-15">--}}
{{--                                <span>Photography</span> <span> car</span>--}}
{{--                            </div>--}}
{{--                            <h4 class="sec-title">--}}
{{--                                <a class="effect-ajax" data-dsn-ajax="work" href="project5.html">--}}
{{--                                    Small Silver Car--}}
{{--                                </a>--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide over-hidden work-item">--}}
{{--                        <div class="box-img p-relative over-hidden before-z-index" data-overlay="6"--}}
{{--                             data-swiper-parallax-scale="0.85">--}}
{{--                            <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="--}}
{{--                                 data-dsn-src="assets/img/project/project3/1.jpg" alt="">--}}
{{--                        </div>--}}

{{--                        <div class="box-content" data-swiper-parallax-opacity="0">--}}
{{--                            <div class="metas d-inline-block mb-15">--}}
{{--                                <span>induction</span>--}}
{{--                            </div>--}}
{{--                            <h4 class="sec-title">--}}
{{--                                <a class="effect-ajax" data-dsn-ajax="work" href="project3.html">--}}
{{--                                    Huggl Power Pack</a>--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide over-hidden work-item">--}}
{{--                        <div class="box-img p-relative over-hidden before-z-index" data-overlay="4"--}}
{{--                             data-swiper-parallax-scale="0.85">--}}
{{--                            <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="--}}
{{--                                 data-dsn-src="assets/img/project/project6/1.jpg" alt="">--}}
{{--                        </div>--}}

{{--                        <div class="box-content" data-swiper-parallax-opacity="0">--}}
{{--                            <div class="metas d-inline-block mb-15">--}}
{{--                                <span>Photography</span>--}}
{{--                            </div>--}}
{{--                            <h4 class="sec-title">--}}
{{--                                <a class="effect-ajax" data-dsn-ajax="work"--}}
{{--                                   href="">Lengshuikeng</a>--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide over-hidden work-item">--}}
{{--                        <div class="box-img p-relative over-hidden before-z-index" data-overlay="6"--}}
{{--                             data-swiper-parallax-scale="0.85">--}}
{{--                            <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="--}}
{{--                                 data-dsn-src="assets/img/project/project1/1.jpg" alt="">--}}
{{--                        </div>--}}

{{--                        <div class="box-content" data-swiper-parallax-opacity="0">--}}
{{--                            <div class="metas d-inline-block mb-15">--}}
{{--                                <span> Product</span> <span>voice</span>--}}
{{--                            </div>--}}
{{--                            <h4 class="sec-title">--}}
{{--                                <a class="effect-ajax" data-dsn-ajax="work" href="">Maybe--}}
{{--                                    speaker</a>--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide over-hidden work-item">--}}
{{--                        <div class="box-img p-relative over-hidden before-z-index" data-overlay="6"--}}
{{--                             data-swiper-parallax-scale="0.85">--}}
{{--                            <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="--}}
{{--                                 data-dsn-src="assets/img/project/project2/1.jpg" alt="">--}}
{{--                        </div>--}}

{{--                        <div class="box-content" data-swiper-parallax-opacity="0">--}}
{{--                            <div class="metas d-inline-block mb-15">--}}
{{--                                <span> pen</span>--}}
{{--                            </div>--}}
{{--                            <h4 class="sec-title">--}}
{{--                                <a class="effect-ajax" data-dsn-ajax="work" href="">--}}
{{--                                    Yaren collection</a>--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide over-hidden work-item">--}}
{{--                        <div class="box-img p-relative over-hidden before-z-index" data-overlay="2"--}}
{{--                             data-swiper-parallax-scale="0.85">--}}
{{--                            <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="--}}
{{--                                 data-dsn-src="assets/img/project/project4/1.jpg" alt="">--}}
{{--                        </div>--}}

{{--                        <div class="box-content" data-swiper-parallax-opacity="0">--}}
{{--                            <div class="metas d-inline-block mb-15">--}}
{{--                                <span> Architecture</span>--}}
{{--                            </div>--}}
{{--                            <h4 class="sec-title">--}}
{{--                                <a class="effect-ajax" data-dsn-ajax="work" href="">--}}
{{--                                    Principal Garden</a>--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="dsn-pagination mt-30 dsn-container d-flex justify-content-between">--}}
{{--                    <div class="swiper-next">--}}
{{--                        <div class="next-container">--}}
{{--                            <div class="container-inner">--}}
{{--                                <div class="triangle"></div>--}}
{{--                                <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24"--}}
{{--                                     height="24" viewBox="0 0 24 24">--}}
{{--                                    <g class="circle-wrap" fill="none" stroke-width="1"--}}
{{--                                       stroke-linejoin="round" stroke-miterlimit="10">--}}
{{--                                        <circle cx="12" cy="12" r="10.5"></circle>--}}
{{--                                    </g>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-pagination"></div>--}}
{{--                    <div class="swiper-prev">--}}
{{--                        <div class="prev-container">--}}
{{--                            <div class="container-inner">--}}
{{--                                <div class="triangle"></div>--}}
{{--                                <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">--}}
{{--                                    <g class="circle-wrap" fill="none" stroke-width="1"--}}
{{--                                       stroke-linejoin="round" stroke-miterlimit="10">--}}
{{--                                        <circle cx="12" cy="12" r="10.5"></circle>--}}
{{--                                    </g>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </section>
        <!-- ========== End Work Section ========== -->

        <!-- ========== Service Section ========== -->
        <section class="services with-line with-number p-relative section-margin dsn-col"
                 data-dsn-title="Our Services">
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
    </div>
@endsection

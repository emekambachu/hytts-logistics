@extends('layout')

@section('title')
    About
@endsection

@section('content')
    <div class="wrapper">
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
                                    Hello We are</h2>
                            </div>
                            <h6 class="mt-80 pb-30 mb-30 border-bottom title-block">
                                HYTTS Logistics Ltd is an exclusive travel company, offering luxurious holidays at unbeatable prices.
                            </h6>
                            <p class="max-w570 dsn-up mb-10 ">
                                We are a renowned travel management company which over the years has been dedicated equally to provide best quality service to individual and group travelers for both leisure and business clients. Every staff is flexible for fulfilling customer’s requirements while being determined to uphold the commitment.
                            </p>
                            <p class="max-w570 dsn-up mb-10 ">
                                We are Obliged and determined to make the process of travel cost-efficient and easier for our clients as we adhere strictly to the most comfortable standard, consistent in what is obtainable and maintain a healthy relationship with our clients while we are open to discuss improvements.
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


        <!-- ==========  box description move  ========== -->
        <div class="box-seat box-seat-parallax section-margin">

            <div class="inner-img h-100-v" data-dsn-grid="move-up" data-overlay="2">
                <img class="transform-3d has-bigger-scale"
                     src="{{ asset('/images/about-intro.jpg') }}"
                     data-dsn-src="{{ asset('/images/about-intro.jpg') }}" alt="">
            </div>
            <div class="pro-text background-section box-padding" data-dsn-grid="move-section"
                 data-dsn-responsive="tablet">
                <div class="mb-30 d-flex text-left flex-column align-items-start">
                    <h2 class="section-title">Pure Luxury</h2>
                </div>
                <p class="mb-10">
                    Our mission is to offer travelers unrivaled savings at a selection of hand-picked luxurious destinations. Our team of experts offer mouth watering special offers. From adventurous elephant trekking to awe-inspiring beaches, our collection of destinations is irresistible.
                </p>

                <p class="sm-p mt-15 theme-color">
                    OUR PROMISE : No request is too big or too small for our team. If it matters to you, it matters to us. Let us make your escape perfect..
                </p>
            </div>

        </div>
        <!-- ========== End  box description move ========== -->

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

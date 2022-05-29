@extends('layout')

@section('title')
    Clients
@endsection

@section('content')
    <div class="wrapper">

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

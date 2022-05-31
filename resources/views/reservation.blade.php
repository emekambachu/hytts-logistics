@extends('layout')

@section('title')
    Reservation
@endsection

@section('content')
    <div class="wrapper">

        <header class="header-page over-hidden p-relative header-padding-top header-padding-bottom dsn-header-animation">
            <div class="bg-circle-dotted"></div>
            <div class="dsn-container">
                <div class="content-hero p-relative d-flex align-items-center text-center flex-column h-100 dsn-hero-parallax-title" style="opacity: 1; visibility: inherit; transform: translate(0px);">
                    <p class="subtitle p-relative line-shap  ">
                        <span class="pl-10 pr-10 background-section dsn-load-animate">Let us serve you</span>
                    </p>
                    <h1 class="title mt-20 dsn-load-animate">Reservation</h1>
                </div>
            </div>
        </header>

        <div class="wrapper">

            <div class="container root-contact">
                <div class="box-contact-inner section-margin">
                    <div class="row align-items-center">

                        <div class="col-lg-7">
                            <reservation-form></reservation-form>
                        </div>

                        <div class="col-lg-5">
                            <div class="box-info-contact">
                                <ul>
                                    <li>
                                        <h5 class="title-block mb-15">Contact</h5>
                                        <p class="text-p">+234 (0)803 951 8451</p>
                                        <div class="over-hidden mt-5">
                                            <a class="link-hover" data-hover-text="reservations@hyttslogistics.com"
                                               href="mailto:reservations@hyttslogistics.com">
                                                reservations@hyttslogistics.com</a>
                                        </div>

                                    </li>
                                    <li>
                                        <h5 class="title-block mb-15">Address</h5>
                                        <p class="text-p">No 75 Akerele extention Surulere, Lagos. Nigeria</p>
                                    </li>
                                    <li>
                                        <h5 class="title-block mb-15">Follow Us</h5>
                                        <div class="social-item over-hidden">
                                            <a class="link-hover" data-hover-text="Instagram." href="#"
                                               target="_blank" rel="nofollow">Instagram.</a>
                                        </div>
                                        <div class="social-item over-hidden">
                                            <a class="link-hover" data-hover-text="Facebook." href="#"
                                               target="_blank" rel="nofollow">Facebook.</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

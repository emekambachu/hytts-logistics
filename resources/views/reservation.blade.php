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
                <div class="full-width">
                    <div class="map-custom p-absolute w-100 h-100" data-dsn-lat="30.0489206"
                         data-dsn-len="31.258553" data-dsn-zoom="14">
                    </div>
                </div>
                <div class="box-contact-inner section-margin">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="form-box">
                                <div class="line line-top"></div>
                                <div class="line line-bottom"></div>
                                <div class="line line-left"></div>
                                <div class="line line-right"></div>

                                <div class="mb-30 d-flex text-left flex-column align-items-start">
                                    <p class="sub-heading line-shap line-shap-before mb-15">
                                        <span class="line-bg-right">Send us a message and we will take the time to get to know you so we can help you find your amazing adventure.</span>
                                    </p>
                                    <h2 class="section-title title-cap">Get in Touch</h2>
                                </div>
                                <p class="mb-30">
                                    Please call one of our specialist or pop into one of our travel shops and meet with an advisor in person. Alternatively, email us any questions and we will reply as quickly as possible. We look forward to being a small part of your next big adventure.
                                </p>

                                <form id="contact-form" class="form" method="post"
                                      action=""
                                      data-toggle="validator">
                                    <div class="messages"></div>
                                    <div class="input__wrap controls">
                                        <div class="form-group">
                                            <div class="entry-box">
                                                <label>Your name *</label>
                                                <input id="form_name" type="text" name="name"
                                                       placeholder="Type your name" required="required"
                                                       data-error="name is required.">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <div class="entry-box">
                                                <label>Your E-Mail *</label>
                                                <input id="form_email" type="email" name="email"
                                                       placeholder="Type your Email Address" required="required"
                                                       data-error="Valid email is required.">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <div class="entry-box">
                                                <label>What's up?</label>
                                                <textarea id="form_message" class="form-control" name="message"
                                                          placeholder="Tell us about you and the world"
                                                          required="required"
                                                          data-error="Please,leave us a message."></textarea>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="text-right">
                                            <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                                <button type="submit" class="dsn-button ">
                                                    <span class="dsn-border border-color-default"></span>
                                                    <span class="text-button">Send Message</span>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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

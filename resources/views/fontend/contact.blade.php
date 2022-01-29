@extends('layouts.fontend')
@section('main_content')
{{-- <section>
    <div class="w-100 pt-90 pb-100 position-relative">
        <div class="container">
            <div class="contact-wrap position-relative w-100">
                <div class="particles-wrap position-absolute w-100">
                    <div id="particle-4" class="particles-js w-100" data-color="#3E4A59" data-size="80" data-count="5" data-speed="2" data-hide="767" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-3.png" data-image-width="150" data-image-height="150">
                        <canvas></canvas>
                    </div>
                </div>
                <div class="row mrg30">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="contact-form-wrap mt-40 w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0">Send a Message</h2>
                                <i class="btm-ln bg-color3"></i>
                            </div><!-- Sec Title -->
                            <form action="#" method="post" id="email-form" enctype="multipart/form-data">
                                <div class="form-group w-100">
                                    <div class="response w-100"></div>
                                </div>
                                <div class="row mrg10">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="fname" type="text" name="fname" placeholder="Full Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="email" type="email" name="email" placeholder="Email Address *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="phone" type="tel" name="phone" placeholder="Subject *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="lname" accept=".jpg,.png,.jpeg" type="file" name="screenshots" multiple>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box w-100">
                                            <textarea class="contact_message" name="contact_message" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="field-btn w-100">
                                            <button class="thm-btn d-inline-block rounded-pill" id="submit" type="submit">Send A Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- Contact Wrap -->
            <div class="contact-map w-100 overflow-hidden mt-50 brd-rd20">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.1859404323836!2d-122.05297108441484!3d37.40907974088707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb78af144de37%3A0xdd4791b7bab4679f!2sMoffett%20Federal%20Airfield!5e0!3m2!1sen!2s!4v1618730224931!5m2!1sen!2s"></iframe>
            </div>
        </div>
    </div>
</section> --}}
<section>
    <div class="w-100 pt-90 pb-100 position-relative">
        <div class="container">
            <div class="contact-wrap position-relative w-100">
                <div class="row mrg30">

                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="contact-form-wrap mt-40 w-100">
                            <div class="sec-title w-100 position-relative">
                                <h2 class="mb-0">Send a Message</h2>
                                <i class="btm-ln bg-color3"></i>
                            </div><!-- Sec Title -->
                            <form action="#" method="post" id="email-form">
                                <div class="form-group w-100">
                                    <div class="response w-100"></div>
                                </div>
                                <div class="row mrg10">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="name" type="text" name="name" placeholder="Full Name*" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="email" type="email" name="email" placeholder="Email *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="text" type="text" name="subject" placeholder="Subject *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="field-box w-100">
                                            <input class="photos" type="file" name="screenshots[]" placeholder="screenshot" multiple required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box w-100">
                                            <textarea class="contact_message" name="contact_message" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="field-btn w-100">
                                            <button class="thm-btn d-inline-block rounded-pill" id="submit" type="submit">Send A Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- Contact Wrap -->
            <div class="contact-map w-100 overflow-hidden mt-50 brd-rd20">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.1859404323836!2d-122.05297108441484!3d37.40907974088707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb78af144de37%3A0xdd4791b7bab4679f!2sMoffett%20Federal%20Airfield!5e0!3m2!1sen!2s!4v1618730224931!5m2!1sen!2s"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection

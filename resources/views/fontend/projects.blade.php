@php
$title = 'Our Team';
@endphp
@extends('layouts.fontend')
@section('main_content')
    <main>
        <section>
            <div class="w-100 pt-110 pb-80 position-relative">
                <div class="container">
                    <div class="sec-title text-center w-100 position-relative">
                        <h2 class="mb-0"><span>Latest From</span> Blog</h2>
                        <i class="btm-ln bg-color14"></i>
                    </div><!-- Sec Title -->
                    <div class="blog-wrap list-view d-inline-block position-relative w-100">
                        <div class="post-box schm-14 brd-rd15 w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.html" title=""><img class="img-fluid w-100"
                                        src="assets/images/resources/post-img1-6.jpg" alt="Post Image 6" height="329"
                                        width="585"></a>
                                <span
                                    class="post-date brd-rd15 text-center position-absolute text-uppercase"><i>30</i>May</span>
                            </div>
                            <div class="post-info w-100">
                                <span class="post-cate d-block text-uppercase"><a href="javascript:void(0);"
                                        title="">Marketing</a></span>
                                <h3 class="mb-0"><a href="blog-detail.html" title="">Elegant style</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                    eget orci non nunc iaculis lobortis. Vestibulum pretium...</p>
                                <a class="simple-link d-inline-block text-uppercase" href="blog-detail.html" title="">Read
                                    More<i class="flaticon-right-arrow text-color14"></i></a>
                            </div>
                        </div>
                    </div><!-- Blog Wrap -->
                    <div class="view-all d-inline-block mt-60 w-100 text-center position-relative z2">
                        <a class="thm-btn v2 rounded-pill d-inline-block" href="blog-3column.html" title="">Go To Blog</a>
                    </div><!-- View All -->
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-130 pb-70 position-relative">
                <div class="fixed-bg back-size-cont bg-norepeate"
                    style="background-image: url(assets/images/bg-shp-10.png);"></div>
                <div class="container">
                    <div class="sec-title text-white text-center w-100 position-relative">
                        <h2 class="mb-0"><span>Let's Create Something</span> Together</h2>
                        <i class="btm-ln bg-white"></i>
                    </div><!-- Sec Title -->
                    <div class="cnt-wrap text-center position-relative w-100">
                        <form class="w-100 d-inline-block" action="#" method="post" id="email-form">
                            <div class="form-group w-100">
                                <div class="response w-100"></div>
                            </div>
                            <div class="row mrg20">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="field-box w-100">
                                        <input class="fname" type="text" name="fname" placeholder="Your Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="field-box w-100">
                                        <input class="email" type="email" name="email" placeholder="Your email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box w-100">
                                        <textarea class="contact_message" name="contact_message" placeholder="Send Message"
                                            required></textarea>
                                    </div>
                                    <div class="field-btn text-center w-100">
                                        <button class="thm-btn d-inline-block rounded-pill" type="submit">Send
                                            Request</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- Contact Form Wrap -->
                </div>
            </div>
        </section>
    </main>

@endsection

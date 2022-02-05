@php
$title = 'Our Projects';
@endphp
@extends('layouts.fontend')
@section('css')
<style>

    .clock-item .inner {
        height: 0px;
        padding-bottom: 100%;
        position: relative;
        width: 100%;
    }
    .clock-canvas {
        background-color: rgba(255, 255, 255, .1);
        border-radius: 50%;
        height: 0px;
        padding-bottom: 100%;
    }
    .text {
        color: #fff;
        font-size: 20px;
        font-weight: bold;
        margin-top: -30px;
        position: absolute;
        top: 50%;
        text-align: center;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 1);
        width: 100%;
    }
    .text .type-time {
        font-size: 20px;
    }
    @media (min-width: 768px) and (max-width: 991px) {
        .clock-item {
        margin-bottom: 20px;
        }
    }
    @media (max-width: 767px) {
        .clock-item {
        margin: 0px 30px 30px 30px;
        }
    }
</style>

@endsection

@section('javascript')
<script>
$('.countdown').final_countdown({
start: '1362139200',
end: '1388461320',
now: '1387461319'
});

</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://www.jqueryscript.net/demo/Modern-Circular-jQuery-Countdown-Timer-Plugin-Final-Countdown/js/kinetic.js"></script>
<script type="text/javascript" src="https://www.jqueryscript.net/demo/Modern-Circular-jQuery-Countdown-Timer-Plugin-Final-Countdown/jquery.final-countdown.js"></script>
<script src="{{asset('assets/js/timmer.js')}}"> </script>
@endsection
@section('main_content')
    <main>
        {{-- count down  --}}
        <section>
            <div class="w-100 pt-100 bg-color10 pb-100 position-relative">
                <div class="particles-wrap position-absolute w-100">
                    <div id="particle-2" class="particles-js top_left mx-w25 w-100" data-color="#3E4A59" data-size="80" data-count="0.5" data-speed="3" data-hide="1500" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-1.png" data-image-width="150" data-image-height="150">
                        <canvas></canvas>
                    </div>
                </div><!-- Particles Wrap -->
                <div class="container">
                    <div class="sec-title text-center w-100 position-relative">
                        <h2 class="mb-0 mt-5"><span>Our</span> Projects</h2>
                        <i class="btm-ln bg-color3"></i>
                    </div><!-- Sec Title -->
                    <div class="row ">
                      @foreach ($projects as $project)
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="post-box brd-rd15 w-100">
                                <div class="post-info ">
                                    <div class="position-relative text-center">
                                        <div class="text-center testi-img d-inline-block overflow-hidden rounded-circle ">
                                            <img class="img-fluid d-inline-block rounded-circle" src="{{asset("assets/images/projects/$project->project_logo")}}">
                                        </div>
                                        <h3 class="mb-0"><a href="javascript:void(0);">{{$project->project_name}}</a></h3>
                                    </div>
                                    <p>{{$project->project_description}}</p>
                                </div>

                                <div  style="background-color:rgb(80, 79, 79); border-radius: 3px">
                                    <div  class="clock{{$loop->index+1}} row py-2">
                                        <div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
                                            <div class="wrap">
                                                <div class="inner">
                                                    <div id="canvas_days{{$loop->index+1}}" class="clock-canvas"></div>
                                                    <div class="text">
                                                        <span class="val">22</span>
                                                        <br>
                                                        <span class="type-days type-time">D</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- hours -->
                                        <div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
                                            <div class="wrap">
                                                <div class="inner">
                                                    <div id="canvas_hours{{$loop->index+1}}" class="clock-canvas"></div>
                                                    <div class="text">
                                                        <span class="val">0</span>
                                                        <br>
                                                        <span class="type-hours type-time">H</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- minutes -->
                                        <div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
                                            <div class="wrap">
                                                <div class="inner">
                                                    <div id="canvas_minutes{{$loop->index+1}}" class="clock-canvas"></div>
                                                    <div class="text">
                                                        <span class="val">0</span>
                                                        <br>
                                                        <span class="type-minutes type-time">M</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- seconds -->
                                        <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3 ">
                                            <div class="wrap">
                                                <div class="inner">
                                                    <div id="canvas_seconds{{$loop->index+1}}" class="clock-canvas"></div>
                                                    <div class="text">
                                                        <span class="val">60</span>
                                                        <br>
                                                        <span class="type-seconds type-time">S</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach
                </div>
            </div>
        </section>
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

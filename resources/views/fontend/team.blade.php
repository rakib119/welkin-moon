@php
    $title = 'Our Team';
@endphp
@extends('layouts.fontend')
@section('main_content')

<div class="container">

</div>
<section class="section-blue">
    <div class="container">
        <div class="row margin-bottom-10">
            <div class="col-md-12 text-center">
                <h2 class="section-title white">Our Admins</h2>

                <p class="section-subtitle white">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
            </div>
        </div>
        <div class="row">
            <div class="testimonials-wrapper">
                @foreach ($teams->where('is_featured',0) as $team)
                <div class="col-md-4">
                    <div class="testimonials_item">
                        <div class="testimonials_box">
                            <p>"Pellentesque etsum is laoret mauris, dapibis etim etsum, vivamus eti nibh ligula saepe present. Quis netsi etsa lorem nibh ligula et evenit praesent autim fugit justo et sed tempor."</p>
                            <span class="testimonials_arrow"></span>
                        </div>
                        <img src="images/team1.jpg" alt="Picture" class="autor_pic">
                        <p class="autor"><span>Cristina Richards</span><br> CEO - SmartDesign</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection

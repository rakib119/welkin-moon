@php
$title = 'Our Team';
@endphp
@extends('layouts.fontend')
@section('main_content')
    <main>
        <section>
            <div class="w-100 pt-80 pb-110 position-relative">
                <div class="particles-wrap position-absolute w-100">
                    <div id="particle-2" class="particles-js top_left mx-w50 w-100" data-color="#4f66db" data-size="15"
                        data-count="3" data-speed="2" data-hide="767" data-shape="circle" data-mode="bounce">
                        <canvas></canvas>
                    </div>
                </div><!-- Particles Wrap -->
                <div class="container">
                    <div class="testi-wrap position-relative w-100">
                        <div class="row justify-content-center align-items-center">
                            <div class="testi-inner schm-17 w-100">
                                <div class="row testi-caro3">
                                    @forelse ( $teams->where('is_featured',1) as $team)
                                        <div class="blog-wrap list-view d-inline-block position-relative w-100">
                                            <div class="post-box schm-14 brd-rd15 w-100">
                                                <div class="post-img  position-relative"
                                                    style=" display: flex;justify-content: center;flex-wrap: wrap;">
                                                    <a href="javascript:void(0)"
                                                        style="height: 550px; width: auto; overflow: hidden;"><img
                                                            class=" w-100"
                                                            src="{{ asset('assets/images/teams') }}/{{ $team->img }}"
                                                            alt="Image not found"
                                                            style="width: 100%; object-fit: cover;"></a>
                                                </div>
                                                <div class=" w-100">
                                                    <h3 class="mt-3" style="color: var(--color17)">
                                                        {{ $team->name }}</h3>
                                                    <span class="post-cate d-block text-uppercase"><a
                                                            href="javascript:void(0);">{{ $team->post }}</a></span>

                                                    <p class="mt-2 mb-0 px-2">{!! $team->description !!}</p>
                                                    <div
                                                        class="social-links2 d-flex flex-wrap align-items-left justify-content-left w-100">
                                                        <a href="{{ $team->facebook }}" title="Facebook" target="_blank">
                                                            <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            <i class="flaticon-facebook"></i>
                                                        </a>
                                                        <a href="{{ $team->twitter }}" title="Twitter" target="_blank">
                                                            <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            <i class="flaticon-twitter"></i>
                                                        </a>
                                                        <a href="{{ $team->linkedin }}" title="Linkedin" target="_blank">
                                                            <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            <i class="flaticon-linkedin"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 pt-135 gry pb-90 position-relative">
                <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-9.png);"></div>
                <div class="particles-wrap position-absolute w-100">
                    <div id="particle-3" class="particles-js top_right w-100" data-color="#3E4A59" data-size="50"
                        data-count="1" data-speed="3" data-hide="767" data-shape="image" data-mode="bounce"
                        data-image-url="assets/images/particle-6.png" data-image-width="150" data-image-height="150">
                        <canvas></canvas>
                    </div>
                </div><!-- Particles Wrap -->
                <div class="container">
                    <div class="sec-title text-center w-100 position-relative">
                        <h2 class="mb-0">Our Team</h2>
                        <i class="btm-ln bg-color3"></i>
                    </div><!-- Sec Title -->
                    {{-- <div class="team-wrap w-100">
                        <div class="row mrg30">
                            @foreach ($teams->where('is_featured', 0) as $team)
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="team-box text-center position-relative w-100">
                                        <div class="team-img w-100"><a href="javascript:void(0);" title=""><img class="img-fluid w-100"
                                            src="{{ asset('assets/images/teams') . '/' . $team->img }}"
                                            alt="not found" style="height: 300px; width:300px"></a></div>

                                        <div class="team-info w-100">
                                            <h3 class="mb-0"><a href="javascript:void(0);" title="">{{ $team->name }}</a></h3>
                                            <span class="d-block"><a href="javascript:void(0);" title="">{{ $team->post }}</a></span>
                                            <div class="social-links  my-3">
                                                <button class="thm-btn rounded-pill d-inline-block" data-bs-toggle="modal" data-bs-target="#exampleModal{{$team->id}}">Quote</button>
                                            </div>
                                            <div class="social-links v2 d-inline-flex flex-wrap">
                                                 <a href="{{ $team->facebook }}" title="Facebook" target="_blank"><i
                                                    class="flaticon-facebook"></i></a>
                                                <a href="{{ $team->twitter }}" title="Twitter" target="_blank"><i
                                                        class="flaticon-twitter-letter-logo"></i></a>
                                                <a href="{{ $team->linkedin }}" title="Linkedin" target="_blank"><i
                                                        class="flaticon-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> --}}
                    <div class="testi-wrap position-relative w-100">
                        <div class="row schm-14 testi-caro2">
                            @foreach ($teams->where('is_featured', 0) as $team)
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="testi-box schm-14 position-relative text-center w-100">
                                    <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img
                                            class="img-fluid d-inline-block rounded-circle"
                                            style="height: 120px;width:150px"
                                            src="{{ asset('assets/images/teams') . '/' . $team->img }}"
                                            alt="not found">
                                    </div>
                                    <div class="testi-info w-100">
                                        <h5 class="mb-0">{{ $team->name }}</h5>
                                        <span class="d-block">{{ $team->post }}</span>
                                    </div>
                                    <div class="social-links  my-3">
                                        <button class="thm-btn rounded-pill d-inline-block" data-bs-toggle="modal" data-bs-target="#exampleModal{{$team->id}}">Quote</button>
                                    </div>
                                    <div class="social-links v2 d-inline-flex flex-wrap">
                                        <a href="{{ $team->facebook }}" title="Facebook" target="_blank"><i
                                                class="flaticon-facebook"></i></a>
                                        <a href="{{ $team->twitter }}" title="Twitter" target="_blank"><i
                                                class="flaticon-twitter-letter-logo"></i></a>
                                        <a href="{{ $team->linkedin }}" title="Linkedin" target="_blank"><i
                                                class="flaticon-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @foreach ($teams->where('is_featured', 0) as $team)
        <div class="modal fade" id="exampleModal{{$team->id}}" tabindex="-1" aria-labelledby="exampleModal{{$team->id}}Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$team->name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!!$team->description!!}
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach
@endsection

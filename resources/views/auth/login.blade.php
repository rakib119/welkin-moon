@extends('layouts.fontend')
@section('main_content')
<section style="margin-top: 100px">
    <div class="w-100 pt-130 pb-70 position-relative">
        <div class="fixed-bg back-size-cont bg-norepeate"
            style="background-image: url(assets/images/bg-shp-10.png);"></div>
        <div class="container">
            <div class="sec-title text-white text-center w-100 position-relative">
                <h2 class="mb-0"> {{ __('Login') }}</h2>
                <i class="btm-ln bg-white"></i>
            </div><!-- Sec Title -->
            <div class="cnt-wrap text-center position-relative w-100">

                <form class="w-100 d-inline-block" method="POST" action="{{ route('login') }}">
                    <div class="form-group w-100">
                        <div class="response w-100"></div>
                    </div>
                    <div class="row mrg20">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="field-box w-100">
                                <input class="fname" type="text" name="fname" placeholder="User Name" autofocus
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="field-box w-100">
                                <input class="email @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email Address"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="field-box w-100">
                                <input class="password  @error('password') is-invalid @enderror" type="pasword" name="password"
                                required autocomplete="current-password" placeholder="Password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-3 d-flex justify-content-between">
                                <div>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                     <label class="form-check-label text-white" for="remember">
                                         {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div>
                                    @if (Route::has('password.request'))
                                    <a class="btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="field-btn text-center w-100">
                                <button class="thm-btn d-inline-block rounded-pill" type="submit">submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- Contact Form Wrap -->
        </div>
    </div>
</section>
@endsection

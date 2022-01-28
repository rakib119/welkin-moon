@extends('layouts.fontend')
@section('css')
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .register {
            width: 360px;
            height: 550px;
            /* background: #fff; */
            margin: 8% auto;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }

        h3 {
            text-align: center;
            margin-bottom: 40px;
            color: #777;
        }

        .register form {
            width: 280px;
            position: absolute;
            top: 100px;
            left: 40px;
            transition: 0.5s;
        }

        .register form input,
        select {
            width: 100%;
            padding: 10px 5px;
            margin: 5px 0;
            border: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
        }

        ::placeholder {
            color: #777;
        }

        .btn-box {
            width: 100%;
            margin: 30px auto;
            text-align: center;
        }

        .register form button {

            width: 110px;
            height: 35px;
            margin: 0 10px;
            background: linear-gradient(to right, #5163dd, #e7eefb);
            border-radius: 30px;
            outline: none;
            color: #fff;
            cursor: pointer;
        }

        #form2 {
            left: 450px;
        }

        #form3 {
            left: 450px;
        }

        .step-row {
            width: 360px;
            height: 40px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            box-shadow: 0 -1px 5px -1px #000;
            position: relative;
        }

        .step-col {
            width: 120px;
            text-align: center;
            color: #333;
            position: relative;
        }

        #progress {
            position: absolute;
            height: 100%;
            width: 120px;
            transition: 1s;
            background: linear-gradient(to right, #5163dd, #e7eefb);
        }

        #progress::after {
            content: '';
            height: 0;
            width: 0;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            position: absolute;
            right: -20px;
            top: 0;
            border-left: 20px solid #e7eefb;
        }

    </style>
@endsection

@section('javascript')
    <script>
        var Form1 = document.getElementById('form1');
        var Form2 = document.getElementById('form2');
        var Form3 = document.getElementById('form3');
        var Next1 = document.getElementById('Next1');
        var Next2 = document.getElementById('Next2');
        var Back1 = document.getElementById('Back1');
        var Back2 = document.getElementById('Back2');
        var progress = document.getElementById('progress');
        Next1.onclick = function() {
            Form1.style.left = "-450px";
            Form2.style.left = "40px";
            progress.style.width = "240px";
        }
        Back1.onclick = function() {
            Form1.style.left = "40px";
            Form2.style.left = "450px";
            progress.style.width = "120px";
        }
        Next2.onclick = function() {
            Form2.style.left = "-450px";
            Form3.style.left = "40px";
            progress.style.width = "360px";
        }
        Back2.onclick = function() {
            Form2.style.left = "40px";
            Form3.style.left = "450px";
            progress.style.width = "240px";
        }
    </script>
@endsection
@section('main_content')
    <section style="margin-top: 100px">
        <div class="w-100 pt-90 pb-120 position-relative">
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-3" class="particles-js w-100" data-color="#a4aeed" data-size="2" data-linked="1"
                    data-count="70" data-speed="5" data-hide="767" data-shape="circle" data-mode="out">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0"><span>Create</span> Your Account</h2>
                    <i class="btm-ln bg-color17"></i>
                </div><!-- Sec Title -->
                <div class="price-plans-wrap schm-17 text-center position-relative w-100">
                    <div class="register  bg-color10">
                        <form id="form1" action="">
                            <h3>BASIC INFO</h3>
                            <input type="text" placeholder="First Name" required>
                            <input type="text" placeholder="Last Name" required>
                            <input type="text" placeholder="User Name" required>
                            <div class="btn-box">
                                <button type="button" id="Next1">Next </button>
                            </div>
                        </form>
                        <form id="form2" action="">
                            <h3>CONTACT INFO</h3>
                            <input type="email" placeholder="Email address" required>
                            <input type="text" placeholder="Phone Number" required>
                            <input type="password" placeholder=" Password" required>
                            <input type="password" placeholder="Confirm Password" required>
                            <div class="btn-box">
                                <button type="button" id="Back1">Back </button>
                                <button type="button" id="Next2">Next </button>
                            </div>
                        </form>
                        <form id="form3" action="">
                            <h3>OTHER INFO</h3>
                            <input type="text" placeholder="Phone Number" required>
                            <select name="" id="">
                                <option value="">Gender</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                                <option value="">Other</option>
                            </select>
                            <input type="date" placeholder="Date Of Birth" required>
                            <div class="btn-box">
                                <button type="button" id="Back2">Back </button>
                                <button type="submit">Submit </button>
                            </div>
                        </form>
                        <div class="step-row">
                            <div id="progress">

                            </div>
                            <small class="step-col">Step 1</small>
                            <small class="step-col">Step 2</small>
                            <small class="step-col">Step 3</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

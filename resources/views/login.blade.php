{{--@extends('layouts.base')--}}

{{--@section('title')--}}
{{--Login--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--<link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}">--}}
{{--<div class="limiter">--}}
{{--<div class="container-login100">--}}
{{--<div class="wrap-login100">--}}
{{--<div class="login100-form-title" style="background-image: url({{ asset('svg/bg-01.jpg') }});">--}}
{{--<span class="login100-form-title-1">--}}
{{--Sign In--}}
{{--</span>--}}
{{--</div>--}}

{{--<form class="login100-form validate-form">--}}
{{--{{ csrf_field() }}--}}
{{--<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">--}}
{{--<span class="label-input100">Username</span>--}}
{{--<input class="input100" type="text" name="usernames" placeholder="Enter username">--}}
{{--<span class="focus-input100"></span>--}}
{{--<h6 class="input100">Username phải từ 5 đến 10 kí tự </h6>--}}
{{--</div>--}}

{{--<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">--}}
{{--<span class="label-input100">Password</span>--}}
{{--<input class="input100" type="password" name="pass" placeholder="Enter password">--}}
{{--<span class="focus-input100"></span>--}}
{{--<h6 class="input100">Password phải từ 5 đến 10 kí tự </h6>--}}
{{--</div>--}}

{{--<div class="container-login100-form-btn">--}}
{{--<button class="login100-form-btn">--}}
{{--Login--}}
{{--</button>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}


{{--@endsection--}}


        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type=""
          href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg"
          color="#111"/>
    <title>CodePen - Login &amp; Sign Up Form Concept</title>


    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/login.css') }}">

    <script>
        window.console = window.console || function (t) {
        };
    </script>


    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no">

<div class="cotn_principal">
    <div class="cont_centrar">

        <div class="cont_login">
            <div class="cont_info_log_sign_up">
                <div class="col_md_login">
                    <div class="cont_ba_opcitiy">

                        <h2>LOGIN</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                    </div>
                </div>
                <div class="col_md_sign_up">
                    <div class="cont_ba_opcitiy">
                        <h2>SIGN UP</h2>


                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                        <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                    </div>
                </div>
            </div>


            <div class="cont_back_info">
                <div class="cont_img_back_grey">
                    <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d"
                         alt=""/>
                </div>

            </div>
            {{--@if(isset($messages))--}}
                {{--bạn cần đăng nhập lại!--}}
            {{--@else--}}
            {{--@endif--}}

            <form class="login100-form validate-form" method="post" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="cont_forms">
                    <div class="cont_img_back_">
                        <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d"
                             alt=""/>
                    </div>
                    <div class="cont_form_login">
                        <h2>LOGIN</h2>
                        <input class="input100" type="text" name="usernames" placeholder="Enter username"></input>
                        <span class="focus-input100"></span>
                        <h6 class="input100">
                            @if ($errors->any())
                                {{$errors->first('usernames')}}
                            @else
                                Username phải từ 5 đến 10 kí tự
                            @endif
                        </h6>
                        <input class="input100" type="password" name="password" placeholder="Enter password">
                        <h6 class="input100">
                            @if ($errors->any())
                                {{$errors->first('password')}}
                            @else
                                Password phải từ 5 đến 10 kí tự
                            @endif</h6>
                        <button class="btn_login" name="login" value="login">LOGIN</button>
                    </div>
                    <div class="cont_form_sign_up">
                        <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                        <h2>SIGN UP</h2>
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Enter username">
                        <span class="focus-input100"></span>
                        <h6 class="input100">
                            @if ($errors->any())
                                {{$errors->first('username')}}
                            @else
                                Username phải từ 5 đến 10 kí tự
                            @endif</h6>
                        <input class="input100" type="password" name="pass" placeholder="Enter password">
                        <h6 class="input100">
                            @if ($errors->any())
                                {{$errors->first('pass')}}
                            @else
                                Username phải từ 5 đến 10 kí tự
                            @endif
                        </h6>
                        <button class="btn_sign_up" onclick="cambiar_sign_up()" name="signup" value="signUp">SIGN UP
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js"></script>


<script>
    /* ------------------------------------ Click on login and Sign Up to  changue and view the effect
           ---------------------------------------
           */

    function cambiar_login() {
        document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
        document.querySelector('.cont_form_login').style.display = "block";
        document.querySelector('.cont_form_sign_up').style.opacity = "0";

        setTimeout(function () {
            document.querySelector('.cont_form_login').style.opacity = "1";
        }, 400);

        setTimeout(function () {
            document.querySelector('.cont_form_sign_up').style.display = "none";
        }, 200);
    }

    function cambiar_sign_up(at) {
        document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
        document.querySelector('.cont_form_sign_up').style.display = "block";
        document.querySelector('.cont_form_login').style.opacity = "0";

        setTimeout(function () {
            document.querySelector('.cont_form_sign_up').style.opacity = "1";
        }, 100);

        setTimeout(function () {
            document.querySelector('.cont_form_login').style.display = "none";
        }, 400);


    }


    function ocultar_login_sign_up() {

        document.querySelector('.cont_forms').className = "cont_forms";
        document.querySelector('.cont_form_sign_up').style.opacity = "0";
        document.querySelector('.cont_form_login').style.opacity = "0";

        setTimeout(function () {
            document.querySelector('.cont_form_sign_up').style.display = "none";
            document.querySelector('.cont_form_login').style.display = "none";
        }, 500);

    }

    //# sourceURL=pen.js
</script>


</body>

</html>

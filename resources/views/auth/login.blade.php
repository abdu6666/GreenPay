@extends('layouts.loginlayout')

@section('contents')

    {{--<div class="alert_wrapper">--}}
    {{--    <svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" viewBox="0 0 256 256"><path fill="#1783fa" d="M220.07 176.94C214.41 167.2 206 139.73 206 104a78 78 0 1 0-156 0c0 35.74-8.42 63.2-14.08 72.94A14 14 0 0 0 48 198h42.48a38 38 0 0 0 75 0H208a14 14 0 0 0 12.06-21.06ZM128 218a26 26 0 0 1-25.29-20h50.58A26 26 0 0 1 128 218Zm81.71-33a1.9 1.9 0 0 1-1.7 1H48a1.9 1.9 0 0 1-1.7-1a2 2 0 0 1 0-2c7.57-13 15.7-43.31 15.7-79a66 66 0 1 1 132 0c0 35.68 8.14 65.95 15.71 79a2 2 0 0 1 0 2Z"/></svg>--}}

    {{--    <div class="infos">--}}
    {{--        <p id="title">Login Failed.</p>--}}
    {{--        <p id="des">Enter Email & Password.</p>--}}
    {{--    </div>--}}

    {{--    <p id="cancel"onclick="close_popup()">&times</p>--}}
    {{--</div>--}}
    {{--<div class="alert_wrapper">--}}
    {{--    <svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" viewBox="0 0 256 256"><path fill="#1783fa" d="M220.07 176.94C214.41 167.2 206 139.73 206 104a78 78 0 1 0-156 0c0 35.74-8.42 63.2-14.08 72.94A14 14 0 0 0 48 198h42.48a38 38 0 0 0 75 0H208a14 14 0 0 0 12.06-21.06ZM128 218a26 26 0 0 1-25.29-20h50.58A26 26 0 0 1 128 218Zm81.71-33a1.9 1.9 0 0 1-1.7 1H48a1.9 1.9 0 0 1-1.7-1a2 2 0 0 1 0-2c7.57-13 15.7-43.31 15.7-79a66 66 0 1 1 132 0c0 35.68 8.14 65.95 15.71 79a2 2 0 0 1 0 2Z"/></svg>--}}

    {{--    <div class="infos">--}}
    {{--        <p id="title">Login Failed.</p>--}}
    {{--        <p id="des">Email & Password Not Matched.</p>--}}
    {{--    </div>--}}

    {{--    <p id="cancel"onclick="close_popup()">&times</p>--}}
    {{--</div>--}}


    <div class="header">
        <div class="centerize">
            <div class="logo">
                <img src="assets/img/logo_sites.png" alt=""onclick="location.href='home'">
            </div>

            <div class="space"></div>

        </div>
    </div>

    <div class="centerize_login">
        <h1>Log in</h1>

        <form action=""method="POST">
            <div class="row">
                <p id="ti">Email Address</p>
                <span><input type="email"placeholder="Enter Your Email Address"required name="email_address"></span>
            </div>

            <div class="row">
                <p id="ti">Password</p>
                <span><input type="password"placeholder="Enter Your Password"required name="password"></span>
            </div>

            <span><button>Log in</button></span>
        </form>
    </div>

@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("title","Luxury catering around the world")</title>
    <meta name="description" content="@yield("title","We are here to provide you the best quality catering service during your stay and departure")">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arsenal:ital,wght@0,400;0,700;1,400;1,700&family=Tenor+Sans&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/lib.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
    @livewireStyles
</head>
<body>
@if(\Request::route()->getName() == "index" || \Illuminate\Support\Facades\Route::is("show_airport"))
    <div class="bg_header" style="background-image: url(@yield('header_bg')">
        <div class="header d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="{{route('index')}}"><img src="/image/logo.png"></a>
            </div>
            <div class="header_menu">
                <ul class="navbar">
                    <li class="nav-item"><a class="nav-link text-uppercase text-gray-1" href="{{route("all_airports")}}">Airports</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase text-gray-1" href="{{route("all_news")}}">News</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase text-gray-1" href="{{route("partnership")}}">Partnership</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase text-gray-1" href="{{route("contact")}}">Contacts</a></li>
                </ul>
            </div>
            <div class="mobile_menu">
                <img src="/image/menu.svg" style="margin-right: 5px">
                <p class="fw-normal p_md text-white text-uppercase">Menu</p>
            </div>
            <div class="mobile_menu_open" Luxury catering around the world>
                <ul>
                    <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("all_airports")}}">Airports</a></li>
                    <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("all_news")}}">News</a></li>
                    <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("partnership")}}">Partnership</a></li>
                    <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("contact")}}">Contacts</a></li>
                </ul>
                <p class="text-gray-1 p_md d-flex align-items-center"><a href="{{route('login')}}"><i class="icon-Login account_icon"></i>Log in</a></p>
                <p class="text-gray-1 p_md d-flex align-items-center"><a href="{{route('register')}}"><i class="icon-User account_icon"></i>New account</a></p>
            </div>

            <div class="account">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{route('account')}}" class="btn btn-sm text-white btn-outline-light">Account</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-sm text-white btn-outline-light"><i class="icon-Login account_icon"></i>Logout</button>
                    </form>
                @else
                    <a href="{{route('login')}}" class="btn btn-sm text-white btn-outline-light"><i class="icon-Login account_icon"></i>Log in</a>
                    <a href="{{route('register')}}" class="btn-sm text-gray-9 border-0 btn-white"><i class="icon-User account_icon"></i>New account</a>
                @endif
            </div>
        </div>
        @yield("header_content")
    </div>
@else
    <div class="header d-flex justify-content-between align-items-center">
        <div class="logo">
            <a href="{{route('index')}}"><img src="/image/logo.png"></a>
        </div>
        <div class="header_menu ">
            <ul class="navbar">
                <li class="nav-item "><a class="nav-link text-uppercase text-gray-1" href="{{route("all_airports")}}">Airports</a></li>
                <li class="nav-item "><a class="nav-link text-uppercase text-gray-1" href="{{route("all_news")}}">News</a></li>
                <li class="nav-item "><a class="nav-link text-uppercase text-gray-1" href="{{route("partnership")}}">Partnership</a></li>
                <li class="nav-item "><a class="nav-link text-uppercase text-gray-1" href="{{route("contact")}}">Contacts</a></li>
            </ul>
        </div>
        <div class="mobile_menu">
            <a href="{{route('index')}}"><img src="/image/menu.svg" style="margin-right: 5px"></a>
            <p class="fw-normal p_md text-white text-uppercase">Menu</p>
        </div>
        <div class="mobile_menu_open">
            <ul>
                <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("all_airports")}}">Airports</a></li>
                <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("all_news")}}">News</a></li>
                <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("partnership")}}">Partnership</a></li>
                <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("contact")}}">Contacts</a></li>
            </ul>
            <p class="text-gray-1 p_md d-flex align-items-center"><a href="{{route('login')}}"><i class="icon-Login account_icon"></i>Log in</a></p>
            <p class="text-gray-1 p_md d-flex align-items-center"><a {{route('register')}}><i class="icon-User account_icon"></i>New account</a></p>
        </div>

        <div class="account">
            <div class="account">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{route('account')}}" class="btn btn-sm text-white btn-outline-light">Account</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-sm text-white btn-outline-light"><i class="icon-Login account_icon"></i>Logout</button>
                    </form>
                @else
                    <a href="{{route('login')}}" class="btn btn-sm text-white btn-outline-light"><i class="icon-Login account_icon"></i>Log in</a>
                    <a href="{{route('register')}}" class="btn-sm text-gray-9 border-0 btn-white"><i class="icon-User account_icon"></i>New account</a>
                @endif
            </div>
        </div>
    </div>
@endif


@yield("content")
<div class="footer">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-5">
            <div class="d-flex footer_text">
                <p class="p_md fw-normal lh-sm text-white opacity-25"><a href="{{route("all_airports")}}">Airports</a></p>
                <p class="p_md fw-normal lh-sm text-white opacity-25 mx-4"><a href="{{route("all_news")}}">News</a></p>
                <p class="p_md fw-normal lh-sm text-white opacity-25"><a href="{{route('contact')}}">Contacts</a></p>
            </div>
            <div>
                <img src="/image/logo-footer.svg">
            </div>
            <p class="p_md fw-normal lh-sm text-white opacity-25 footer_text">order@darkwing-catering.com</p>
        </div>
        <hr>
        <p class="p_small fw-normal lh-sm text-center text-gray-6 text-uppercase py-4">Copyright 2020 Darkwing Catering.
            All Rights Reserved</p>
    </div>
</div>

@livewireScripts
<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>

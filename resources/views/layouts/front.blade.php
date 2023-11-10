<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("title","Darkwing - Luxury catering around the world")</title>
    <meta name="description"
          content="@yield("title","We are here to provide you the best quality catering service during your stay and departure")">
    {{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
    {{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    <link
        media="print" onload="this.onload=null;this.removeAttribute('media');"
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link media="print" onload="this.onload=null;this.removeAttribute('media');" href="/fonts/stylesheet.css"
          rel="stylesheet">
    <meta name="google-site-verification" content="yUUk86mYjY7_atnvCUMdKXSZYAm1Yq0TD3IEmI6jvJ4" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7JSZLYMV5S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7JSZLYMV5S');
    </script>
    <link rel="icon" type="image/x-icon" href="/favico.ico">

    <link rel="stylesheet" type="text/css" href="/css/first.css">
    <link media="print" onload="this.onload=null;this.removeAttribute('media');" rel="stylesheet" type="text/css"
          href="/css/lib.css">
    <link media="print" onload="this.onload=null;this.removeAttribute('media');" rel="stylesheet" type="text/css"
          href="/css/style.css">
    <link media="print" onload="this.onload=null;this.removeAttribute('media');" rel="stylesheet" type="text/css"
          href="/css/responsive.css">
    @livewireStyles
</head>
<body style="background-image: url(@yield('body_bg','/image/bggg.webp'))">
{{--<div class="preloader-wrapper">--}}
{{--    <div class="circle-loader">--}}
{{--        <div class="circle circle_four"></div>--}}
{{--        <div class="circle circle_three"></div>--}}
{{--        <div class="circle circle_two"></div>--}}
{{--        <div class="circle circle_one"></div>--}}
{{--        <script>--}}
{{--            setTimeout(function (){--}}
{{--                document.querySelector(".circle_one").classList.add("c_animate");--}}
{{--            },10);--}}

{{--            setTimeout(function (){--}}
{{--                document.querySelector(".circle_two").classList.add("c_animate");--}}
{{--            },200);--}}

{{--            setTimeout(function (){--}}
{{--                document.querySelector(".circle_three").classList.add("c_animate");--}}
{{--            },400);--}}

{{--            setTimeout(function (){--}}
{{--                document.querySelector(".circle_four").classList.add("c_animate");--}}
{{--            },600);--}}
{{--        </script>--}}
{{--    </div>--}}
{{--</div>--}}
@if(\Request::route()->getName() == "index" || \Illuminate\Support\Facades\Route::is("show_airport"))
    <div class="bg_header @if(\Illuminate\Support\Facades\Route::is("show_airport")) airport_show @endif"
         style="background-image: url(@yield('header_bg','/image/bggg.webp')">
        <div class="header d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="{{route('index')}}"><img alt="darkwinginflight" src="/image/logo.png" width="140px" height="80px" class="w-100 h-100"></a>
            </div>
            <div class="header_menu">
                <ul class="navbar">
                    <li class="nav-item"><a class="nav-link text-uppercase text-gray-1"
                                            href="{{route("all_airports")}}">Airports</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase text-gray-1" href="{{route("all_news")}}">News</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-uppercase text-gray-1" href="{{route("partnership")}}">Partnerships</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-uppercase text-gray-1" href="{{route("contact")}}">Contacts</a>
                    </li>
                </ul>
            </div>
            <div class="mobile_menu">
                <div style="display: inline-block;margin-right: 5px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M4 12H20" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4 6H20" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4 18H20" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="mobile_menu_open text-start">
                <ul>
                    <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("all_airports")}}">Airports</a>
                    </li>
                    <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("all_news")}}">News</a></li>
                    <li class="p_md"><a class="text-uppercase text-gray-1"
                                        href="{{route("partnership")}}">Partnerships</a></li>
                    <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("contact")}}">Contacts</a></li>
                </ul>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <p class="text-gray-1 p_md d-flex align-items-center">
                        <a href="{{route('account')}}">Account</a>
                    </p>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <p class="text-gray-1 p_md d-flex align-items-center">
                            <a onclick="this.parentNode.parentNode.submit()"><i class="icon-Login account_icon"></i>Logout</a>
                        </p>
                    </form>
                @else
                    <p class="text-gray-1 p_md d-flex align-items-center">
                        <a href="{{route('login')}}"><i class="icon-Login account_icon"></i>Log in</a>
                    </p>
                    <p class="text-gray-1 p_md d-flex align-items-center">
                        <a href="{{route('register')}}"><i class="icon-User account_icon"></i>New account</a>
                    </p>
                @endif

            </div>

            <div class="account">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{route('account')}}" class="btn btn-sm text-white btn-outline-light">Account</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-sm text-white btn-outline-light">
                            <a onclick="this.parentNode.parentNode.submit()"><i class="icon-Login account_icon"></i>Logout</a>
                        </button>
                    </form>
                @else
                    <button class="btn btn-sm text-white btn-outline-light">
                        <a href="{{route('login')}}"><i class="icon-Login account_icon"></i>Log in</a>
                    </button>
                    <button class="btn-sm text-gray-9 border-0 btn-white">
                        <a href="{{route('register')}}"><i class="icon-User account_icon"></i>New account</a>
                    </button>
                @endif
            </div>
        </div>
        @yield("header_content")
    </div>
@else
    <div class="header d-flex justify-content-between align-items-center">
        <div class="logo">
            <a href="{{route('index')}}"><img alt="darkwinginflight" src="/image/logo.png"></a>
        </div>
        <div class="header_menu ">
            <ul class="navbar">
                <li class="nav-item "><a class="nav-link text-uppercase text-gray-1" href="{{route("all_airports")}}">Airports</a>
                </li>
                <li class="nav-item "><a class="nav-link text-uppercase text-gray-1"
                                         href="{{route("all_news")}}">News</a></li>
                <li class="nav-item "><a class="nav-link text-uppercase text-gray-1" href="{{route("partnership")}}">Partnerships</a>
                </li>
                <li class="nav-item "><a class="nav-link text-uppercase text-gray-1" href="{{route("contact")}}">Contacts</a>
                </li>
            </ul>
        </div>
        <div class="mobile_menu">
            <img alt="darkwinginflight" src="/image/menu.svg" style="margin-right: 5px">
        </div>
        <div class="mobile_menu_open text-start">
            <ul>
                <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("all_airports")}}">Airports</a>
                </li>
                <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("all_news")}}">News</a></li>
                <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("partnership")}}">Partnerships</a>
                </li>
                <li class="p_md"><a class="text-uppercase text-gray-1" href="{{route("contact")}}">Contacts</a></li>
            </ul>
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="{{route('account')}}" class="btn btn-sm text-white btn-outline-light">Account</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <p class="text-gray-1 p_md d-flex align-items-center">
                        <a onclick="this.parentNode.parentNode.submit()"><i
                                class="icon-Login account_icon"></i>Logout</a>
                    </p>
                </form>
            @else
                <p class="text-gray-1 p_md d-flex align-items-center">
                    <a href="{{route('login')}}"><i class="icon-Login account_icon"></i>Log in</a>
                </p>
                <p class="text-gray-1 p_md d-flex align-items-center">
                    <a href="{{route('register')}}"><i class="icon-User account_icon"></i>New account</a>
                </p>
            @endif
        </div>

        <div class="account">
            <div class="account">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{route('account')}}" class="btn btn-sm text-white btn-outline-light">Account</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-sm text-white btn-outline-light"><i class="icon-Login account_icon"></i>Logout
                        </button>
                    </form>
                @else
                    <a href="{{route('login')}}" class="btn btn-sm text-white btn-outline-light"><i
                            class="icon-Login account_icon"></i>Log in</a>
                    <a href="{{route('register')}}" class="btn-sm text-gray-9 border-0 btn-white"><i
                            class="icon-User account_icon"></i>New account</a>
                @endif
            </div>
        </div>
    </div>
@endif

<div class="main_wrapper">
    @yield("content")
</div>
<div class="footer">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-5 flex-column flex-lg-row">
            <div class="d-flex footer_text">
                <p class="p_md fw-normal lh-sm text-white opacity-25"><a href="{{route("all_airports")}}">Airports</a>
                </p>
                <p class="p_md fw-normal lh-sm text-white opacity-25 mx-4"><a href="{{route("all_news")}}">News</a></p>
                <p class="p_md fw-normal lh-sm text-white opacity-25 me-4"><a href="{{route('contact')}}">Contacts</a>
                </p>
                <p class="p_md fw-normal lh-sm text-white opacity-25">
                    <span style="cursor: pointer;position:relative;top: 5px" onclick="window.location.href='https://www.instagram.com/darkwinginflight/'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <g clip-path="url(#clip0_2605_309)">
                                <path
                                    d="M12.6377 0H5.3623C2.40551 0 0 2.40551 0 5.3623V12.6377C0 15.5945 2.40551 18 5.3623 18H12.6377C15.5945 18 18 15.5945 18 12.6377V5.3623C18 2.40551 15.5945 0 12.6377 0ZM16.1892 12.6377C16.1892 14.5991 14.5991 16.1892 12.6377 16.1892H5.3623C3.40088 16.1892 1.8108 14.5991 1.8108 12.6377V5.3623C1.8108 3.40084 3.40088 1.8108 5.3623 1.8108H12.6377C14.5991 1.8108 16.1892 3.40084 16.1892 5.3623V12.6377Z"
                                    fill="white"/>
                                <path
                                    d="M8.99997 4.34448C6.43296 4.34448 4.34453 6.43291 4.34453 8.99989C4.34453 11.5669 6.43296 13.6553 8.99997 13.6553C11.567 13.6553 13.6554 11.5669 13.6554 8.99989C13.6554 6.43288 11.567 4.34448 8.99997 4.34448ZM8.99997 11.8446C7.4289 11.8446 6.15533 10.571 6.15533 8.99992C6.15533 7.42886 7.42894 6.15528 8.99997 6.15528C10.571 6.15528 11.8446 7.42886 11.8446 8.99992C11.8446 10.571 10.571 11.8446 8.99997 11.8446Z"
                                    fill="white"/>
                                <path
                                    d="M13.6645 5.495C14.2806 5.495 14.7801 4.99555 14.7801 4.37946C14.7801 3.76336 14.2806 3.26392 13.6645 3.26392C13.0484 3.26392 12.549 3.76336 12.549 4.37946C12.549 4.99555 13.0484 5.495 13.6645 5.495Z"
                                    fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2605_309">
                                    <rect width="18" height="18" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span></p>
            </div>
            <div class="my-3 mt-lg-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="126"
                     height="40" viewBox="0 0 126 40" fill="none">
                    <rect opacity="0.35" width="126" height="40" fill="url(#pattern0)"/>
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_2024_331"
                                 transform="translate(-0.00448585) scale(0.00690131 0.0217391)"/>
                        </pattern>
                        <image id="image0_2024_331" width="298" height="46"
                               xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
            </div>
            <p class="p_md fw-normal lh-sm text-white opacity-25 footer_text">
                <a href="mailto:Order@darkwinginflight.com">Order@darkwinginflight.com</a>
            </p>
        </div>
        <hr>
        <p class="p_small fw-normal lh-sm text-center text-gray-6 text-uppercase py-4">
            Copyright {{ \Illuminate\Support\Carbon::now()->year }} Darkwing Catering.
            All Rights Reserved</p>
    </div>
</div>

@if($errors->any())
    @foreach($errors->all() as $error)
        <script>console.log($error)</script>
    @endforeach
@endif
@livewireScripts
{{--<script src="/js/jquery-3.6.0.min.js"></script>--}}
{{--<script src="/js/owl.carousel.min.js"></script>--}}

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>

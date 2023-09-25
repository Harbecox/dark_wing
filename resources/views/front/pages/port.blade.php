@extends('layouts.front')
@section('title') {{ $airport->meta_title }} @endsection
@section('description') {{ $airport->meta_description }} @endsection
@section('header_bg')
    {{ Storage::url($airport->bg_image) }}
@endsection

@section("header_content")
    <style>
        h1{
            font-size: 2.5rem;
        }
    </style>
    <div class="bg_shadow"></div>
    <div class="header_content">
        <div class="container">
            <div class="d-flex flex-column align-items-center port_main">
                <p class="p_md fw-bold lh-sm text-uppercase text-white text_back" style="opacity: 0.7">
                    <a href="{{route('all_airports')}}" class="d-flex align-items-center"><i class="icon-Line"></i>back</a>
                </p>
                <div class="d-flex flex-column align-items-center port_title">
                    <h4 class="fw-normal text-uppercase text-gray-4 text-center tenor">VIP PRIVATE JET
                        CATERING</h4>
                    <div class="d-flex align-items-center">
                        <div class="circle">
                            <img src="{{ Storage::url($airport->info->country->flag) }}">
                        </div>
                        <h1 class="fw-normal lh-1 text-white text-uppercase tenor"
                            style="letter-spacing: -0.08em;">{{ $airport->title }} ({{ $airport->info->icao }}, {{ $airport->info->iata }})</h1>
                    </div>
                </div>
                <div class="airport_info">
                    <h5 class="fw-normal text-center text-white text-uppercase tenor" style="letter-spacing: -2.28px;">
                        Airport Information</h5>
                    <div class="d-lg-flex d-block justify-content-between">
                        <div class="info_text">
                            <p class="fw-normal fs-22 text-white lh-sm">City : {{ $airport->info->city }}</p>
                            <p class="fw-normal fs-22 text-white lh-sm">Country : {{ $airport->info->country->name }}</p>
                            <p class="fw-normal fs-22 text-white lh-sm">Continent : {{ $airport->info->continent }}</p>
                        </div>
                        <div class="info_text">
                            <p class="fw-normal fs-22 text-white lh-sm text-nowrap">Airport : {{ $airport->title }} </p>
                            <p class="fw-normal fs-22 text-white lh-sm">ICAO : {{ $airport->info->icao }}</p>
                            <p class="fw-normal fs-22 text-white lh-sm">IATA : {{ $airport->info->iata }}</p>
                        </div>
                        <div class="info_text">
                            <p class="fw-normal fs-22 text-white lh-sm">Country Code : {{ $airport->info->country->code }}</p>
                            <p class="fw-normal fs-22 text-white lh-sm">Latitude : {{ $airport->info->latitude }}</p>
                            <p class="fw-normal fs-22 text-white lh-sm">Longitude : {{ $airport->info->longitude }}</p>
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <div class="d-flex justify-content-center top_buttons">
                        <a href="{{route('order')}}" class="btn text-white text-uppercase">
                            <span class="pnt">~</span>Order<span class="pnt">~</span>
                        </a>
                        <a onclick="scrollToMenu()" class="btn btn-outline-light text-white text-uppercase">
                            <span class="pnt">~</span>Menu<span class="pnt">~</span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection



@section('content')
    <div class="container">
        <div class="port_text">
            <div class="port_text_title">
                <h5 class="fw-normal text-white text-uppercase text-center tenor" style="letter-spacing: -3.04px;">
                    ELEVATING YOUR PRIVATE
                    AVIATION EXPERIENCE WITH DARK WING INFLIGHT</h5>
                <h5 class="fw-normal text-white text-center fs-30">a leading VIP Private Jet
                    Catering worldwide</h5>
                <h5 class="fw-normal text-white text-uppercase text-center tenor" style="letter-spacing: -3.04px;">Why
                    choose DARK WING
                    INFLIGHT</h5>
            </div>
{{--            <x-airport-description :airport="$airport"></x-airport-description>--}}
            {!! $airport->description !!}
            <div class="port_text_footer">
                <div class="simvol_title d-flex flex-column align-items-center" style="margin-bottom: 41px">
                    <div class="simvol_image"><img src="/image/simvol.png"></div>
                    <p class="fw-normal fs-30 lh-sm text-gray-6 text-center">Contact the Dark Wing
                        Inflight private jet catering team at <span>{{ $airport->title }} ({{ $airport->info->icao }}, {{ $airport->info->iata }}) in {{ $airport->info->city }}</span> to discuss
                        your culinary desires and place orders at <a href="#">order@darkwinginflight.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="simvol_title d-flex flex-column align-items-center" style="margin-bottom: 41px">
            <div class="simvol_image"><img src="/image/simvol.png"></div>
            <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor">Our Menu</h2>
        </div>
        <div class="owl-menu-cards owl-carousel owl-theme position-relative">
            @foreach($menu_images as $menu)
                <div class="item">
                    <div class="menu_card">
                        <img src={{Storage::url($menu->image)}}>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href="{{ route("download_menu") }}" class="btn btn-outline-light text-white text-uppercase"
               style="width: 320px">
                <span class="pnt">~</span>Download Menu<span class="pnt">~</span>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="port_airports_search">
            <div class="simvol_title d-flex flex-column align-items-center">
                <div class="simvol_image"><img src="/image/simvol.png"></div>
                <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor">AIRPORT SEARCH</h2>
            </div>
            <div class="airport_search_steps" style="background-image: url(/image/fon.svg)">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="d-flex flex-column align-items-center pb-5 pb-lg-0">
                            <h2 class="fw-normal text-white lh-1 text-uppercase">1</h2>
                            <h6 class="fw-normal text-white lh-sm " style="letter-spacing: -0.56px;">CHOOSE AIRPORT</h6>
                            <p class="fw-normal text-gray-4 lh-sm fs-22 text-center">by Continent, ICAO, IATA or City</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="d-flex flex-column align-items-center pb-5 pb-lg-0">
                            <h2 class="fw-normal text-white lh-1 text-uppercase">2</h2>
                            <h6 class="fw-normal text-white lh-sm " style="letter-spacing: -0.56px;">REQUEST & CONFIRM QUOTE</h6>
                            <p class="fw-normal text-gray-4 lh-sm fs-22 text-center">contact us directly via email
                                <a class="fw-bold" href="#">order@darkwinginflight.com</a> or
                                WhatsApp <a class="fw-bold" href="#">+33638888695</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <h2 class="fw-normal text-white lh-1 text-uppercase">3</h2>
                            <h6 class="fw-normal text-white lh-sm " style="letter-spacing: -0.56px;">RECEIVE CATERING TO YOUR JET</h6>
                            <p class="fw-normal text-gray-4 lh-sm fs-22 text-center">and enjoy your VIP meal under the sky</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center">
                <a href="/airports" class="btn text-white text-uppercase all_airports">
                    <span class="pnt">~</span>ALL AIRPORTS<span class="pnt">~</span>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let h = document.querySelector(".port_main").clientHeight;
            let w = document.querySelector(".port_main").clientWidth;
            if (w < 700) {
                h = h - 200;
                h = h + "px";
                document.querySelector(".bg_header").style.height = h;
                document.querySelector(".bg_shadow").style.height = h;
                document.querySelector(".header_content").style.height = h;
            }
        });
    </script>
    <style>
        .main_wrapper{
            margin-top: 0!important;
        }
        .bg_header.airport_show {
            background-position: top center;
            background-size: cover!important;
        }
    </style>
    <x-contact></x-contact>
@endsection



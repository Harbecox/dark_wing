@extends('layouts.front')
@section('title') VIP Catering for private jets {{ $airport->title }} {{ $airport->OACI }} {{ $airport->IATA }} Airport @endsection
@section('description') We provide VIP catering in {{ $airport->title }} {{ $airport->OACI }} {{ $airport->IATA }} airport. Best catering solution for your VIP pax @endsection
@section('header_bg')
    {{ Storage::url($airport->bg_image) }}
@endsection

@section("header_content")
    <div class="bg_shadow"></div>
    <div class="header_content">
        <div class="container">
            <div class="d-flex flex-column align-items-center port_main">
                <p class="p_md fw-bold lh-sm text-uppercase text-white text_back" style="opacity: 0.7">
                    <a href="{{route('all_airports')}}" class="d-flex align-items-center"><i class="icon-Line"></i>back</a></p>
                <div class="d-flex align-items-center port_title">
                    <div class="circle">
                        <img src="{{ Storage::url($airport->country->flag) }}">
                    </div>
                    <h1 class="fw-normal lh-1 text-white text-uppercase tenor" style="letter-spacing: -0.08em;">{{ $airport->title }}, {{ $airport->IATA }}</h1>
                </div>
                <div class="p_lg fw-normal lh-sm text-white text-center pb-4">
                    <i class="icon-at-sign"></i>
                    {!! $airport->description !!}
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
            <a href="{{ route("download_menu") }}" class="btn btn-outline-light text-white text-uppercase" style="width: 320px">
                <span class="pnt">~</span>Download Menu<span class="pnt">~</span>
            </a>
        </div>
    </div>

    <div class="container">
        <div class="port_airports">
            <div class="simvol_title d-flex flex-column align-items-center">
                <div class="simvol_image"><img src="/image/simvol.png"></div>
                <h3 class="fw-normal lh-1 text-white text-uppercase  text-center tenor" style="letter-spacing: -0.06em;">
                    Other airports</h3>
            </div>
            <div class="owl-city owl-carousel owl-theme">
                @foreach($airports as $airport)
                    <div class="item">
                        <div class="card_city">
                            <div class="city_shadow"></div>
                            <img src='{{ Storage::url($airport->image) }}'>
                            <div class="flag">
                                <img src="{{ Storage::url($airport->country->flag) }}">
                            </div>
                            <div class="city_name">
                                <h5 class="fw-normal lh-sm text-white"><a href="{{ route("show_airport",$airport->id) }}" >{{ $airport->title }}, {{ $airport->IATA }}</a></h5>
                                <p class="p_sm text-white lh-sm fw-normal opacity-75">{{ $airport->country->name }}</p>
                                <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                    <a class="d-flex align-items-center" href="{{ route("show_airport",$airport->id) }}">Open<i class="icon-Line-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="p_md fw-bold lh-sm text-gray-6 text-center text-uppercase pt-1"><a href="{{ route("all_airports") }}">All airports</a></p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            let h = document.querySelector(".port_main").clientHeight;
            let w = document.querySelector(".port_main").clientWidth;
            if( w < 700 ){
                h = h - 200;
                h = h + "px";
                document.querySelector(".bg_header").style.height = h;
                document.querySelector(".bg_shadow").style.height = h;
                document.querySelector(".header_content").style.height = h;
            }
        });

    </script>
    <x-contact></x-contact>
@endsection



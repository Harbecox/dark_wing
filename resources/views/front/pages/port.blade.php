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
                    <a href="{{route('all_airports')}}" class="d-flex align-items-center"><i class="icon-Line"></i>back</a>
                </p>
                <div class="d-flex flex-column align-items-center port_title">
                    <h1 class="fw-normal fs-67 text-uppercase text-gray-4 text-center tenor">VIP PRIVATE JET
                        CATERING</h1>
                    <div class="d-flex align-items-center">
                        <div class="circle">
                            <img src="{{ Storage::url($airport->country->flag) }}">
                        </div>
                        <h1 class="fw-normal lh-1 text-white text-uppercase tenor fs-67"
                            style="letter-spacing: -0.08em;">{{ $airport->title }}, {{ $airport->IATA }}</h1>
                    </div>
                </div>
                <div class="airport_info">
                    <h5 class="fw-normal text-center text-white text-uppercase tenor" style="letter-spacing: -2.28px;">
                        Airport Information</h5>
                    <div class="d-lg-flex d-block">
                        <div class="info_text">
                            <p class="fw-normal fs-22 text-white lh-sm">City : Nice</p>
                            <p class="fw-normal fs-22 text-white lh-sm">Country : France</p>
                            <p class="fw-normal fs-22 text-white lh-sm">Continent : Europe</p>
                        </div>
                        <div class="info_text">
                            <p class="fw-normal fs-22 text-white lh-sm">Airport : Nice-Côte d'Azur Airport </p>
                            <p class="fw-normal fs-22 text-white lh-sm">ICAO : LFMN</p>
                            <p class="fw-normal fs-22 text-white lh-sm">IATA : NCE</p>
                        </div>
                        <div class="info_text">
                            <p class="fw-normal fs-22 text-white lh-sm">Country Code : FR</p>
                            <p class="fw-normal fs-22 text-white lh-sm">Latitude : 43,665</p>
                            <p class="fw-normal fs-22 text-white lh-sm">Longitude : 7,215</p>
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
            <div class="port_text_main">
                <div class="port_section">
                    <p class="section_title">for your VIP private jet catering at <span>Nice-Côte d'Azur Airport (LFMN, NCE) in Nice</span>
                    </p>
                    <div class="section_main">
                        <div class="row">
                            <div class="col-12">
                                <div class="section_img">
                                    <img src="/image/section1___.png">
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="section_text">Welcome to Dark Wing Inflight, offering the finest inflight
                                    dining
                                    experience in <span>Nice,
                            LFMN, NCE</span>. We are dedicated to providing tailored VIP inflight catering for your
                                    private jet at<span> Nice-Côte d'Azur Airport (LFMN, NCE) in Nice</span>. Dark Wing
                                    Inflight
                                    redefines luxury aviation catering, making the ordering process easy and stress-free
                                    for
                                    flight attendants. We offer executive gourmet in-flight meals, customizable menus,
                                    fivestar
                                    private jet cuisine, and a private jet concierge service in <span>Nice, LFMN</span>.
                                    Thanks to
                                    our
                                    commitment to impeccable service and exceptional quality, we deliver premium gourmet
                                    meals directly to your jet in <span>Nice, NCE</span>. </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="port_section">
                    <p class="section_title">Local VIP private kitchen with high-quality meals at <span>Nice-Côte d'Azur Airport
                        (LFMN, NCE) in Nice</span></p>
                    <div class="section_main">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="section_img">
                                    <img src="/image/section2.png">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <p class="section_text">Our kitchen, designed for premium private jet
                                    catering at <span>Nice-Côte d'Azur Airport (LFMN,
                                        NCE) in Nice</span>, is under the watchful guidance of
                                    our head chef and his experienced team. Dark Wing
                                    Inflight's executive aviation culinary experts in <span>Nice,
                                        NCE</span>, boast extensive years of experience spanning
                                    fine dining restaurants, luxury hotels, exclusive VIP
                                    private events, and tailored private aviation catering.
                                    This expertise empowers Dark Wing Inflight to
                                    proudly deliver a Michelin-star private jet dining
                                    experience to the executive aviation industry.
                                    Through this culinary mastery, we stand ready to
                                    create the finest in inflight dining, ensuring every
                                    passenger enjoys a VIP inflight culinary experience.
                                    The commitment to excellence allows Dark Wing
                                    Inflight to effortlessly deliver exclusive fine dining
                                    cuisine to private jets in <span>Nice, LFMN</span>, while
                                    maintaining an impeccable level of quality. </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="port_section">
                    <p class="section_title">Tailored menus and personalized cuisine for your private jet catering
                        orders at
                        <span>Nice-Côte d'Azur Airport (LFMN, NCE) in Nice</span></p>
                    <div class="section_main">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <p class="section_text">At Dark Wing Inflight, our head chef and skilled team in <span>Nice</span>
                                    specialize in crafting customized menus that exceed expectations. Each meal is
                                    thoughtfully curated to perfectly match individual preferences. Whether it's a
                                    preference for specific flavors, dietary restrictions, or cultural influences, our
                                    team is dedicated to delivering a dining experience at <span>Nice-Côte d'Azur Airport
                                        (LFMN, NCE) in Nice</span>.</p>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="section_img">
                                    <img src="/image/section3.png">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="port_section">
                    <p class="section_title">Private aviation experts in <span>Nice, LFMN</span>, available 24/7, 365
                        days a year to
                        fulfill your catering orders</p>
                    <div class="section_main">
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <div class="section_img">
                                    <img src="/image/section4.png">
                                </div>
                            </div>
                            <div class="col-lg-7 col-12">
                                <p class="section_text">Dark Wing Inflight is proud to have a multilingual team with
                                    years of experience in the Bizav industry, encompassing both aviation catering and
                                    gourmet cuisine. This team coordinates all private aviation catering orders at
                                    <span>Nice-Côte d'Azur Airport (LFMN, NCE) in Nice</span>. They are available 24/7,
                                    365 days a
                                    year to respond to catering orders and flawlessly process premium requirements for
                                    your private jet in <span>Nice, NCE</span>. Their dedication ensures that every dish
                                    is a
                                    masterpiece, crafted to perfection, tailored to meet VIP clients' needs, and Nice,
                                    LFMN, delivered on time to your private jet.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="port_section">
                    <p class="section_title">VIP concierge service for private aviation at <span>Nice-Côte d'Azur Airport
                            (LFMN, NCE) in Nice</span>, including onboard delivery</p>
                    <div class="section_main">
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <p class="section_text">Dark Wing Inflight's concierge team provides a VIP inflight
                                    concierge service for private aviation in <span>Nice, LFMN</span>, assisting private
                                    jet flight
                                    attendants with cabin preparations. Whether you need a pick-up service from your
                                    client's favorite shops, restaurants, and hotels in <span>Nice, NCE</span>, our team
                                    is at your
                                    disposal to make your journey a seamless and luxurious experience.</p>
                            </div>
                            <div class="col-lg-5 col-12">
                                <div class="section_img">
                                    <img src="/image/section5.png">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="port_section">
                    <p class="section_title">Seamless ordering process, operational excellence, and timely delivery of
                        your private jet catering orders at <span>Nice-Côte d'Azur Airport (LFMN, NCE) in Nice</span>
                    </p>
                    <div class="section_main">
                        <div class="row">
                            <div class="col-12">
                                <p class="section_text">Punctuality is paramount in private aviation. At Dark Wing
                                    Inflight, we understand this critical aspect and have incorporated it into every
                                    facet of our service. Our streamlined and user-friendly ordering process, combined
                                    with our unwavering commitment to timely delivery, guarantees that your carefully
                                    curated jet meals arrive at your aircraft precisely when you need them in
                                    <span>Nice</span>.</p>
                            </div>
                            <div class="col-12">
                                <div class="section_img">
                                    <img src="/image/section6.png">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="port_text_footer">
                <div class="simvol_title d-flex flex-column align-items-center" style="margin-bottom: 41px">
                    <div class="simvol_image"><img src="/image/simvol.png"></div>
                    <p class="fw-normal fs-30 lh-sm text-gray-6 text-center">Contact the Dark Wing
                        Inflight private jet catering team at <span>Nice-Côte d'Azur Airport (LFMN, NCE) in Nice</span> to discuss
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
                <a class="btn text-white text-uppercase all_airports">
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
    <x-contact></x-contact>
@endsection



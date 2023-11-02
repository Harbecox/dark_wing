@extends('layouts.front')
@section('title') Dark Wing inflight luxury catering around the world @endsection
@section('description') We Provide luxury catering for private jets around the world. Best catering solution on the market @endsection
@section('header_bg')
    'image/БГ-.webp'
@endsection

@section("header_content")
    <div class="luxury position-relative">
        <div class="container position-relative" style="min-height: 760px">
            <div class="header_map header_map_home">
            </div>
            <div class="position-absolute luxury_title">
                <h1 class="fw-normal lh-1 text-white text-uppercase text-center tenor">{{ $texts['index']['h1'] }}</h1>
                <p class="luxury_text p_lg fw-normal lh-sm  text-white text-center">{!! $texts['index']['under h1'] !!}</p>
            </div>
            <div class="d-flex justify-content-center top_buttons">
                <a href="{{route('order')}}" class="btn text-white text-uppercase">
                    <span class="pnt">~</span>Order<span class="pnt">~</span>
                </a>
                <a onclick="scrollToMenu()" class="btn btn-outline-light text-white text-uppercase">
                    <span class="pnt">~</span>Menu<span class="pnt">~</span></a>
            </div>
        </div>
        @endsection

        @section('content')
            <div class="airport">
                <div class="container" style="margin-bottom: 120px">
                    <div>
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
                                        <p class="fw-normal text-gray-4 lh-sm fs-22 text-center px-5 px-lg-0">
                                            <a href="#contacts">click here to contact us</a>
                                            <a class="fw-bold" href="mailto:order@darkwinginflight.com">order@darkwinginflight.com</a> or
                                            <a class="fw-bold" href="https://api.whatsapp.com/send?phone=33638888695">WhatsApp</a></p>
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
                <div class="about" style="background-image: url('/image/about_bg.webp')">
                    <div class="container">
                        <div class="about_main">
                            <div class="simvol_title d-flex flex-column align-items-center">
                                <div class="simvol_image"><img src="/image/simvol.png"  width="auto" height="auto"></div>
                                <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor">About us</h2>
                            </div>
                            <p class="p_lg fw-normal text-gray-5 lh-sm text-center pt-3">{!! $texts['index']['index about'] !!}</p>
                            <div class="position-relative about_image">
                                <img src="/image/bg_2.webp" class="w-100 h-100" width="1200px" height="300px">
                                <p class="p_sm fw-normal lh-sm text-white position-absolute"
                                   style="bottom: 160px; left: 130px">Quality</p>
                                <p class="p_sm fw-normal lh-sm text-white position-absolute"
                                   style="top: 180px; left: 300px">Cost</p>
                                <p class="p_sm fw-normal lh-sm text-white position-absolute"
                                   style="top: 210px; left: 455px">Network</p>
                                <p class="p_sm fw-normal lh-sm text-white position-absolute"
                                   style="bottom: 235px; right: 425px">Analysis</p>
                                <p class="p_sm fw-normal lh-sm text-white position-absolute"
                                   style="top: 187px; right: 370px">Team</p>
                                <p class="p_sm fw-normal lh-sm text-white position-absolute"
                                   style="top: 130px; right: 285px">Billing</p>
                            </div>
                            <div class="owl-text owl-carousel owl-theme mt-3 mt-lg-0">
                                <div class="item">
                                    <div>
                                        <h4 class="fw-normal lh-sm text-white text-center">Quality</h4>
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3 pt-3">{!! $texts['index']['Quality'] !!}</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <h4 class="fw-normal lh-sm text-white text-center">Cost</h4>
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3">{!! $texts['index']['Cost'] !!}</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <h4 class="fw-normal lh-sm text-white text-center">Network</h4>
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3">{!! $texts['index']['Network'] !!}</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <h4 class="fw-normal lh-sm text-white text-center">Analysis</h4>
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3">{!! $texts['index']['Analysis'] !!}</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <h4 class="fw-normal lh-sm text-white text-center">Team</h4>
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3">{!! $texts['index']['Team'] !!}</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <h4 class="fw-normal lh-sm text-white text-center">Billing</h4>
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3">{!! $texts['index']['Billing'] !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu"></div>

                <div class="container">
                    <div class="partners">
                        <div class="simvol_title d-flex flex-column align-items-center">
                            <div class="simvol_image"><img src="/image/simvol.png"></div>
                            <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor">Our partners</h2>
                        </div>
                        <p class="p_lg fw-normal text-gray-5 lh-sm text-center our-partners-index">{!! $texts['index']['OUR PARTNERS'] !!}</p>
                        <div class="row">
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100 h-100" src="image/hotel_1.png"  width="200px" height="200px"></div>
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100 h-100" src="image/hotel_2.png"  width="200px" height="200px"></div>
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100 h-100" src="image/hotel_3.png"  width="200px" height="200px"></div>
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100 h-100" src="image/hotel_4.png"  width="200px" height="200px"></div>
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100 h-100" src="image/hotel_5.png"  width="200px" height="200px"></div>
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100 h-100" src="image/hotel_6.png"  width="200px" height="200px"></div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div id="news"></div>
                </div>
            </div>

            <x-contact></x-contact>
@endsection

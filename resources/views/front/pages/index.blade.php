@extends('layouts.front')
@section('title') Dark Wing inflight luxury catering around the world @endsection
@section('description') We Provide luxury catering for private jets around the world. Best catering solution on the market @endsection
@section('header_bg')
    'image/БГ-.jpg'
@endsection

@section("header_content")
    <div class="luxury position-relative">
        <div class="container position-relative" style="min-height: 760px">
            <div class="header_map" style="background-image: url('image/10.png');">
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
                                        <p class="fw-normal text-gray-4 lh-sm fs-22 text-center px-5 px-lg-0">contact us directly via email
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
                <div class="about" style="background-image: url('/image/about_bg.jpg')">
                    <div class="container">
                        <div class="about_main">
                            <div class="simvol_title d-flex flex-column align-items-center">
                                <div class="simvol_image"><img src="/image/simvol.png"></div>
                                <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor">About us</h2>
                            </div>
                            <p class="p_lg fw-normal text-gray-5 lh-sm text-center pt-3">{!! $texts['index']['index about'] !!}</p>
                            <div class="position-relative about_image">
                                <img src="/image/bg_2.png">
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
                <div class="menu">
                    <div class="simvol_title d-flex flex-column align-items-center" style="margin-bottom: 41px">
                        <div class="simvol_image"><img src="/image/simvol.png"></div>
                        <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor">Our Menu</h2>
                    </div>
                    <div class="owl-menu-cards owl-carousel owl-theme position-relative">
                        @foreach($menu_images as $image)
                            <div class="item">
                                <div class="menu_card">
                                    <img src={{Storage::url($image->image)}}>
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
                    <div class="partners">
                        <div class="simvol_title d-flex flex-column align-items-center">
                            <div class="simvol_image"><img src="/image/simvol.png"></div>
                            <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor">Our partners</h2>
                        </div>
                        <p class="p_lg fw-normal text-gray-5 lh-sm text-center our-partners-index">{!! $texts['index']['OUR PARTNERS'] !!}</p>
                        <div class="row">
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100" src="image/hotel_1.png"></div>
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100" src="image/hotel_2.png"></div>
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100" src="image/hotel_3.png"></div>
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100" src="image/hotel_4.png"></div>
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100" src="image/hotel_5.png"></div>
                            <div class="col-lg-2 col-6 align-items-center"><img class="opacity-75 w-100" src="image/hotel_6.png"></div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="news">
                        <div class="simvol_title d-flex flex-column align-items-center pb-5">
                            <div class="simvol_image"><img src="/image/simvol.png"></div>
                            <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor">News</h2>
                        </div>

                        <div class="owl-info-cards owl-carousel owl-theme">
                            @foreach($posts as $post)
                                <div class="item">
                                    <div class="card card_info">
                                        <img src={{Storage::url($post->image)}} class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <span
                                                class="span_sm fw-normal lh-sm text-gray-7">{{ $post->created_at->toFormattedDateString() }}</span>
                                            <p class="p_lg fw-normal lh-1 text-white py-2" style="height: 72px;">{{ $post->title }}</p>
                                            <div style="height: 160px; overflow: hidden"
                                                 class="span_sm fw-normal lh-sm text-gray-5">{!! $post->context !!}</div>
                                            <p class="p_sm fw-bold lh-sm text-uppercase text-gray-5 pt-3"><a
                                                    href="{{ route("show_news",$post->id) }}">Read more</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <p class="p_md fw-bold lh-sm text-gray-6 text-center text-uppercase "><a
                                href="{{ route("all_news") }}">View all</a></p>
                    </div>
                </div>
            </div>

            <x-contact></x-contact>
@endsection

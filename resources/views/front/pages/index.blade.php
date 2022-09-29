@extends('layouts.front')

@section('header_bg')
    'image/БГ-.jpg'
@endsection

@section("header_content")
    <div class="luxury position-relative">
        <div class="container position-relative" style="min-height: 760px">
            <div class="header_map" style="background-image: url('image/10.png');">
            </div>
            <div class="position-absolute luxury_title">
                <h1 class="fw-normal lh-1 text-white text-uppercase text-center tenor">Luxury catering<br>
                    around the world</h1>
                <p class="luxury_text p_lg fw-normal lh-sm  text-white text-center">We are here to provide you the best
                    quality catering<br>service during your stay and departure</p>
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
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor"
                            style="letter-spacing: -0.06em;">
                            Airport Search</h2>
                        <livewire:airports-search/>
                    </div>
                    <div class="owl-city owl-carousel owl-theme">
                        @foreach($airports as $airport)
                            <div class="item">
                                <div class="card_city">
                                    <img src='{{ Storage::url($airport->image) }}'>
                                    <div class="city_shadow"></div>
                                    <div class="flag">
                                        <img src="{{ Storage::url($airport->country->flag) }}">
                                    </div>
                                    <div class="city_name">
                                        <h5 class="fw-normal lh-sm text-white">{{ $airport->title }}</h5>
                                        <p class="p_sm text-white lh-sm fw-normal opacity-75">{{ $airport->country->name }}</p>
                                        <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                            <a class="d-flex align-items-center"
                                               href="{{ route("show_airport",$airport->id) }}">Open<i
                                                    class="icon-Line-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <p class="p_md fw-bold lh-sm text-gray-6 text-center text-uppercase pt-1"><a
                            href="{{ route("all_airports") }}">All airports</a></p>
                </div>
                <div class="about" style="background-image: url('/image/about_bg.jpg')">
                    <div class="container">
                        <div class="about_main">
                            <div class="simvol_title d-flex flex-column align-items-center">
                                <div class="simvol_image"><img src="/image/simvol.png"></div>
                                <h2 class="fw-normal lh-1 text-white text-uppercase  text-center tenor">About us</h2>
                            </div>
                            <p class="p_lg fw-normal text-gray-5 lh-sm text-center pt-3">
                                We are VIP inflight catering specialists working worldwide, with years of experience.
                                We are here to provide you the best quality catering service during your stay and
                                departure.</p>
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
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3 pt-3">We are aware that
                                            it’s easy to make
                                            a mistake in the order because of the multicultural specificities in each
                                            country.
                                            As pancake in Russia and in England differ, we always take into
                                            consideration
                                            cultural background of each client in order to avoid misunderstanding and
                                            provide a “right pancake”.
                                            During the entire delivery process, we are meticulously checking your order
                                            and avoid any errors or
                                            complications.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <h4 class="fw-normal lh-sm text-white text-center">Cost</h4>
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3">We are aware that most
                                            of companies have
                                            limited budget for catering orders. Therefore, due to our long-lasting
                                            partnership with carefully
                                            selected worldwide partners we have negotiated prices for you. Our mission
                                            is to negotiate the best price
                                            on the market on your behalf.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <h4 class="fw-normal lh-sm text-white text-center">Network</h4>
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3">Our goal is to provide
                                            high standard
                                            quality catering service, thanks to our strong network of trusted worldwide
                                            partners. Each partner
                                            is carefully selected as we meticulously adhere to our client requirements
                                            to create the ultimate VIP
                                            experience.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <h4 class="fw-normal lh-sm text-white text-center">Analysis</h4>
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3">For our costumers we
                                            analyze all order
                                            details and help to reduce final fees and costs. This analysis helps us to
                                            optimize your savings for the most
                                            ordered items and we guarantee your highest satisfaction.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <h4 class="fw-normal lh-sm text-white text-center">Team</h4>
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3">Our team comes from
                                            catering units
                                            around the world, we are aware of all nuances in the ordering process and we
                                            take care of all details.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div>
                                        <h4 class="fw-normal lh-sm text-white text-center">Billing</h4>
                                        <p class="p_md fw-normal lh-sm text-center text-gray-3">For our client we can
                                            simplify billing :
                                            - By CB for each order
                                            - By Destination (weekly billing)
                                            - By Aircraft (weekly billing)
                                            - By Period (weekly, monthly)</p>
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
                        <p class="p_lg fw-normal text-gray-5 lh-sm text-center our-partners-index">
                            We are VIP
                            inflight catering specialists working
                            worldwide, with
                            years of experience. We are here to provide you the best quality catering service during
                            your stay and
                            departure.</p>
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

            <div class="contact">
                <div class="container">
                    <div class="simvol_title d-flex flex-column align-items-center">
                        <div class="simvol_image"><img src="/image/simvol.png"></div>
                        <h3 class="fw-normal lh-1 text-white text-uppercase  text-center tenor"
                            style="letter-spacing: -0.06em;">
                            CONTACT US</h3>
                    </div>
                    <p class="p_md fw-normal lh-sm text-white text-center pt-3 pb-1">Fill in the form below or reach out
                        to us
                        using</p>
                    <div class="d-flex align-items-center justify-content-center pb-5 flex-wrap">
                        <p class="p_md fw-bold lh-sm text-white mx-2 my-1"><a href="tel:+33638888695">+33638888695</a></p>
                        <span class="slash fw-bold lh-sm text-white opacity-25 d-none d-lg-inline">/</span>
                        <p class="p_md fw-bold lh-sm text-white  mx-2 my-1"><a href="https://api.whatsapp.com/send?phone=0033638888695">WhatsApp</a></p>
                        <span class="slash fw-bold lh-sm text-white opacity-25 d-none d-lg-inline">/</span>
                        <p class="p_md fw-bold lh-sm text-white  mx-2 my-1"><a href="mailto:Order@darkwinginflight.com">Order@darkwinginflight.com</a></p>
                    </div>
                    <div class="contact_input">
                        <livewire:contact/>
                    </div>
                </div>
            </div>
@endsection

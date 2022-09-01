@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="post_main d-flex flex-column align-items-center">
            <p class="p_md fw-bold lh-sm text-uppercase text-white text_back" style="opacity: 0.4">
                <a href="{{ route("all_news") }}" class="d-flex align-items-center"><i class="icon-Line"></i>back to news</a></p>
            <h1 class="post_title fw-normal lh-1 text-center text-white tenor" style="letter-spacing: -0.04em;">{{$post->title}}</h1>
            <div class="post_image">
                <img src={{Storage::url($post->image)}}>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="post_main_text">
            <div class="post_text">
                <p class="fs-24 fw-normal lh-140 text-white">{!! $post->context !!}</p>
            </div>
            <div class="post_main_data d-flex align-items-center justify-content-between">
                <p class="p_md fw-normal lh-140 text-white">{{$post->created_at}}</p>
                <div class="d-flex">
                    <div class="main_icon d-flex align-items-center justify-content-center">
                        <i class="icon-fb"></i>
                    </div>
                    <div class="main_icon d-flex align-items-center justify-content-center">
                        <i class="icon-twiter"></i>
                    </div>
                    <div class="main_icon d-flex align-items-center justify-content-center">
                        <i class="icon-YouTube"></i>
                    </div>
                    <div class="main_icon d-flex align-items-center justify-content-center">
                        <i class="icon-telegram"></i>
                    </div>
                    <div class="main_icon d-flex align-items-center justify-content-center">
                        <i class="icon-whatsapp"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="recent d-flex flex-column align-items-center">
            <div class="simvol_title d-flex flex-column align-items-center pb-5">
                <div class="simvol_image"><img src="/image/simvol.png"></div>
                <h3 class="recent_title fw-normal lh-1 text-center text-white text-uppercase tenor"
                    style="letter-spacing: -0.06em;">
                    Recent Posts</h3>
            </div>
            <div class="owl-info-cards owl-carousel owl-theme">
                @foreach($posts as $post)
                    <div class="item">
                        <div class="card card_info">
                            <img src={{Storage::url($post->image)}} class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="span_sm fw-normal lh-sm text-gray-7">{{ $post->created_at->toFormattedDateString() }}</span>
                                <p class="p_lg fw-normal lh-1 text-white py-2">{{ $post->title }}</p>
                                <span class="span_sm fw-normal lh-sm text-gray-5">{!! $post->context !!}</span>
                                <p class="p_sm fw-bold lh-sm text-uppercase text-gray-5 pt-3"><a href="{{ route("show_news",$post->id) }}">Read more</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="simvol_title d-flex flex-column align-items-center">
                <div class="simvol_image"><img src="/image/simvol.png"></div>
                <h3 class="fw-normal lh-1 text-white text-uppercase  text-center tenor" style="letter-spacing: -0.06em;">
                    CONTACT US</h3>
            </div>
            <p class="p_md fw-normal lh-sm text-white text-center pt-3 pb-1">Fill in the form below or reach out to us
                using</p>
            <div class="d-flex align-items-center justify-content-center pb-5">
                <p class="p_md fw-bold lh-sm text-white mx-2 my-1"><a>8 800 775-07-75</a></p>
                <span class="slash fw-bold lh-sm text-white opacity-25">/</span>
                <p class="p_md fw-bold lh-sm text-white  mx-2 my-1"><a>WhatsApp</a></p>
                <span class="slash fw-bold lh-sm text-white opacity-25">/</span>
                <p class="p_md fw-bold lh-sm text-white  mx-2 my-1"><a>order@darkwing-catering.com</a></p>
            </div>
            <div class="contact_input">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="fake_input d-flex position-relative w-100">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">First name</span></div>
                            <div class="part right"></div>
                            <input name="first_name">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="fake_input d-flex position-relative w-100">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">Last name</span></div>
                            <div class="part right"></div>
                            <input name="last_name">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="fake_input d-flex position-relative w-100">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">E-mail</span></div>
                            <div class="part right"></div>
                            <input name="e_mail">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="fake_input d-flex position-relative w-100">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">Phone number</span></div>
                            <div class="part right"></div>
                            <input name="phone">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center py-2">
                <button class="btn  text-white text-uppercase" style="width: 386px"><span class="pnt">~</span>Send<span
                        class="pnt">~</span>
                </button>
            </div>
        </div>
    </div>
@endsection
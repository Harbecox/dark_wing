@extends('layouts.front')
@section('title') Darkwings {{ $post->meta_title }} @endsection
@section('description') Darkwings {{ $post->meta_description }} @endsection
@section("header_content")

@endsection

@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
                <div class="fs-24 fw-normal lh-140 text-white" style="text-align: justify">{!! $post->context !!}</div>
            </div>
            <div class="post_main_data d-flex align-items-center justify-content-between">
                <p class="p_md fw-normal lh-140 text-white">{{$post->created_at}}</p>
                <div class="share-btn">
                    <div class="main_icon d-flex align-items-center justify-content-center">
                        <a class="btn-vk" data-id="vk"><i class="fa-brands fa-vk"></i></a>
                    </div>
                    <div class="main_icon d-flex align-items-center justify-content-center">
                        <a class="btn-facebook" data-id="fb"><i class="fa-brands fa-square-facebook"></i></a>
                    </div>
                    <div class="main_icon d-flex align-items-center justify-content-center">
                        <a class="btn-twitter" data-id="tw"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    <div class="main_icon d-flex align-items-center justify-content-center">
                        <a class="btn-telegram" data-id="tg"><i class="fa-brands fa-telegram"></i></a>
                    </div>
                    <div class="main_icon d-flex align-items-center justify-content-center">
                        <a class="btn-mail" data-id="mail"><i class="fa-solid fa-envelope"></i></a>
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
                                <p class="p_lg fw-normal lh-1 text-white py-2" style="height: 72px">{{ $post->title }}</p>
                                <span style="height: 160px; overflow: hidden;display: inline-block" class="span_sm fw-normal lh-sm text-gray-5">{!! $post->context !!}</span>
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
            <div class="d-flex align-items-center justify-content-center pb-5 flex-wrap">
                <p class="p_md fw-bold lh-sm text-white mx-2 my-1"><a href="tel:+33638888695">+33638888695</a></p>
                <span class="slash fw-bold lh-sm text-white opacity-25 d-none d-lg-inline">/</span>
                <p class="p_md fw-bold lh-sm text-white  mx-2 my-1"><a href="https://api.whatsapp.com/send?phone=0033638888695">WhatsApp</a></p>
                <span class="slash fw-bold lh-sm text-white opacity-25 d-none d-lg-inline">/</span>
                <p class="p_md fw-bold lh-sm text-white  mx-2 my-1"><a href="mailto:Order@darkwinginflight.com">Order@darkwinginflight.com</a></p>
            </div>
            <div class="contact_input">
                <livewire:contact />
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/share-buttons/dist/share-buttons.js"></script>
@endsection

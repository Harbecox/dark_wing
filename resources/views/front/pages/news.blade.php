@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="d-flex flex-column align-items-center news_main">
            <h1 class="fw-normal lh-1 text-white text-uppercase tenor">News</h1>
            <livewire:news-list />
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
                <livewire:contact />
            </div>
        </div>
    </div>
@endsection

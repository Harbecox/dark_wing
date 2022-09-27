@extends('layouts.front')
@section('title') Darkwings News @endsection
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
                <livewire:contact />
            </div>
        </div>
    </div>
@endsection

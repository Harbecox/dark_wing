@extends('layouts.front')
@section('title') Contact Dark Wing Inflight catering @endsection
@section('description') You can find  our phone number, operation number, whatsapp Dark Wing Inflight private jets catering @endsection
@section('content')
    <div class="contact_main" style="margin-bottom: 100px">
        <div class="container">
            <p class=" mb-5 p_md fw-bold lh-sm text-uppercase text-white text_back mt-0 mt-lg-5 d-flex justify-content-center"
               style="opacity: 0.4" itemscope itemtype="http://schema.org/BreadcrumbList">
                <a itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                   href="{{route('index')}}" style="margin-right: 5px;">
                    <span itemprop="name">Home</span>
                    <meta itemprop="position" content="1"/>
                </a>
                <span style="margin: 0 5px;">/</span>
                <span style="margin-left: 5px;" itemprop="itemListElement" itemscope
                      itemtype="http://schema.org/ListItem">
                    <span itemprop="name">CONTACT US</span>
                </span>
            </p>
            <h1 class="fw-normal lh-1 text-white text-uppercase  text-center tenor" style="letter-spacing: -0.08em;">CONTACT US</h1>
            <p class="p_md fw-normal lh-sm text-white text-center pt-3 pb-1">Fill in the form below or reach out to us
                using</p>
            <div class="d-flex align-items-center justify-content-center pb-5 flex-wrap">
                <p class="p_md fw-bold lh-sm text-white mx-2 my-1">
                    <a href="tel:{{ $texts['contact']['phone Main'] }}">Main: {{ $texts['contact']['phone Main'] }}</a>
                </p>
                <span class="slash fw-bold lh-sm text-white opacity-25 d-none d-lg-inline">/</span>
                <p class="p_md fw-bold lh-sm text-white mx-2 my-1">
                    <a href="tel:{{ $texts['contact']['phone Ops'] }}">Ops: {{ $texts['contact']['phone Ops'] }}</a>
                </p>
                <span class="slash fw-bold lh-sm text-white opacity-25 d-none d-lg-inline">/</span>
                <p class="p_md fw-bold lh-sm text-white  mx-2 my-1"><a href="https://api.whatsapp.com/send?phone={{ \Illuminate\Support\Str::replace("+","",$texts['contact']['WhatsApp']) }}">WhatsApp</a></p>
                <span class="slash fw-bold lh-sm text-white opacity-25 d-none d-lg-inline">/</span>
                <p class="p_md fw-bold lh-sm text-white  mx-2 my-1"><a href="mailto:{{ $texts['contact']['Email'] }}">{{ $texts['contact']['Email'] }}</a></p>
            </div>
            <div class="contact_input">
                <livewire:contact />
            </div>
        </div>
    </div>
@endsection

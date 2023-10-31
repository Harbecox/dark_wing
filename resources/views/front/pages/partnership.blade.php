@extends('layouts.front')
@section('title') Become a partner of Dark wing inflight catering worldwide @endsection
@section('description') We built our network in order to provide the best catering solution around the world. We can find a solution on each airport in the world @endsection
@section('content')
    <div class="container">
        <div class="partnerships_main">
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
                    <span itemprop="name">Partnerships</span>
                </span>
            </p>
            <h1 class="fw-normal lh-1 text-center text-uppercase text-white tenor" style="letter-spacing: -0.08em;">{{ $texts['partnership']['h1'] }}</h1>
            <p class="p_lg fw-normal lh-sm text-white text-center" style="padding-top: 20px">{!! $texts['partnership']['under h1'] !!}</p>
            <div class="partner_cards d-flex">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="partner_card text-center text-lg-left">
                            <div class="partner_card_image">
                                <img src="image/partner1.png">
                            </div>
                            <p class="fs-34 fw-bold text-white lh-110 partner_card_title">{{ $texts['partnership']['title 1'] }}</p>
                            <span class="span_md fw-normal lh-140 text-white" style=" opacity: 0.8">{!! $texts['partnership']['text 1'] !!}</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="partner_card text-center text-lg-left">
                            <div class="partner_card_image">
                                <img src="image/partner2.png">
                            </div>
                            <p class="fs-34 fw-bold text-white lh-110 partner_card_title">{{ $texts['partnership']['title 2'] }}</p>
                            <span class="span_md fw-normal lh-140 text-white" style=" opacity: 0.8">{!! $texts['partnership']['text 2'] !!}</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="partner_card text-center text-lg-left">
                            <div class="partner_card_image">
                                <img src="image/partner3.png">
                            </div>
                            <p class="fs-34 fw-bold text-white lh-110 partner_card_title">{{ $texts['partnership']['title 3'] }}</p>
                            <span class="span_md fw-normal lh-140 text-white" style=" opacity: 0.8">{!! $texts['partnership']['text 3'] !!}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact contact_partner">
        <div class="container">
            <p class="p_lg fw-normal lh-sm text-white text-center contact_text">{!! $texts['partnership']['contact'] !!}</p>
            <livewire:partnership />
        </div>
    </div>
@endsection

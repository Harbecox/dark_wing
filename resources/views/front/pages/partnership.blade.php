@extends('layouts.front')
@section('title') Darkwings Partnership @endsection
@section('content')
    <div class="container">
        <div class="partnerships_main">
            <h1 class="fw-normal lh-1 text-center text-uppercase text-white tenor" style="letter-spacing: -0.08em;">{{ $texts['partnership']['h1'] }}</h1>
            <p class="p_lg fw-normal lh-sm text-white text-center" style="padding-top: 20px">{!! $texts['partnership']['under h1'] !!}</p>
            <div class="partner_cards d-flex">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="partner_card text-center text-lg-left">
                            <div class="partner_card_image">
                                <img src="image/partner1.png">
                            </div>
                            <p class="fs-34 fw-bold text-white lh-110 partner_card_title">Your <br>benefits</p>
                            <span class="span_md fw-normal lh-140 text-white" style=" opacity: 0.8">{!! $texts['partnership']['Your benefits'] !!}</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="partner_card text-center text-lg-left">
                            <div class="partner_card_image">
                                <img src="image/partner2.png">
                            </div>
                            <p class="fs-34 fw-bold text-white lh-110 partner_card_title">Your <br>engagement</p>
                            <span class="span_md fw-normal lh-140 text-white" style=" opacity: 0.8">{!! $texts['partnership']['Your engagement'] !!}</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="partner_card text-center text-lg-left">
                            <div class="partner_card_image">
                                <img src="image/partner3.png">
                            </div>
                            <p class="fs-34 fw-bold text-white lh-110 partner_card_title">How become a<br> partner of Dark Wing</p>
                            <span class="span_md fw-normal lh-140 text-white" style=" opacity: 0.8">{!! $texts['partnership']['How become a partner of Dark Wing'] !!}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact contact_partner">
        <div class="container">
            <p class="p_lg fw-normal lh-sm text-white text-center contact_text">{!! $texts['partnership']['contact'] !!}<</p>
            <livewire:partnership />
        </div>
    </div>
@endsection

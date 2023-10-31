@extends('layouts.front')
@section('body_bg')
    'image/bg2.png'
@endsection
@section('title')
    Catering for Private jets around the world
@endsection
@section('content')
    <div class="airport airports">
        <div class="container">
            <div class="luxury_title d-flex flex-column align-items-center">
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
                    <span itemprop="name">Airports</span>
                </span>
                </p>
                <h1 class="fw-normal lh-1 text-white text-uppercase text-center tenor">{{ $texts['airports']['h1'] }}</h1>
                <p class="luxury_text fs-30 fw-normal lh-sm  text-white text-center">{{ $texts['airports']['under h1'] }}</p>
            </div>
            <livewire:map />
        </div>
    </div>

    <x-contact></x-contact>
@endsection

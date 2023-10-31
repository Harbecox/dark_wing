@extends('layouts.front')
@section('title') Aviation news Dark Wing inflight catering @endsection
@section('description') Last news in bizav industry and inflight Private jets catering around the world. @endsection
@section('content')

    <div class="container">
        <div class="d-flex flex-column align-items-center news_main">
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
                    <span itemprop="name">News</span>
                </span>
            </p>
            <h1 class="fw-normal lh-1 text-white text-uppercase tenor">News</h1>
            <livewire:news-list />
        </div>
    </div>

    <x-contact></x-contact>
@endsection

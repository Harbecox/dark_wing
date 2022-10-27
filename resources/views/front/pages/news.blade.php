@extends('layouts.front')
@section('title') Aviation news Dark Wing inflight catering @endsection
@section('description') Last news in bizav industry and inflight Private jets catering around the world. @endsection
@section('content')

    <div class="container">
        <div class="d-flex flex-column align-items-center news_main">
            <h1 class="fw-normal lh-1 text-white text-uppercase tenor">News</h1>
            <livewire:news-list />
        </div>
    </div>

    <x-contact></x-contact>
@endsection

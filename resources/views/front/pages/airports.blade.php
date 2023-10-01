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
                <h1 class="fw-normal lh-1 text-white text-uppercase text-center tenor">{{ $texts['airports']['h1'] }}</h1>
                <p class="luxury_text fs-30 fw-normal lh-sm  text-white text-center">{{ $texts['airports']['under h1'] }}</p>
            </div>
            <livewire:map />
        </div>
    </div>

    <x-contact></x-contact>
@endsection

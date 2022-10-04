@extends('layouts.front')
@section('title') Darkwings Order @endsection
@section('content')
    <div class="container">
        <div class="order_main d-flex flex-column align-items-center">
            <h1 class="order_title lh-1 fw-normal tenor text-white text-uppercase text-center pb-3"
                style="letter-spacing: -0.06em;">New order</h1>
            <p class="p_lg fw-normal lh-sm text-center" style="color: #586E81"></p>
            <livewire:order />
        </div>
    </div>
@endsection

@extends('layouts.front')

@section('title') Catering for Private jets around the world @endsection
@section('content')
    <div class="airport">
        <div class="container">
            <livewire:airports-list />
        </div>
    </div>

    <x-contact></x-contact>
@endsection

@extends('layouts.front')

@section('title') Darkwings Airports @endsection
@section('content')
    <div class="airport">
        <div class="container">
            <livewire:airports-list />
        </div>
    </div>

    <x-contact></x-contact>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Panel</div>

                <div class="card-body">
                    Welcome {{ Auth::getUser()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

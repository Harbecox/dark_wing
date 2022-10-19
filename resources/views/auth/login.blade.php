@extends('layouts.front')

@section('content')
    <div class="contact_main">
        <div class="container">
            <h1 class="fw-normal lh-1 text-white text-uppercase  text-center tenor" style="letter-spacing: -0.08em; margin-bottom: 20px">Login</h1>
            <div class="contact_input">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="row d-flex justify-content-center col-xl-6 col-md-12 offset-xl-3">
                        <div class="col-12">
                            <div class="fake_input d-flex position-relative w-100">
                                <div class="part left"></div>
                                <div class="part main"><span class="title">Email</span></div>
                                <div class="part right"></div>
                                <input id="email" name="email" class="@error('email') is-invalid @enderror">
                            </div>
                            <div class="fake_input d-flex position-relative w-100 col-xl-6 col-md-12">
                                <div class="part left"></div>
                                <div class="part main"><span class="title">Password</span></div>
                                <div class="part right"></div>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password">

                            </div>
                        </div>
                        <div class="col-12">
                            @foreach ($errors->all() as $error)
                                <div class="my-3"><span class="text-danger error">{{$error}}</span></div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn  text-white text-uppercase contact_button" style="width: 386px"><span class="pnt">~</span>LOGIN<span class="pnt">~</span>
                        </button>
                    </div>
                    <a href="{{ route("password.request") }}"><h6 class="text-white text-center">Forget password ?</h6></a>


                </form>
            </div>
        </div>
    </div>


@endsection


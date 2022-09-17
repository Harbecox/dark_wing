@extends('layouts.front')

@section('content')

    <div class="contact_main">
        <div class="container">
            <h1 class="fw-normal lh-1 text-white text-uppercase  text-center tenor" style="letter-spacing: -0.08em; margin-bottom: 20px">New account</h1>
            <div class="contact_input">
                <form method="post" action="register">
                    @csrf
                    <div class="w-100">
                        <div class="fake_input d-flex position-relative w-100">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">Email</span></div>
                            <div class="part right"></div>
                            <input id="email" name="email" class="@error('email') is-invalid @enderror">
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="fake_input d-flex position-relative w-100 col-xl-6 col-md-12">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">Password</span></div>
                            <div class="part right"></div>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="fake_input d-flex position-relative w-100 col-xl-6 col-md-12">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">Confirm Password</span></div>
                            <div class="part right"></div>
                            <input id="password-confirm" type="password" class="@error('password') is-invalid @enderror" name="password_confirmation">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn text-white text-uppercase contact_button" style="width: 386px"><span class="pnt">~</span>REGISTER<span class="pnt">~</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


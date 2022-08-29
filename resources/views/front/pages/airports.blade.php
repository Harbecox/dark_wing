@extends('layouts.front')

@section('content')
    <div class="airport">
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <h1 class="fw-normal lh-1 text-white text-uppercase tenor" style="letter-spacing: -0.08em;">
                    Airports</h1>
                <p class="airport_text p_lg fw-normal lh-sm text-white text-center pt-2">All the airports we work with
                    are
                    displayed
                    here.
                    For
                    convenience, use the search bar</p>
                <div class="airport_input my-5">
                    <input class="text-gray-6 fw-normal form-control-sm fs-20" type="text"
                           placeholder="&#xE914; Enter the name of the airport">
                    <div class="search_close">
                        <img src="image/close.svg">
                    </div>
                </div>
                <div class="countries">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src='image/city_1.jpg'>
                                <div class="flag">
                                    <img src="image/flag_1.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">Paris</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">France</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src="image/city_4.jpg">
                                <div class="flag">
                                    <img src="image/flag_2.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">London</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">Great Britain</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src="image/city_2.jpg">
                                <div class="flag">
                                    <img src="image/flag_3.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">Moscow</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">Russia</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src="image/city_3.jpg">
                                <div class="flag">
                                    <img src="image/flag_4.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">Rome</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">Italy</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src='image/city_1.jpg'>
                                <div class="flag">
                                    <img src="image/flag_1.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">Paris</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">France</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src="image/city_4.jpg">
                                <div class="flag">
                                    <img src="image/flag_2.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">London</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">Great Britain</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src="image/city_2.jpg">
                                <div class="flag">
                                    <img src="image/flag_3.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">Moscow</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">Russia</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src="image/city_3.jpg">
                                <div class="flag">
                                    <img src="image/flag_4.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">Rome</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">Italy</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src='image/city_1.jpg'>
                                <div class="flag">
                                    <img src="image/flag_1.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">Paris</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">France</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src="image/city_4.jpg">
                                <div class="flag">
                                    <img src="image/flag_2.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">London</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">Great Britain</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src="image/city_2.jpg">
                                <div class="flag">
                                    <img src="image/flag_3.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">Moscow</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">Russia</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-3">
                            <div class="card_city">
                                <img src="image/city_3.jpg">
                                <div class="flag">
                                    <img src="image/flag_4.png">
                                </div>
                                <div class="city_name">
                                    <h5 class="fw-normal lh-sm text-white">Rome</h5>
                                    <p class="p_sm text-white lh-sm fw-normal opacity-75">Italy</p>
                                    <p class="city_open fw-normal p_md lh-sm text-white text-uppercase">
                                        <a class="d-flex align-items-center" href="#">Open<i
                                                class="icon-Line-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-lg btn-outline-light text-white text-uppercase" style="width: 481px">See more
                </button>

            </div>

        </div>
    </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="simvol_title d-flex flex-column align-items-center">
                <div class="simvol_image"><img src="image/simvol.png"></div>
                <h3 class="fw-normal lh-1 text-white text-uppercase  text-center tenor" style="letter-spacing: -0.06em;">
                    CONTACT US</h3>
            </div>
            <p class="p_md fw-normal lh-sm text-white text-center pt-3 pb-1">Fill in the form below or reach out to us
                using</p>
            <div class="d-flex align-items-center justify-content-center pb-5">
                <p class="p_md fw-bold lh-sm text-white mx-2 my-1"><a>8 800 775-07-75</a></p>
                <span class="slash fw-bold lh-sm text-white opacity-25">/</span>
                <p class="p_md fw-bold lh-sm text-white  mx-2 my-1"><a>WhatsApp</a></p>
                <span class="slash fw-bold lh-sm text-white opacity-25">/</span>
                <p class="p_md fw-bold lh-sm text-white  mx-2 my-1"><a>order@darkwing-catering.com</a></p>
            </div>
            <div class="contact_input">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="fake_input d-flex position-relative w-100">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">First name</span></div>
                            <div class="part right"></div>
                            <input name="first_name">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="fake_input d-flex position-relative w-100">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">Last name</span></div>
                            <div class="part right"></div>
                            <input name="last_name">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="fake_input d-flex position-relative w-100">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">E-mail</span></div>
                            <div class="part right"></div>
                            <input name="e_mail">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="fake_input d-flex position-relative w-100">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">Phone number</span></div>
                            <div class="part right"></div>
                            <input name="phone">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center py-2">
                <button class="btn  text-white text-uppercase" style="width: 386px"><span class="pnt">~</span>Send<span
                        class="pnt">~</span>
                </button>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="partnerships_main">
            <h1 class="fw-normal lh-1 text-center text-uppercase text-white tenor" style="letter-spacing: -0.08em;">BECOME OUR local PARTNER</h1>
            <p class="p_lg fw-normal lh-sm text-white text-center" style="padding-top: 20px">Ambassador it’ s the
                person who became a member of our close community.<br> We accept only Private Flight attendants.</p>
            <div class="partner_cards d-flex">
                <div class="row">
                    <div class="col-xxl-4 col-xl-6">
                        <div class="partner_card">
                            <div class="partner_card_image">
                                <img src="image/partner1.png">
                            </div>
                            <p class="fs-34 fw-bold text-white lh-110 partner_card_title">Your <br>benefits</p>
                            <span class="span_md fw-normal lh-140 text-white" style=" opacity: 0.8">You create your team and take benefits from them. You take benefits from your collaboration with us.We regularly propose online training sessions on different thematics</span>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6">
                        <div class="partner_card">
                            <div class="partner_card_image">
                                <img src="image/partner2.png">
                            </div>
                            <p class="fs-34 fw-bold text-white lh-110 partner_card_title">Your <br>engagement</p>
                            <span class="span_md fw-normal lh-140 text-white" style=" opacity: 0.8">You represent us and speak about us. Give your feedback about your destination. We give % for the orders.</span>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6">
                        <div class="partner_card">
                            <div class="partner_card_image">
                                <img src="image/partner3.png">
                            </div>
                            <p class="fs-34 fw-bold text-white lh-110 partner_card_title">How become a<br> partner of Dark Wing</p>
                            <span class="span_md fw-normal lh-140 text-white" style=" opacity: 0.8">The ambassador program is about to get started. We will announce it very soon.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact contact_partner">
        <div class="container">
            <p class="p_lg fw-normal lh-sm text-white text-center contact_text">To become our partner please reach out to us via<br>
                <a class="fw-bold p_lg lh-sm text-white" href="#">order@darkwing-catering.com</a>
                or just fill in the form below.</p>
            <div class="contact_input">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="fake_input d-flex position-relative w-100">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">Name of company</span></div>
                            <div class="part right"></div>
                            <input name="first_name">
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
                    <div class="col-xl-6 col-md-12">
                        <div class="fake_input d-flex position-relative w-100">
                            <div class="part left"></div>
                            <div class="part main"><span class="title">Location (Airport)</span></div>
                            <div class="part right"></div>
                            <input name="name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center py-2">
                <button class="btn  text-white text-uppercase" style="width: 386px"><span class="pnt">~</span>Send a request<span
                        class="pnt">~</span>
                </button>
            </div>
        </div>
    </div>
    </div>
@endsection

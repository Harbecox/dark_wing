@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="order_main d-flex flex-column align-items-center">
            <h1 class="order_title lh-1 fw-normal tenor text-white text-uppercase text-center pb-3"
                style="letter-spacing: -0.06em;">New order</h1>
            <p class="p_lg fw-normal lh-sm text-center" style="color: #586E81">Ambassador it’ s the person who became a
                member of our close community.<br> We accept only Private Flight attendants.</p>
            <div class="order_input">
                <div class="fake_input d-flex position-relative">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">Name *</span></div>
                    <div class="part right"></div>
                    <input name="first_name">
                </div>
                <div class="fake_input d-flex position-relative">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">E-mail *</span></div>
                    <div class="part right"></div>
                    <input name="email">
                </div>
                <div class="fake_input d-flex position-relative">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">Phone number *</span></div>
                    <div class="part right"></div>
                    <input name="phone">
                </div>
                <div class="fake_input d-flex position-relative">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">Delivery Airport *</span></div>
                    <div class="part right"></div>
                    <input name="name">
                </div>
                <div class="order_select d-flex justify-content-between w-100">
                    <select class="form-select" style="margin-right: 12px" aria-label="Default select example">
                        <option selected>Delivery Day *</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Delivery time (LT) *</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="fake_input d-flex position-relative">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">Company name</span></div>
                    <div class="part right"></div>
                    <input name="company_name">
                </div>
                <div class="fake_input d-flex position-relative">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">Handling</span></div>
                    <div class="part right"></div>
                    <input name="handling">
                </div>
                <div class="fake_input d-flex position-relative">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">Packaging (foil or MW)</span></div>
                    <div class="part right"></div>
                    <input name="packaging">
                </div>
                <div class="fake_input d-flex position-relative">
                    <div class="part left"></div>
                    <div class="part main"><span class="title">Allergies</span></div>
                    <div class="part right"></div>
                    <input name="allergies">
                </div>
                <button class="btn  text-white text-uppercase" style="width: 100%"><span class="pnt">~</span>SEND order<span
                        class="pnt">~</span>
                </button>
            </div>

        </div>
    </div>
    </div>
@endsection

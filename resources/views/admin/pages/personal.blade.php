@extends('layouts.front')

@section('content')
<h1 class="personal_title fw-normal lh-1 text-white text-center text-uppercase tenor"
    style="letter-spacing: -0.06em;">Personal account</h1>
<div class="personal_main d-flex justify-content-center">
    <div class="personal_main_left">
        <img src="image/Frame%2094.png">
        <div class="camera d-flex align-items-center justify-content-center">
            <img src="image/Camera.svg">
        </div>
    </div>
    <div class="personal_main_right d-flex">
        <div class="d-flex flex-column personal_info">
            <div class="personal_info_line">
                <p class="fs-20 fw-normal lh-140 text-white">Your name</p>
                <div class="d-flex">
                    <p class="p_lg fw-normal lh-140 text-white">Not filled in</p>
                    <div class="edit d-flex align-items-center"><img src="image/Edit.png"></div>
                </div>
            </div>
            <div class="personal_info_line">
                <p class="fs-20 fw-normal lh-140 text-white">Company name</p>
                <div class="d-flex">
                    <p class="p_lg fw-normal lh-140 text-white">Not filled in</p>
                    <div class="edit d-flex align-items-center"><img src="image/Edit.png"></div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column personal_info">
            <div class="personal_info_line">
                <p class="fs-20 fw-normal lh-140 text-white">E-mail</p>
                <div class="d-flex">
                    <p class="p_lg fw-normal lh-140 text-white opacity-100">username@gmail.com</p>
                </div>
            </div>
            <div class="personal_info_line">
                <p class="fs-20 fw-normal lh-140 text-white">Accounting
                    email</p>
                <div class="d-flex">
                    <p class="p_lg fw-normal lh-140 text-white">Not filled in</p>
                    <div class="edit d-flex align-items-center"><img src="image/Edit.png"></div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column personal_info">
            <div class="personal_info_line">
                <p class="fs-20 fw-normal lh-140 text-white">Phone number</p>
                <div class="d-flex">
                    <p class="p_lg fw-normal lh-140 text-white opacity-100">8 800 775-07-75</p>
                </div>
            </div>
            <div class="personal_info_line">
                <p class="fs-20 fw-normal lh-140 text-white">Billing address</p>
                <div class="d-flex">
                    <p class="p_lg fw-normal lh-140 text-white">Not filled in</p>
                    <div class="edit d-flex align-items-center"><img src="image/Edit.png"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="line"></div>
</div>
<div class="new_order">
    <h5 class="fs-34 fw-normal lh-110 text-center pb-3" style="color: #586E81">New order</h5>
    <div class="d-flex justify-content-center new_order_btn">
        <div class="d-flex">
            <button class="personal_btn d-flex align-items-center"><img src="image/btn1.svg">Feel the form</button>
            <button class="personal_btn d-flex align-items-center"><img src="image/btn2.svg">By email</button>
            <button class="personal_btn d-flex align-items-center"><img src="image/btn3.svg">By WhatsApp</button>
        </div>
        <div class="d-flex">
            <button class="personal_btn d-flex align-items-center"><img src="image/btn4.svg">Upload PDF</button>
            <button class="personal_btn d-flex align-items-center"><img src="image/btn5.svg">Free form</button>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    <div class="line"></div>
</div>
<div class="order_history">
    <h5 class="fs-34 fw-normal lh-110 text-center pb-4" style="color: #586E81">Order history</h5>
    <div class="personal_table">
        <table>
            <tr>
                <td width="22%">
                    <div class="call" style="padding-left: 30px">
                        <p>Дата</p>
                        <span>20 марта 2022</span>
                    </div>
                </td>
                <td width="25%">
                    <div class="call">
                        <p>Аэропорт</p>
                        <span>France, Paris, CDG</span>
                    </div>
                </td>
                <td width="10%">
                    <div class="call">
                        <p>Сумма</p>
                        <span>250$</span>
                    </div>
                </td>
                <td width="30%">
                    <div class="call">
                        <p>Позиций</p>
                        <span>5</span>
                    </div>
                </td>
                <td>
                    <div class="call">
                        <div style="padding: 13px 0">
                            <img src="image/eye.svg" class="image_grey">
                            <img src="image/eye1.svg" class="image_white">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="call" style="padding-right: 40px">
                        <div style="padding: 13px 0">
                            <img src="image/download.svg" class="image_grey">
                            <img src="image/download1.svg" class="image_white">
                        </div>
                    </div>
                </td>
            <tr>
            <tr>
                <td width="22%">
                    <div class="call" style="padding-left: 30px">
                        <p>Дата</p>
                        <span>20 марта 2022</span>
                    </div>
                </td>
                <td width="25%">
                    <div class="call">
                        <p>Аэропорт</p>
                        <span>France, Paris, CDG</span>
                    </div>
                </td>
                <td width="10%">
                    <div class="call">
                        <p>Сумма</p>
                        <span>250$</span>
                    </div>
                </td>
                <td width="30%">
                    <div class="call">
                        <p>Позиций</p>
                        <span>5</span>
                    </div>
                </td>
                <td>
                    <div class="call">
                        <div style="padding: 13px 0">
                            <img src="image/eye.svg" class="image_grey">
                            <img src="image/eye1.svg" class="image_white">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="call" style="padding-right: 40px">
                        <div style="padding: 13px 0">
                            <img src="image/download.svg" class="image_grey">
                            <img src="image/download1.svg" class="image_white">
                        </div>
                    </div>
                </td>
            <tr>
            <tr>
                <td width="22%">
                    <div class="call" style="padding-left: 30px">
                        <p>Дата</p>
                        <span>20 марта 2022</span>
                    </div>
                </td>
                <td width="25%">
                    <div class="call">
                        <p>Аэропорт</p>
                        <span>France, Paris, CDG</span>
                    </div>
                </td>
                <td width="10%">
                    <div class="call">
                        <p>Сумма</p>
                        <span>250$</span>
                    </div>
                </td>
                <td width="30%">
                    <div class="call">
                        <p>Позиций</p>
                        <span>5</span>
                    </div>
                </td>
                <td>
                    <div class="call">
                        <div style="padding: 13px 0">
                            <img src="image/eye.svg" class="image_grey">
                            <img src="image/eye1.svg" class="image_white">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="call" style="padding-right: 40px">
                        <div style="padding: 13px 0">
                            <img src="image/download.svg" class="image_grey">
                            <img src="image/download1.svg" class="image_white">
                        </div>
                    </div>
                </td>
            <tr>
            <tr>
                <td width="22%">
                    <div class="call" style="padding-left: 30px">
                        <p>Дата</p>
                        <span>20 марта 2022</span>
                    </div>
                </td>
                <td width="25%">
                    <div class="call">
                        <p>Аэропорт</p>
                        <span>France, Paris, CDG</span>
                    </div>
                </td>
                <td width="10%">
                    <div class="call">
                        <p>Сумма</p>
                        <span>250$</span>
                    </div>
                </td>
                <td width="30%">
                    <div class="call">
                        <p>Позиций</p>
                        <span>5</span>
                    </div>
                </td>
                <td>
                    <div class="call">
                        <div style="padding: 13px 0">
                            <img src="image/eye.svg" class="image_grey">
                            <img src="image/eye1.svg" class="image_white">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="call" style="padding-right: 40px">
                        <div style="padding: 13px 0">
                            <img src="image/download.svg" class="image_grey">
                            <img src="image/download1.svg" class="image_white">
                        </div>
                    </div>
                </td>
            <tr>
            <tr>
                <td width="22%">
                    <div class="call" style="padding-left: 30px">
                        <p>Дата</p>
                        <span>20 марта 2022</span>
                    </div>
                </td>
                <td width="25%">
                    <div class="call">
                        <p>Аэропорт</p>
                        <span>France, Paris, CDG</span>
                    </div>
                </td>
                <td width="10%">
                    <div class="call">
                        <p>Сумма</p>
                        <span>250$</span>
                    </div>
                </td>
                <td width="30%">
                    <div class="call">
                        <p>Позиций</p>
                        <span>5</span>
                    </div>
                </td>
                <td>
                    <div class="call">
                        <div style="padding: 13px 0">
                            <img src="image/eye.svg" class="image_grey">
                            <img src="image/eye1.svg" class="image_white">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="call" style="padding-right: 40px">
                        <div style="padding: 13px 0">
                            <img src="image/download.svg" class="image_grey">
                            <img src="image/download1.svg" class="image_white">
                        </div>
                    </div>
                </td>
            <tr>
            <tr>
                <td width="22%">
                    <div class="call" style="padding-left: 30px">
                        <p>Дата</p>
                        <span>20 марта 2022</span>
                    </div>
                </td>
                <td width="25%">
                    <div class="call">
                        <p>Аэропорт</p>
                        <span>France, Paris, CDG</span>
                    </div>
                </td>
                <td width="10%">
                    <div class="call">
                        <p>Сумма</p>
                        <span>250$</span>
                    </div>
                </td>
                <td width="30%">
                    <div class="call">
                        <p>Позиций</p>
                        <span>5</span>
                    </div>
                </td>
                <td>
                    <div class="call">
                        <div style="padding: 13px 0">
                            <img src="image/eye.svg" class="image_grey">
                            <img src="image/eye1.svg" class="image_white">
                        </div>
                    </div>
                </td>
                <td>
                    <div class="call" style="padding-right: 40px">
                        <div style="padding: 13px 0">
                            <img src="image/download.svg" class="image_grey">
                            <img src="image/download1.svg" class="image_white">
                        </div>
                    </div>
                </td>
            <tr>
        </table>
        <button class="btn btn-lg btn-outline-light text-white text-uppercase mt-3" style="width:100%">See more
        </button>
    </div>
</div>
@endsection

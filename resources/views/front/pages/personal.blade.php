@extends('layouts.front')

@section('content')
<h1 class="personal_title fw-normal lh-1 text-white text-center text-uppercase tenor"
    style="letter-spacing: -0.06em;">Personal account</h1>
<div class="container">
    <livewire:account />
</div>
<div class="d-flex justify-content-center">
    <div class="line"></div>
</div>
<div class="new_order">
    <h5 class="fs-34 fw-normal lh-110 text-center pb-3" style="color: #586E81">New order</h5>
    <div class="d-flex justify-content-center new_order_btn">
        <div class="d-flex">
            <button class="personal_btn d-flex align-items-center"><img src="/image/btn1.svg" >Feel the form</button>
            <button class="personal_btn d-flex align-items-center"><img src="/image/btn2.svg">By email</button>
            <button class="personal_btn d-flex align-items-center"><img src="/image/btn3.svg">By WhatsApp</button>
        </div>
        <div class="d-flex">
            <button class="personal_btn d-flex align-items-center"><img src="/image/btn4.svg">Upload PDF</button>
            <a href="{{route('order')}}" class="personal_btn d-flex align-items-center"><img src="/image/btn5.svg">Free form</a>
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
            @foreach($orders as $order)
            <tr>
                <td width="22%">
                    <div class="call" style="padding-left: 30px">
                        <p>Дата</p>
                        <span>{{ $order->created_at->toFormattedDateString() }}</span>
                    </div>
                </td>
                <td width="100%">
                    <div class="call">
                        <p>Аэропорт</p>
                        <span>{{ $order->airport->title }}</span>
                    </div>
                </td>
                <td>
                    <div class="call">
                        <div style="padding: 13px 0">
                            <a href="{{ route("order.download",$order) }}">
                                <img src="/image/eye.svg" class="image_grey">
                                <img src="/image/eye1.svg" class="image_white">
                            </a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="call" style="padding-right: 40px">
                        <div style="padding: 13px 0">
                            <a href="{{ route("order.download",$order) }}">
                                <img src="/image/download.svg" class="image_grey">
                                <img src="/image/download1.svg" class="image_white">
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        <button class="btn btn-lg btn-outline-light text-white text-uppercase mt-3" style="width:100%">See more</button>
    </div>
</div>
@endsection

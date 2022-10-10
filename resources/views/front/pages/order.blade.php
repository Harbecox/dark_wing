@extends('layouts.front')
@section('title') Darkwings Order @endsection
@section('content')
    <div class="container">
        <div class="order_main d-flex flex-column align-items-center">
            <h1 class="order_title lh-1 fw-normal tenor text-white text-uppercase text-center pb-3"
                style="letter-spacing: -0.06em;">New order</h1>
            <p class="p_lg fw-normal lh-sm text-center" style="color: #586E81"></p>
            <div style="margin: 0 -100px">
                <div class="d-flex justify-content-center new_order_btn">
                    <div class="d-flex flex-column flex-lg-row">
                        <a href="http://127.0.0.1:8000/order" class="personal_btn d-flex align-items-center my-2 my-lg-0"><img src="/image/btn1.svg">Feel
                            the form</a>
                        <a href="mailto:Order@darkwinginflight.com" class="personal_btn d-flex align-items-center  my-2 my-lg-0"><img src="/image/btn2.svg">By email</a>
                        <a href="https://api.whatsapp.com/send?phone=0033638888695" class="personal_btn d-flex align-items-center  my-2 my-lg-0"><img src="/image/btn3.svg">By WhatsApp</a>
                        <form action="http://127.0.0.1:8000/personal/upload_pdf" method="post" enctype="multipart/form-data">
                            <a onclick="this.parentNode.querySelector('input').click()" type="button" class="personal_btn d-flex align-items-center  my-2 my-lg-0"><img src="/image/btn4.svg">Upload PDF
                            </a>
                            <input name="order_pdf" onchange="this.parentNode.submit()" type="file" style="display: none">
                            <input type="hidden" name="_token" value="3SdNZuSfFNza22gIstvmQANe8KzXP9dd5wA23EYO">                </form>
                        <a href="http://127.0.0.1:8000/contact" class="personal_btn d-flex align-items-center  my-2 my-lg-0"><img src="/image/btn5.svg">Free form</a>
                    </div>
                </div>  
            </div>
            <livewire:order />
        </div>
    </div>
@endsection

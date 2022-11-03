@extends('layouts.front')

@section('content')
    <h1 class="personal_title fw-normal lh-1 text-white text-center text-uppercase tenor"
        style="letter-spacing: -0.06em;">Personal account</h1>
    <div class="container">
        <livewire:account/>
    </div>
    <div class="d-flex justify-content-center">
        <div class="line"></div>
    </div>
    <div class="new_order">
        <h5 class="fs-34 fw-normal lh-110 text-center pb-3" style="color: #586E81">New order</h5>
        <div class="d-flex justify-content-center new_order_btn">
            <div class="d-flex flex-column flex-lg-row">
                <a href="{{route('order')}}" class="personal_btn d-flex align-items-center my-2 my-lg-0"><img src="/image/btn1.svg">Feel
                    the form</a>
                <a href="mailto:Order@darkwinginflight.com" class="personal_btn d-flex align-items-center  my-2 my-lg-0"><img
                        src="/image/btn2.svg">By email</a>
                <a href="https://api.whatsapp.com/send?phone=0033638888695"
                   class="personal_btn d-flex align-items-center  my-2 my-lg-0"><img src="/image/btn3.svg">By WhatsApp</a>
                <a onclick="this.parentNode.querySelector('form').querySelector('input').click()" type="button"
                   class="personal_btn d-flex align-items-center  my-2 my-lg-0"><img src="/image/btn4.svg">Upload PDF
                </a>

                <a href="{{route('contact')}}" class="personal_btn d-flex align-items-center  my-2 my-lg-0"><img
                        src="/image/btn5.svg">Free form</a>
                <form action="{{ route('upload_pdf') }}" method="post" enctype="multipart/form-data">
                    <input name="order_pdf" onchange="this.parentNode.submit()" type="file" style="display: none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="line"></div>
    </div>
    <livewire:order-list />
@endsection

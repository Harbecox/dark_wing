@extends('layouts.admin')

@section('title', 'Edit')

@section('content')
    <section class="content">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('success') }}
            </div>
        @endif

        <div class="card card-primary">
            <form action="{{ route('order.update',$order->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" value="{{ $order->firstName }}" name="firstName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" value="{{ $order->email }}" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" value="{{ $order->phone }}" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Delivery Airport</label>
                        <input type="text" value="{{ $order->deliveryAirport }}" name="deliveryAirport" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Delivery Day</label>
                        <input type="text" value="{{ $order->deliveryDay }}" name="deliveryDay" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Delivery Time</label>
                        <input type="text" value="{{ $order->deliveryTime }}" name="deliveryTime" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company</label>
                        <input type="text" value="{{ $order->company }}" name="company" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Handling</label>
                        <input type="text" value="{{ $order->handling }}" name="handling" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Packaging</label>
                        <input type="text" value="{{ $order->packaging }}" name="packaging" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Allergies</label>
                        <input type="text" value="{{ $order->allergies }}" name="allergies" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="customFile">File</label>
                        @if($order->order_pdf)
                            <a href="{{ route("order.download",$order) }}">PDF</a>
                        @endif
                        <div class="custom-file">
                            <input type="file" name="order_pdf" class="form-control" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection


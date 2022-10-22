@extends('layouts.admin')

@section('title', 'Add new order')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add new order</h1>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="content">

        @if(session('success'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('success') }}
            </div>
        @endif

        <div class="card card-primary">
            <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" value="{{ old('firstName') ?? "" }}" name="firstName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" value="{{ old('email') ?? "" }}" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" value="{{ old('phone') ?? "" }}" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Delivery Airport</label><br>
                        <input type="text" name="deliveryAirport" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Delivery Day</label><br>
                        <input class="form-control" name="deliveryDay" type="date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Delivery Time</label><br>
                        <input class="form-control" type="text" name="deliveryTime">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company</label>
                        <input type="text" value="{{ old('company') ?? "" }}" name="company" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Handling</label>
                        <input type="text" value="{{ old('handling') ?? "" }}" name="handling" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Packaging</label>
                        <input type="text" value="{{ old('packaging') ?? "" }}" name="packaging" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Allergies</label>
                        <input type="text" value="{{ old('allergies') ?? "" }}" name="allergies" class="form-control">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection


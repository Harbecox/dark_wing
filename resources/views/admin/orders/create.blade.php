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
                        <input type="text" name="firstName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Delivery Airport</label><br>
                        <select class="form-select" style="margin-right: 12px" aria-label="Default select example" name="deliveryAirport">
                            <option selected class="title">Choose</option>
                            @foreach($airports as $airport)
                                <option value="{{$airport->id}}">{{$airport->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Delivery Day</label><br>
                        <select class="form-select" style="margin-right: 12px" aria-label="Default select example" name="deliveryDay">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Delivery Time</label><br>
                        <select class="form-select" aria-label="Default select example" name="deliveryTime">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company</label>
                        <input type="text" name="company" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Handling</label>
                        <input type="text" name="handling" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Packaging</label>
                        <input type="text" name="packaging" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Allergies</label>
                        <input type="text" name="allergies" class="form-control">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection


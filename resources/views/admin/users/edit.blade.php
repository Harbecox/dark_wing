@extends('layouts.admin')

@section('title', 'Edit user')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit user</h1>
                </div>
            </div>
        </div>
    </div>

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
            <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" value="{{ $user->firstName }}" name="firstName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" value="{{ $user->lastName }}" name="lastName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" value="{{ $user->email }}" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" value="{{ $user->phone }}" name="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Company</label>
                        <input type="text" value="{{ $user->company }}" name="company" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">IsBlocked</label><br>
                        <input type="checkbox" name="isBlocked" {{  ($user->isBlocked == 1 ? ' checked' : '') }}>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Avatar</label>
                        <div class="form-group">
                            <img src="{{ Storage::url($user->avatar) }}" height="100" width="100" alt=""/>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="avatar" class="form-control" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@extends('layouts.admin')

@section('title', 'Add new airport')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add new airport</h1>
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
            <form action="{{ route('admin.airport.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <select class="form-select" name="country_id">
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}-{{$country->code}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="customFile">Flag</label>
                        <div class="custom-file">
                            <input type="file" name="flag" class="form-control" id="customFile1">
                            <label class="custom-file-label" for="customFile1">Choose file</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline card-info">
                                    <div class="card-body">
                                        <textarea id="summernote" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="customFile">Image</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="form-control" id="customFile2">
                            <label class="custom-file-label" for="customFile2">Choose file</label>
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

@section('footer')
    <script>
        $(function () {
            $('#summernote').summernote()
        })
    </script>
@endsection

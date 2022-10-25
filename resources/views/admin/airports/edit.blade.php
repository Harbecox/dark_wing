@extends('layouts.admin')

@section('title', 'Edit airport')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit airport</h1>
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
            <form action="{{ route('admin.airport.update',$airport->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{ $airport->title }}" name="title" class="form-control" placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta title</label>
                        <input type="text" value="{{ $airport->meta_title }}" name="meta_title" class="form-control" placeholder="Enter Meta title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta Description</label>
                        <input type="text" value="{{ $airport->meta_description }}" name="meta_description" class="form-control" placeholder="Enter Meta title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Country</label>
                        <select class="form-control form-control" id="type" name="country_id">
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" {{ $country->id == $airport->country_id ? 'selected' : '' }}>
                                    {{ $country->name }}-{{$country->code}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline card-info">
                                    <div class="card-body">
                                        <textarea id="summernote" name="description">
                                             {{$airport->description}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">IATA</label>
                        <input type="text" value="{{$airport->IATA}}" name="iata" class="form-control" placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">OACI</label>
                        <input type="text" value="{{$airport->OACI}}" name="oaci" class="form-control" placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <div class="form-group">
                            <img src="{{ Storage::url($airport->image) }}" height="200" width="200" alt=""/>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" class="form-control" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Background Image</label>
                        <div class="form-group">
                            <img src="{{ Storage::url($airport->bg_image) }}" height="200" width="200" alt=""/>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="bg_image" class="form-control" id="customFile2">
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

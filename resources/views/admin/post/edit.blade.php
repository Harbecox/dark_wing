@extends('layouts.admin')

@section('title', 'Edit post')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit post</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">

        @if(session('success'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('success') }}
            </div>
        @endif

        <div class="card card-primary">
            <!-- form start -->
            <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" value="{{ $post->title }}" name="title" class="form-control" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" value="{{ $post->description }}" name="description" class="form-control" placeholder="Enter Description">
                    </div>
                    <div class="form-group">
                        <!-- <label for="customFile">Custom File</label> -->

                        <label for="exampleInputEmail1">Image</label>

                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">

                            <img src="{{ Storage::url($post->image) }}" height="200" width="200" alt="" />


                        </div>

                        <div class="custom-file">

                            <input type="file" name="image" class="form-control" id="customFile">

                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>

@endsection

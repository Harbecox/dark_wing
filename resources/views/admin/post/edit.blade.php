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
                        <label for="exampleInputEmail1">Context</label>
                        @error('context')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" value="{{ $post->context }}" name="context" class="form-control" placeholder="Enter Context">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Intro</label>
                        @error('intro')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" value="{{ $post->intro }}" name="intro" class="form-control" placeholder="Enter intro">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta title</label>
                        @error('meta_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" value="{{ $post->meta_title }}" name="meta_title" class="form-control" placeholder="Enter Meta title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta Description</label>
                        @error('meta_description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" value="{{ $post->meta_description }}" name="meta_description" class="form-control" placeholder="Enter Meta title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Seo url</label>
                        @error('meta_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" value="{{ $post->seo_url }}" name="seo_url" class="form-control" placeholder="Enter seo url">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Enabled</label>
                        @error('enabled')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="" value="{{ $post->enabled }}" name="enabled" class="form-control">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <!-- <label for="customFile">Custom File</label> -->--}}
{{--                        <label for="exampleInputEmail1">Image</label>--}}
{{--                        @error('image')--}}
{{--                        <div class="text-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                        <div class="form-group">--}}
{{--                            <img src="{{ Storage::url($post->image) }}" height="200" width="200" alt="" />--}}
{{--                        </div>--}}
{{--                        <div class="custom-file">--}}
{{--                            <input type="file" name="image" class="form-control" id="customFile">--}}
{{--                            <label class="custom-file-label" for="customFile">Choose file</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </form>
        </div>
    </section>

@endsection

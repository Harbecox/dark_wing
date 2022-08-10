@extends('layouts.admin')

@section('title', 'Edit post')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit post</h1>
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
            <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{ $post->title }}" name="title" class="form-control" placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Context</label>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline card-info">
                                    <div class="card-body">
                                        <textarea id="summernote" name="context">
                                             {{$post->context}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Intro</label>
                        <input type="text" value="{{ $post->intro }}" name="intro" class="form-control" placeholder="Enter intro">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta title</label>
                        <input type="text" value="{{ $post->meta_title }}" name="meta_title" class="form-control" placeholder="Enter Meta title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta Description</label>
                        <input type="text" value="{{ $post->meta_description }}" name="meta_description" class="form-control" placeholder="Enter Meta title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Seo url</label>
                        <input type="text" value="{{ $post->seo_url }}" name="seo_url" class="form-control" placeholder="Enter seo url">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Enabled</label><br>
                        <input type="checkbox" name="enabled" {{  ($post->enabled == 1 ? ' checked' : '') }}>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <div class="form-group">
                            <img src="{{ Storage::url($post->image) }}" height="100" width="100" alt=""/>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" class="form-control" id="customFile">
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

@section('footer')
    <script>
        $(function () {
            $('#summernote').summernote()
        })
    </script>
@endsection

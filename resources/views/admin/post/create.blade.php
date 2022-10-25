@extends('layouts.admin')

@section('title', 'Create new post')

@section('content')
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create new post</h1>
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
            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Context</label>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline card-info">
                                    <div class="card-body">
                                        <textarea id="summernote" name="context"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Intro</label>
                        <input type="text" name="intro" class="form-control" placeholder="Enter intro">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta title</label>
                        <input type="text" name="meta_title" class="form-control" placeholder="Enter meta title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta description</label>
                        <input type="text" name="meta_description" class="form-control" placeholder="Enter meta description">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Seo url</label>
                        <input type="text" name="seo_url" class="form-control" placeholder="seo url">
                    </div>

                    <div class="form-group">
                        <label for="customFile">Custom File</label>
                        <label for="exampleInputEmail1">Image</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="form-control" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Enabled</label><br>
                        <input type="checkbox" name="enabled">
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

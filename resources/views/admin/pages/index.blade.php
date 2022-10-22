@extends('layouts.admin')

@section('title', 'Pages texts')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Page texts</h1>
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


        <form action="{{ route('pages.save') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @foreach($pages as $k => $page)
                <div class="card card-primary">
                    <div class="card-header">
                        <h2>{{ \Illuminate\Support\Str::upper($k) }}</h2>
                    </div>
                    <div class="card-body">
                        @foreach($page as $text)
                            @if($text['type'] == "text")
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ $text->name }}</label>
                                    <textarea class="summernote" name="page[{{$k}}][{{$text->name}}]">{{ $text->text }}</textarea>
                                </div>
                            @else
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ $text->name }}</label>
                                    <input type="text" name="page[{{$k}}][{{$text->name}}]" value="{{ $text->text }}" class="form-control"
                                           placeholder="Enter Title">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
            <div class="card card-primary">
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </section>
@endsection


@section('footer')
    <script>
        $(function () {
            $('.summernote').summernote()
        })
    </script>
@endsection



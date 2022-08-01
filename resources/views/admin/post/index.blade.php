@extends('layouts.admin')

@section('title', 'Post')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Posts</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">

        @if(session('success'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('success') }}
            </div>
        @endif

        <td>
            <a class="btn btn-primary" href="{{route('post.create')}}" role="button">+ Add new post</a>
        </td>
        <br>
        <br>

        <!-- Default box -->
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 3%">
                            ID
                        </th>
                        <th style="width: 13%">
                            Title
                        </th>
                        <th style="width: 20%">
                            Intro
                        </th>
                        <th style="width: 10%">
                            Meta title
                        </th>
                        <th style="width: 20%">
                            Meta description
                        </th>
                        <th style="width: 5%">
                            Seo url
                        </th>
                        <th style="width: 15%">
                            Created at
                        </th>
{{--                        <th style="width: 20%">--}}
{{--                        </th>--}}
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($posts as $post)

                        <tr>
                            <td>
                                <a>
                                    {{$post->id}}
                                </a>
                            </td>
{{--                            <td>--}}
{{--                                <a>--}}
{{--                            <img src="{{ Storage::url($post->image) }}" height="50" width="50" alt="" />--}}
{{--                                </a>--}}
{{--                            </td>--}}
                            <td>
                                <a>
                                    {{$post->title}}
                                </a>
                            </td>
                            <td>
                                <a>
                                    {{$post->intro}}
                                </a>
                            </td>
                            <td>
                                <a>
                                    {{$post->meta_title}}
                                </a>
                            </td>
                            <td>
                                <a>
                                    {{$post->meta_description}}
                                </a>
                            </td>
                            <td>
                                <a>
                                    {{$post->seo_url}}
                                </a>
                            </td>
                            <td>
                                <a>
                                    {{$post->created_at}}
                                </a>
                            </td>
                            <td class="project-actions text-right">
                                <form action="{{ route('post.destroy',$post) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('post.edit',$post) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>

            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>

    </section>

@endsection

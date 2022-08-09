@extends('layouts.admin')

@section('title', 'Post')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Posts</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

        @if(session('success'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('success') }}
            </div>
        @endif

        <td>
            <a class="btn btn-primary" href="{{route('post.create')}}" role="button">+ Add new post</a>
        </td>
        <br><br>

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
                        <th style="width: 25%">
                            Intro
                        </th>
                        <th style="width: 14%">
                            Seo url
                        </th>
                        <th style="width: 10%">
                            Created at
                        </th>
                        <th style="width: 10%">
                            Image
                        </th>
                        <th style="width: 2%">
                            Enabled
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($posts as $post)
                        <tr>
                            <td>
                                <a>{{$post->id}}</a>
                            </td>
                            <td>
                                <a>{{$post->title}}</a>
                            </td>
                            <td>
                                <a>{{$post->intro}}</a>
                            </td>
                            <td>
                                <a>{{$post->seo_url}}</a>
                            </td>
                            <td>
                                <a>{{$post->created_at}}</a>
                            </td>
                            <td>
                                <a><img src="{{ Storage::url($post->image) }}" height="50" width="50" alt="" /></a>
                            </td>
                            <td>
                                <a>
                                    {{$post->enabled}}
                                </a>
                            </td>
                            <td class="project-actions text-right">
                                <form action="{{ route('post.destroy',$post) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('post.edit',$post) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
    </section>
@endsection

@extends('layouts.admin')

@section('title', 'Airport')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Airports</h1>
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

        <a class="btn btn-primary" href="{{route('admin.airport.create')}}" role="button">+ Add new</a>
            <br><br>
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Country</th>
                            <th>Flag</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($airports as $airport)
                        <tr>
                            <td>
                                <a>{{$airport->id}}</a>
                            </td>
                            <td>
                                <a>{{$airport->title}}</a>
                            </td>
                            <td>
                                <a>{{$airport->country}}</a>
                            </td>
                            <td>
                                <a><img src="{{ Storage::url($airport->flag) }}" height="50" width="50" alt="" /></a>
                            </td>
                            <td>
                                <a><img src="{{ Storage::url($airport->image) }}" height="120" width="100" alt="" /></a>
                            </td>

                            <td class="project-actions text-right">
                                <form action="{{ route('admin.airport.destroy',$airport) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('admin.airport.edit',$airport) }}">Edit</a>
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
    </section>
@endsection

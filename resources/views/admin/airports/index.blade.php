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
                            <th>
                                <div class="d-flex align-items-center">
                                    <span>ID</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('admin.airport.index',['order'=>'ID','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('admin.airport.index',['order'=>'ID','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Title</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('admin.airport.index',['order'=>'title','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('admin.airport.index',['order'=>'title','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <span>Country</span>
                                    <div class="sort ml-2">
                                        <a href = {{route('admin.airport.index',['order'=>'country_id','sort'=>'asc'])}}>
                                            <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                        </a>
                                        <a href = {{route('admin.airport.index',['order'=>'country_id','sort'=>'desc'])}}>
                                            <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </th>
                            <th>
                                Image
                            </th>
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
                                    @if($airport->info)
                                        <a>{{$airport->info->country->name}}</a>
                                    @endif
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
                <div class="d-flex justify-content-center">
                    {{ $airports->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection

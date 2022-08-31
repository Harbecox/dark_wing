@extends('layouts.admin')

@section('title', 'Photo')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menu</h1>
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

        <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-primary" href="{{route('menu.create')}}" role="button">+ Add new</a>
            <form action="{{ route("admin.pdf") }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="pdf"><button class="btn btn-success" type="submit" >Add</button>
            </form>
        </div>

        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th>
                            <div class="d-flex align-items-center">
                                <span>ID</span>
                                <div class="sort ml-2">
                                    <a href = {{route('menu.index',['order'=>'ID','sort'=>'asc'])}}>
                                        <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                    </a>
                                    <a href = {{route('menu.index',['order'=>'ID','sort'=>'desc'])}}>
                                        <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </th>

                        <th>
                            <div class="d-flex align-items-center">
                                <span>Position</span>
                                <div class="sort ml-2">
                                    <a href = {{route('menu.index',['order'=>'Position','sort'=>'asc'])}}>
                                        <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                    </a>
                                    <a href = {{route('menu.index',['order'=>'Position','sort'=>'desc'])}}>
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
                    @foreach($photos as $menu)
                        <tr>
                            <td>
                                <a>{{$menu->id}}</a>
                            </td>
                            <td>
                                <a>{{$menu->position}}</a>
                            </td>
                            <td>
                                <a><img src="{{ Storage::url($menu->image) }}" height="150" width="120" alt="" /></a>
                            </td>
                            <td class="project-actions text-right">
                                <form action="{{ route('menu.destroy',$menu) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('menu.edit',$menu) }}">Edit</a>
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
                    {{ $photos->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection

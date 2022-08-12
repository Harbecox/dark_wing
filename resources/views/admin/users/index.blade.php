@extends('layouts.admin')
@section('title', 'User')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
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

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="d-flex align-items-center">
                                                <span>ID</span>
                                                <div class="sort ml-2">
                                                    <a href = {{route('user.index',['order'=>'ID','sort'=>'asc'])}}>
                                                        <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                                    </a>
                                                    <a href = {{route('user.index',['order'=>'ID','sort'=>'desc'])}}>
                                                        <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </th>

                                        <th>
                                            <div class="d-flex align-items-center">
                                                <span>First Name</span>
                                                <div class="sort ml-2">
                                                    <a href={{route('user.index',['order'=>'firstName','sort'=>'asc'])}}>
                                                        <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                                    </a>
                                                    <a href={{route('user.index',['order'=>'firstName','sort'=>'desc'])}}>
                                                        <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </th>

                                        <th>
                                            <div class="d-flex align-items-center">
                                                <span>Last Name</span>
                                                <div class="sort ml-2">
                                                    <a href={{route('user.index',['order'=>'lastName','sort'=>'asc'])}}>
                                                        <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                                    </a>
                                                    <a href={{route('user.index',['order'=>'lastName','sort'=>'desc'])}}>
                                                        <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </th>

                                        <th>
                                            <div class="d-flex align-items-center">
                                                <span>Email</span>
                                                <div class="sort ml-2">
                                                    <a href={{route('user.index',['order'=>'email','sort'=>'asc'])}}>
                                                        <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                                    </a>
                                                    <a href={{route('user.index',['order'=>'email','sort'=>'desc'])}}>
                                                        <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </th>

                                        <th>
                                            <span>Phone</span>
                                        </th>

                                        <th>
                                            <div class="d-flex align-items-center">
                                                <span>Company</span>
                                                <div class="sort ml-2">
                                                    <a href={{route('user.index',['order'=>'company','sort'=>'asc'])}}>
                                                        <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                                    </a>
                                                    <a href={{route('user.index',['order'=>'company','sort'=>'desc'])}}>
                                                        <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </th>

                                        <th>
                                            <div class="d-flex align-items-center">
                                                <span>isBlocked</span>
                                                <div class="sort ml-2">
                                                    <a href={{route('user.index',['order'=>'isBlocked','sort'=>'asc'])}}>
                                                        <i class="fa fa-arrow-up fs-6" aria-hidden="true"></i>
                                                    </a>
                                                    <a href={{route('user.index',['order'=>'isBlocked','sort'=>'desc'])}}>
                                                        <i class="fa fa-arrow-down fs-6" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </th>

                                        <th>
                                            <span>Avatar</span>
                                        </th>
                                    </tr>
                                </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <a>{{$user->id}}</a>
                                    </td>
                                    <td>
                                        <a>{{$user->firstName}}</a>
                                    </td>
                                    <td>
                                        <a>{{$user->lastName}}</a>
                                    </td>
                                    <td>
                                        <a>{{$user->email}}</a>
                                    </td>
                                    <td>
                                        <a>{{$user->phone}}</a>
                                    </td>
                                    <td>
                                        <a>{{$user->company}}</a>
                                    </td>
                                    <td>
                                        <a class="text-red">{{$user->isBlocked == 1 ? "Blocked" : ""}}</a>
                                    </td>
                                    <td>
                                        <a><img src="{{ Storage::url($user->avatar) }}" height="50" width="50" alt=""/></a>
                                    </td>

                                    <td class="project-actions text-right">
                                        <form action="{{ route('user.block',$user) }}" method="POST">
                                            @csrf
                                            <a class="btn btn-primary" href="{{ route('user.edit',$user) }}">Edit</a>
                                            @if($user->isBlocked == 0)
                                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" id="button">Block</button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                    <div class="d-flex justify-content-center">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

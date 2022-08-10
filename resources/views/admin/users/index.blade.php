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

        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 3%">
                                ID
                            </th>
                            <th style="width: 10%">
                                First Name
                            </th>
                            <th style="width: 10%">
                                Last Name
                            </th>
                            <th style="width: 13%">
                                Email
                            </th>
                            <th style="width: 10%">
                                Phone
                            </th>
                            <th style="width: 10%">
                                Company
                            </th>
                            <th style="width: 5%">
                                isBlocked
                            </th>
                            <th style="width: 7%">
                                Avatar
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
                                        <button type="submit" onclick="blockUser()" class="btn btn-danger" id="button">Block</button>
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
    </section>
@endsection

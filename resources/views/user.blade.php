@extends('layouts.mainlayout')

@section('title', 'Users Page')

@section('content')
    <h1>Users List</h1>
    <hr>
    <div class="mt-5 d-flex justify-content-end">
        <a href="users-banned" class="btn btn-secondary me-3"><i class="bi bi-binoculars-fill"></i>View Banned Users</a>
        <a href="/registed-users" class="btn btn-primary"><i class="bi bi-plus"></i>New Registered Users</a>
    </div>
    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="my-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->username }}</td>
                            <td>
                                @if($user->phone)
                                    {{ $user->phone }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                <a href="/user-detail/{{ $user->slug}}"><i class="bi bi-info-circle"></i>Detail User</a>
                                <a href="/user-ban/{{ $user->slug}}"><i class="bi bi-slash-circle"></i>Banned</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

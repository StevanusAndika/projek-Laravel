@extends('layouts.mainlayout')

@section('title', 'Users')

@section('content')
    <h1>New Registered Users List</h1>
    <hr>
    <div class="mt-5 d-flex justify-content-end">
     <a href="/users" class="btn btn-success"><i class="bi bi-arrow-left">Approved Users List</i></a>
    </div>
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
            @foreach ($registeredUsers as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->username }}</td>
                    <td>
                        @if($item->phone)
                            {{ $item->phone }}
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="/user-detail/{{ $item->slug}}"><i class="bi bi-search">Detail User</i></a>

                        </td>
                        @endforeach
                    </tr>

            </tbody>
        </table>
    </div>
@endsection

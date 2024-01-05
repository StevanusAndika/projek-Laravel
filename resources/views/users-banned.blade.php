@extends('layouts.mainlayout')

@section('title', 'User')

@section('content')
    <h1>Banned Users List</h1>
    <hr>

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
                    @foreach ($bannedUsers as $item)
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
                                <a href="/user-restore/{{ $item->slug}}"><i class="bi bi-bootstrap-reboot"></i> Restore</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

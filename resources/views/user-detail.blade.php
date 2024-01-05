@extends('layouts.mainlayout')

@section('title', 'User Detail')

@section('content')
    <h1> User Detail</h1>
    <hr>

    <div class="mt-5 d-flex justify-content-end">
        @if ($user->status == 'inactive')
            <a href="/user-approve/{{ $user->slug }}" class="btn btn-info"><i class="bi bi-check"></i>Approved User</a>
        @endif
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="my-5 w-25">
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" class="form-control" readonly value="{{ $user->username }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Phone Number</label>
            <input type="text" class="form-control" readonly value="{{ $user->phone }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Address</label>
            <input type="text" class="form-control" readonly value="{{ $user->address }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <input type="text" class="form-control" readonly value="{{ $user->status }}">
        </div>

        <div class="mt-5">
            <h1 style="font-size: 15px;">User's Rent Log</h1>

            <hr>
            <x-rent-log-table :rentlog="$rent_logs"/>
        </div>



    </div>
@endsection

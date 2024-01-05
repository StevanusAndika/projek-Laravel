@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
<h1>Welcome,{{Auth::user()->username}}</h1>
<hr>
<div class="row my-5">
<div class="col-lg-4">
    <div class="card-data book">
     <div class="row">
        <div class="col-6"><i class="bi bi-journal-bookmark"></i></div>
        <div class="col-6 d-flex flex-column justify-content-center align-items-lg-end">
            <div class="card-desc">books</div>
            <div class="card-count">{{$bookCount}}</div>
        </div>
     </div>
    </div>
</div>

<div class="col-lg-4">
    <div class="card-data Category">
     <div class="row">
        <div class="col-6"><i class="bi bi-list-task"></i></div>
        <div class="col-6 d-flex flex-column justify-content-center align-items-lg-end">
            <div class="card-desc">Categories</div>
            <div class="card-count">{{$categoryCount}}</div>
        </div>
     </div>
    </div>
</div>

<div class="col-lg-4">
    <div class="card-data user">
     <div class="row">
        <div class="col-6"><i class="bi bi-people-fill"></i></div>
        <div class="col-6 d-flex flex-column justify-content-center align-items-lg-end">
            <div class="card-desc">Users</div>
            <div class="card-count">{{$userCount}}</div>
        </div>
     </div>
    </div>
</div>
</div>
<div class="mt-5">
    <h2>#Rent Log</h2>
    <x-rent-log-table :rentlog="$rentlogs"/>
</div>
@endsection


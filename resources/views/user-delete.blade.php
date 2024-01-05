@extends('layouts.mainlayout')

@section('title', 'Delete Users')

@section('content')

<h2>Are You Sure Want To Delete User   {{ $user->username }}??</h2>
<div class="mt-5">
<a href="/user-destroy/{{ $user->slug}}" class="btn btn-success me-5"><i class="bi bi-trash"></i> Sure</a>
<a href="/users" class="btn btn-danger"><i class="bi bi-x-square-fill"> Cancel</i></a>
</div>
@endsection


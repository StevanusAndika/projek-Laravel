@extends('layouts.mainlayout')

@section('title', 'Deleted Category')

@section('content')
<h1>Deleted Category List</h1>
<hr>
<div class="mt-5 d-flex justify-content-end">

    <a href="category-add" class="btn btn-primary">
        <i class="bi bi-plus"></i> Back
    </a>
</div>
<div class="mt-5">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
</div>
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($deletedCategories as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <a href="category-restore/{{ $item->slug }}">
                    <i class="bi bi-arrow-counterclockwise"></i> Restore
                </a>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection

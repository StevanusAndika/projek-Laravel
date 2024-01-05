@extends('layouts.mainlayout')

@section('title', 'Category')

@section('content')
<h1>Category List</h1>
<hr>
    <div class="mt-5 d-flex justify-content-end">
        <a href="category-deleted"class="btn btn-secondary me-3"><i class="bi bi-binoculars-fill">View Deleted Data</i></a>
        <a href="category-add"class="btn btn-primary"><i class="bi bi-plus">Add Data</i></a>
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
            <th>No.</th>
            <th>Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($categories as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="category-edit/{{ $item->slug}}"><i class="bi bi-pencil">Edit</i></a>
                    <a href="category-delete/{{ $item->slug}}"><i class="bi bi-trash">Delete</i></a>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

